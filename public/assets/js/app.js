var app = angular.module("site", ["ngRoute", "angular-loading-bar"]),
    serviceUrl = location.origin + '/api/';

app.config(['$locationProvider', '$routeProvider', function config($locationProvider, $routeProvider) {
    $locationProvider.hashPrefix('!');

    var indexPageController = ['$rootScope', '$http', '$routeParams', '$sce', function ArticleController($rootScope, $http, $routeParams, $sce) {

        var categoryAlias = $routeParams.categoryAlias ? $routeParams.categoryAlias : 'articles',
            articleAlias = $routeParams.articleAlias ? $routeParams.articleAlias : 'index';
        $http
            .get(serviceUrl + categoryAlias + '/' + articleAlias)
            .then(function(response) {
                if (response.statusText == "OK") {
                    $rootScope.page = response.data;
                    $rootScope.page.text = $sce.trustAsHtml($rootScope.page.text);

                    // Устанавливаем Meta
                    document.querySelector('meta[name="description"]').setAttribute('content', $rootScope.page.metaDescription ? $rootScope.page.metaDescription : '');
                    document.querySelector('meta[name="keywords"]').setAttribute('content', $rootScope.page.metaKeywords ? $rootScope.page.metaKeywords : '');
                } else {
                    window.location.href('/#!/404');
                }
            });
    }];

    $routeProvider
        .when('/', {
            templateUrl: '/templates/landing.php',
            controller: indexPageController
        })
        .when('/articles/:articleAlias', {
            templateUrl: '/templates/article.php',
            controller: indexPageController
        })
        .when('/categories', {
            templateUrl: '/templates/categories.php',
            controller: ['$rootScope', '$http', '$routeParams', '$sce', function ArticleController($rootScope, $http, $routeParams, $sce) {
                $rootScope.page = { h1: 'Какво предлагме', title: 'Какво предлагме' };

                $http
                    .get(serviceUrl + 'categories')
                    .then(function(response) {
                        $rootScope.categories = response.data;
                    });
            }]
        })
        .when('/category-articles/:categoryId', {
            templateUrl: '/templates/category-articles.php',
            controller: ['$rootScope', '$http', '$routeParams', '$sce', function ArticleController($rootScope, $http, $routeParams, $sce) {
                $rootScope.page = { h1: 'Категория на статията', title: 'Категория на статията' };

                $http
                    .get(serviceUrl + 'articlesByCatId/' + $routeParams.categoryId)
                    .then(function(response) {
                        var articles = response.data;

                        articles.forEach(function(acticle, index) {
                            articles[index].created_at = new Date(acticle.created_at).getTime();
                            articles[index].updated_at = new Date(acticle.updated_at).getTime();
                        })
                        $rootScope.articles = articles;
                    });
            }]
        })
        .when('/404', {
            templateUrl: '/templates/404.php',
            controller: ['$rootScope', '$http', '$routeParams', '$sce', function ArticleController($rootScope, $http, $routeParams, $sce) {}]
        })
        .otherwise('/404');
}]);
