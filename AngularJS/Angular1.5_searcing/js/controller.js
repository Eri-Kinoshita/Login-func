var listControllers = angular.module("listControllers", []);
  listControllers.controller("myController", ["$scope","$http", function($scope, $http){
  	// when successfuly load jsonfile
  	$http.get("js/data.json").success( function(data){
  		//読み込んだデータを$artistsにいれる
  		$scope.artists = data;
  		$scope.artistOrder = "name";
  	});
  }]);
  listControllers.controller("detailsController", ["$scope","$http", function($scope, $http){


  }]);
