'use strict';

/**
 * @ngdoc function
 * @name angularApp.controller:ContactCtrl
 * @description
 * # ContactCtrl
 * Controller of the angularApp
 */
angular.module('angularApp')
  .controller('ContactCtrl', function ($scope) {
    
    $scope.tabs = [
	    { title:"Dynamic Title 1", content:"Dynamic content 1" },
	    { title:"Dynamic Title 2", content:"Dynamic content 2" },
	    { title:"Dynamic Title 3", content:"Dynamic content 3" }
	  ];
	
	  $scope.alertMe = function() {
	    setTimeout(function() {
	      alert("You've selected the alert tab!");
	    });
	  };
  });
