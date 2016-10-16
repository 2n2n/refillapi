
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./modules/customer/main');

// angular.module('RefillApp', [require('angular-route'), 'CustomerModule'] )

// .config(['$interpolateProvider', '$routeProvider', '$locationProvider', function($interpolateProvider, $routeProvider, $locationProvider) {
// 	$interpolateProvider.startSymbol('//');
// 	$interpolateProvider.endSymbol('//');

// 	$routeProvider.when('client', {
// 		templateUrl: 'a/client_create_form',
// 		controller: 'DashboardController'
// 	})
// 	.when('/', {
// 		templateUrl: 'a/simple',
// 		controller: 'DashboardController'
// 	});
// }])
// .controller('DashboardController',['$scope', '$location', '$route', function($scope, $location, $route) {
// 	$scope.menus = [
// 		{ label: 'Client Management', submenu: [
// 			{ label: 'New Client', url: '/' },
// 			{ label: 'Client List', url: '#/client' }
// 		]},
// 		{ label: 'Settings', url: 'settings' }
// 	];
// }])
// .controller('simpleController', ['$scope', function($scope) {
// 	this.message = 'don\'t me';
// 	console.log('executed');
// }])

// .directive('simple', [function() {
// 	return {
// 		restrict: 'E',
// 		scope: true,
// 		templateUrl: 'a/simple',
// 		link: function(scope, el, attr) {
// 			console.log(scope);
// 		}
// 	}
// }])

