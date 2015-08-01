'use strict';

/**
 * @ngdoc function
 * @name angularApp.controller:NavCtrl
 * @description
 * # NavCtrl
 * Controller of the angularApp
 */
angular.module('angularApp')
  .controller('NavCtrl', ['$scope', '$location', function ($scope, $location) {
    $scope.at = function (path) {
      return $location.path() == path;
    };
  }]);
