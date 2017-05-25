var app = angular.module('adminApp');

var articlesCategories = new category(app, 'articles');
articlesCategories.init();

app.directive('imageread', function(){
    return {
        scope: {
            imageread: '='
        },
        link: function (scope, element, attributes) {
            element.bind("change", function (changeEvent) {
                var images = changeEvent.target.files;
                scope.$apply(function () {
                    scope.selectedImage = images;
                    scope.inputElement = element;
                });
            });
        }
    };
});

app
    .factory("Article", function($resource) {
        return $resource("/api/admin/articles/:id", {id:'@id'},
            {
                'update' : { method : 'PUT' },
                'query'  : { method : 'GET', isArray: false, cancellable: true }
            });
    })
    .controller('articlesCtrl', articlesCtrl)
    .controller('articlesCreateCtrl', articlesCreateCtrl)
    .controller('articlesEditCtrl', articlesEditCtrl);

app.config(function($stateProvider){
    $stateProvider
        .state('articles', {
            abstract: true,
            url : '/articles',
            template: '<ui-view/>'
        })
        .state('articles.list', {
            url : '/list/?page&categoryId&statusId&name&text&description&objectId',
            templateUrl : '/templates/admin/articles/list.tpl',
            controller  : 'articlesCtrl'
        })
        .state('articles.create', {
            url : '/create',
            templateUrl : '/templates/admin/articles/create.tpl',
            controller  : 'articlesCreateCtrl'
        })
        .state('articles.variables', {
            url : '/variables',
            templateUrl : '/templates/admin/articles/variables.tpl',
            controller  : 'articlesVariablesCtrl'
        })
        .state('articles.edit', {
            url : '/:id',
            templateUrl : '/templates/admin/articles/edit.tpl',
            controller  : 'articlesEditCtrl'
        });
});

function articlesCtrl($scope, Article, $state, $stateParams, $http){
    $scope.filters = {
        page: $stateParams.page,
        categoryId: $stateParams.categoryId ? parseInt($stateParams.categoryId) : null,
        statusId: $stateParams.statusId ? parseInt($stateParams.statusId) : null,
        name: $stateParams.name || null,
        text: $stateParams.text || null,
        objectId: $stateParams.objectId ? parseInt($stateParams.objectId) : null,
    };

    $http.get('/api/admin/articles/statuses').then(function(response){
        $scope.statuses = response.data;
    });
    $http.get('/api/admin/articles/categories').then(function(response){
        $scope.categories = response.data.data;
    });

    Article.query($scope.filters, function(response) {
        $scope.records      = response.data;
        $scope.per_page     = response.per_page;
        $scope.total        = response.total;
        $scope.filters.page = response.current_page;

        $scope.showPagination = $scope.per_page < $scope.total;
    });


    $scope.pageChanged = function() {
        console.log('Page changed to: ' + $scope.current_page);
    };
    $scope.setPage = function(){
        $state.go('articles.list', { page : $scope.filters.page });
    };
    $scope.delete = function(id){
        Article.delete({id: id}, function(){
            $scope.records = $scope.records.filter(function(el) {
                return el.id !== id;
            });
        });
    };
    $scope.filterByForm = function () {
        $state.go('articles.list', $scope.filters);
    };

    $.each($scope.filters, function(property, value ) {
        if(property != 'page')
            if(value != null)
                return $scope.filterOn = true;
    });
}

function articlesEditCtrl($http, $scope, Article, $stateParams, $state, $timeout){
    $scope.editorOptions = {
        language: 'en',
        skin: 'office2013',
        contentsCss: [
            '/assets/plugins/bootstrap/css/bootstrap.min.css',
            '/assets/css/style.css',
            '/assets/css/theme-colors/default.css',
            '/assets/css/theme-skins/dark.css',
            '/assets/css/custom.css'
        ],
        allowedContent: true
    };

    $scope.copied = false;

    Article.get({ id: $stateParams.id }, function(data) {
        $scope.record = data;
    });
    $http.get('/api/admin/articles/statuses').then(function(response){
        $scope.statuses = response.data;
    });
    $http.get('/api/admin/articles/categories').then(function(response){
        $scope.categories = response.data.data;
    });
    $http.get('/api/admin/articles/' + $stateParams.id + '/images').then(function(response){
        $scope.images = response.data;

        $scope.getImagesCount = function () {
            return $scope.images.length;
        };

        $scope.getImageLink = function (image) {
            if (image){
                return image.basePath + '/' + image.filename;
            }
        };

    });

    $scope.save = function(){
        $scope.updateForm.$submitted = true;

        if ($scope.updateForm.$valid) {
            var record = angular.copy($scope.record);
            record.$update(function (response) {
            }, function (response) {
                $scope.mainMessage = 'Some errors occurs during save this record';
                $scope.errors = response.data;
            });
        } else {
            $scope.mainMessage = 'Something is wrong, please check fields';
        }

    };

    $scope.uploadImage = function () {
        var files = $scope.$$childHead.selectedImage;

        if (files) {
            $scope.uploadError = '';
            var formData = new FormData();
            formData.append("images", files[0]);

            $http.post('/api/admin/articles/' + $stateParams.id + '/images/upload', formData, {
                headers: {'Content-Type': undefined},
                transformRequest: angular.identity
            }).then(function (response) {
                $scope.updateImages();
                $scope.$$childHead.inputElement.val(null);
                $scope.$$childHead.selectedImage = '';
            }, function (response) {
                $scope.uploadError = response.data;
            });
        } else {
            $scope.uploadError = {};
            $scope.uploadError.images = ['No images selected.'];
        }
    };

    $scope.updateImages = function () {
        $http.get('/api/admin/articles/' + $stateParams.id + '/images').then(function(response) {
            $scope.images = response.data;
        });
    };

    $scope.copyLink = function (image) {
        var imageUrl = image.basePath + '/' + image.filename;
        clipboard.copy(imageUrl);
        $scope.copied = true;
        $timeout(function () {
            $scope.copied = false;
        }, 3000);
    };

    $scope.removeImage = function (image) {
        var params = {
            imageId: image.id
        };

        $http.put('/api/admin/articles/' + $stateParams.id + '/images/remove', params).then(function (data) {
            $scope.images = $scope.images.filter(function(el) {
                return el.id !== image.id;
            });
        });
    }
}

function articlesCreateCtrl($http, $scope, Article, $state){
    $scope.editorOptions = {
        language: 'en',
        skin:'office2013'
    };

    $http.get('/api/admin/articles/statuses').then(function(response){
        $scope.statuses = response.data;
    });
    $http.get('/api/admin/articles/categories').then(function(response){
        $scope.categories = response.data.data;
    });

    $scope.save = function(){
        $scope.storeForm.$submitted = true;

        if ($scope.storeForm.$valid) {
            var record = angular.copy($scope.record);
            Article.save(record, function(){
                $state.go('articles.list')
            }, function(response){
                $scope.mainMessage = 'Some errors occurs during save this record';
                $scope.errors = response.data;
            });
        } else {
            $scope.mainMessage = 'Something is wrong, please check fields';
        }
    };
}