'use strict';

/**
 * @ngdoc service
 * @name angularApp.Tabs
 * @description
 * # Tabs
 * Factory in the angularApp.
 */
angular.module('angularApp')
  .factory('Tabs', function ($http) {
    var API = {};

    API.getTabs = function() {
      return $http({
        url: '/tabs',
        method: 'GET'
      });
    }
    
    API.addTab = function(data) {
      return $http({
        url: '/tabs',
        method: 'POST',
        data: data
      });
    }
    
    API.delTab = function(id) {
	    return $http({
		    url: '/tabs/'+id,
		    method: 'DELETE'
	    });
    }

    return API;
  });
