var myApp = angular.module("myApp", ["ngRoute","listControllers"]);

myApp.config(["$routeProvider",function($routeProvider){
	$routeProvider
	.when("/list",{
		templateUrl : "partials/list.html",
		controller : "myController"
	})
	.when("/details",{
		templateUrl : "partials/details.html",
		controller : "detailsController"
	})
	.otherwise({
		redirectTo : "/list"
	});
}]);

