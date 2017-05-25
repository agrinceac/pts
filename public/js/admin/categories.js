/**
 * Created by rainx_000 on 23.08.2016.
 */
var category = function (app, module) {
    this.app    = app;
    this.module = module;

    this.controllers = {
        categories: function(Category, Status, $http, $scope, $state, $stateParams ){
            $scope.filters = {
                page: parseInt($stateParams.page) || 1
            };
            Category.query($scope.filters, function(response) {
                $scope.categories   = response.data;
                $scope.per_page     = response.per_page;
                $scope.total        = response.total;
                $scope.current_page = response.current_page;
                $scope.filters.page = response.current_page;

                $scope.showPagination = $scope.per_page < $scope.total;
            });

            $scope.categoryDelete = function(id){
                Category.delete({id: id}, function(){
                    $scope.categories = $scope.categories.filter(function(el) {
                        return el.id !== id;
                    });
                });
            };
            $scope.back = function () {
                $state.go($state.$current.parent.parent+".list");
            };
            $scope.create = function () {
                $state.go($state.$current.parent+".create");
            };
            $scope.edit = function (id) {
                $state.go($state.$current.parent+".edit", { 'id': id });
            };
            $scope.setPage = function(){
                $state.go($state.$current.parent+'.list', { page : $scope.filters.page });
            };
        },
        edit: function(Category, Status, $http, $scope, $state, $stateParams){
            $scope.editorOptions = {
                language: 'en',
                skin:'office2013'
            };

            Category.get({ id: $stateParams.id }, function(data) {
                $scope.category = data;
                Category.query(function(response){
                    $scope.parents = response.data.filter(function (el) {
                        return el.id !== $scope.category.id
                    });
                });
            });

            Status.query(function(response){
                $scope.statuses = response;
            });

            $scope.saveCategory = function(){
                $scope.categoryUpdateForm.$submitted = true;

                if ($scope.categoryUpdateForm.$valid) {
                    var category = Category.get({id:$scope.category.id}, function(){
                        category = angular.copy($scope.category);
                        category.$update(function (response) {
                            console.log(response);
                        }, function (response) {
                            $scope.mainMessage = 'Some errors occurs during save this record';
                            $scope.errors = response.data;
                        });
                    });
                } else {
                    $scope.mainMessage = 'Something is wrong, please check fields';
                }
            };

            $scope.back = function () {
                $state.go($state.$current.parent+".list");
            };
        },
        create: function(Category, Status, $http, $scope, $state, $stateParams){
            $scope.editorOptions = {
                language: 'en',
                skin:'office2013'
            };

            Status.query(function(response){
                $scope.statuses = response;
            });

            Category.query(function(response){
                $scope.parents = response.data;
            });

            $scope.saveCategory = function(){
                $scope.categoryStoreForm.$submitted = true;

                if ($scope.categoryStoreForm.$valid) {
                    var category = angular.copy($scope.category);
                    Category.save(category, function () {
                        $state.go($state.$current.parent + ".list");
                    }, function(response){
                        $scope.mainMessage = 'Some errors occurs during save this record';
                        $scope.errors = response.data;
                    });
                } else {
                    $scope.mainMessage = 'Something is wrong, please check fields';
                }
            };

            $scope.back = function () {
                $state.go($state.$current.parent+".list");
            }
        }
    };

    this.setFactory = function ( factoryName ) {
        this.factoryName = factoryName;
        return this;
    };

    this.getFactoryName = function () {
        return this.factoryName;
    };

    this.makeFactory = function(factoryName) {
        var that = this;
        this.setFactory(factoryName)
            .makeStatus(factoryName)
            .app
            .factory(factoryName, function ($resource) {
                return $resource("/api/admin/"+that.module+"/categories/:id", {id:'@id'},
                    {
                        'update' : { method : 'PUT' },
                        'query'  : { method : 'GET', isArray: false, cancellable: true }
                    });
            });

        return this;
    };

    this.makeStatus = function (factoryName) {
        var that = this;
        this.app.factory(factoryName+'Status', function ($resource) {
            return $resource("/api/admin/"+that.module+"/categories/statuses:id", {id:'@id'},
                {
                    'update' : { method : 'PUT' },
                    'query'  : { method : 'GET', isArray: true, cancellable: true }
                });
        });
        return this;
    };

    this.init = function () {
        var that = this;

        that.makeFactory(that.module+'Categories');

        app.config(function($stateProvider){
            $stateProvider
                .state(that.module+'.categories', {
                    abstract: true,
                    url : '/categories',
                    // Note: abstract still needs a ui-view for its children to populate.
                    // You can simply add it inline here.
                    template: '<ui-view/>'
                })
                .state(that.module+'.categories.list', {
                    url : '/list?page',
                    templateUrl : '/templates/admin/categories/list.tpl',
                    controller  : [that.getFactoryName(), that.getFactoryName()+'Status', '$http', '$scope', '$state', '$stateParams', that.controllers.categories]
                })
                .state(that.module+'.categories.create', {
                    url : '/create',
                    templateUrl : '/templates/admin/categories/create.tpl',
                    controller  : [that.getFactoryName(), that.getFactoryName()+'Status', '$http', '$scope', '$state', '$stateParams', that.controllers.create]
                })
                .state(that.module+'.categories.edit', {
                    url : '/:id',
                    templateUrl : '/templates/admin/categories/edit.tpl',
                    controller  : [that.getFactoryName(), that.getFactoryName()+'Status', '$http', '$scope', '$state', '$stateParams', that.controllers.edit]
                });
        });


        return this;
    };

};