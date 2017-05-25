var adminApp = angular.module('adminApp', [
    'ui.router',
    'angular-loading-bar',
    'ngAnimate',
    'ngResource',
    'mwl.confirm',
    'ui.bootstrap',
    'ngMessages',
    'ngCkeditor'
]);

adminApp.config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise("/");

    $stateProvider
        .state('index', {
            url : '/',
            controller  : function($http, $scope, $state) {
                $state.go('articles.list');
            }
        });
});

var _utils = new utils();