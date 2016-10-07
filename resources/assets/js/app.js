
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./modules/customer/main');

angular.module('RefillApp', [require('npm-angular-route'), 'CustomerModule'] )

.config(function($interpolateProvider) {
	$interpolateProvider.startSymbol('//');
	$interpolateProvider.endSymbol('//');
})

.controller('simpleController', ['$scope', function($scope) {
	this.message = 'don\'t me';
	console.log('executed');
}])

.directive('simple', [function() {
	return {
		restrict: 'E',
		scope: true,
		templateUrl: 'a/simple',
		link: function(scope, el, attr) {
			console.log(scope);
		}
	}
}])

