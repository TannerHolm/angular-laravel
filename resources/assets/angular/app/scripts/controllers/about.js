'use strict';

/**
 * @ngdoc function
 * @name angularApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the angularApp
 */
angular.module('angularApp')
  .controller('AboutCtrl', function ($scope, Tabs) {
	  
    $scope.oneAtATime = true;
    
    $scope.groups;
    
    $scope.title;
    
    $scope.content;
    
    $scope.error;
    
    Tabs.getTabs().success(function (response) {
        $scope.groups = response;
    });
	
	  $scope.items = ['Item 1', 'Item 2', 'Item 3'];
	  
	  $scope.addTab = function() {
		  
		  var data = {
			  title:$scope.title, 
			  content:$scope.content
			};
			
			if (! $scope.title || ! $scope.content) {
				$scope.error = true;
			} else {
				$scope.error = false;
				
			  Tabs.addTab(data).success(function(response) {
				  Tabs.getTabs().success(function (response) {
		        $scope.groups = response;
		    	});
			  });
		  
				$scope.title = '';
				$scope.content = '';
			}
    };
    
    $scope.delTab = function(group, id) {
	    Tabs.delTab(id).success(function() {
			  $scope.groups.splice($scope.groups.indexOf(group), 1);
		  });
    };
	
	  $scope.addItem = function() {
	    var newItemNo = $scope.items.length + 1;
	    $scope.items.push('Item ' + newItemNo);
	  };
  });
