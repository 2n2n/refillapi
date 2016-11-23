<?php

namespace App\Http\Controllers;

use App\User;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Validator;
use Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = UserRole::findOrFail(3);
        return view('user.index', ['users' => $roles->users ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', [
            'roles' => UserRole::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'              => 'required',
            'password'          => 'confirmed:confirm_password',
            'confirm_password'  => 'required',
            'email'             => 'required|unique:users,email'
        ];

        $validator = Validator::make($request->all(), $rules);

        if( $validator->fails() )
        {
            return Redirect::to('/user/create')
                ->withErrors($validator)
                ->withInput($request->all());
        }
        else 
        {
            $user = new User;
            $user->password     = $request->input('password');
            $user->name         = $request->input('name');
            $user->address      = $request->input('address');
            $user->usertype_id  = $request->input('role');
            $user->email        = $request->input('email');

            $user->save();
            return redirect('user');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where(['id' => $id])->first();
        return view('user.edit')
            ->with('user', $user)
            ->with('roles', UserRole::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name'      => 'required',
        ];

        // fallback if email is filled and email is not the same as own email. do validation.
        if( !empty($request->input('email')) )
        {
            $user =  User::where('id', $id)->first();
            if( $user->email != $request->input('email') ) { $rules['email'] = 'unique:users,email'; }
        }

        if( !empty($request->input('password')) )
        {
            $rules['password']          = 'confirmed:confirm_password';
            $rules['confirm_password']  = 'required';
        }

        $validator = validator::make($request->all(), $rules);
        
        if( $validator->fails() )
        {
            return Redirect::to('user/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput($request->except(['password']));
        }
        else 
        {
           $user =  User::where('id', $id)->first();
           $user->name      = $request->input('name');
           $user->address   = $request->input('address');
           $user->email     = $request->input('email');
           $user->usertype_id = $request->input('role');

           if( !empty($request->input('password')) )
           {
                $user->password = $request->input('password');
           }

           $user->save();

           return Redirect::to('user/'.$id.'/edit')
                ->with('user', $user);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return Redirect::to('/user');
    }
}
