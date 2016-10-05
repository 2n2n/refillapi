angular.module('RefillApp', ['ngRoute', 'CustomerModule'])
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

