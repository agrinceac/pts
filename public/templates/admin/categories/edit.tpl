<div class="content-section-a">
    <div class="container">
        <h1>
            Category edit mode
            <button ng-click="saveCategory()" type="submit" class="btn btn-success btn-sm objectFormSubmit">Update</button>
            <a ng-click="back()" class="btn btn-warning btn-sm">Back</a>
        </h1>
    </div>
</div>
<div class="content-section-b">
    <div class="container" ng-hide="category">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">Data is loading</div>
            </div>
        </div>
    </div>

    <div class="container" ng-show="category">
        <div class="row" ng-show="mainMessage">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">{{mainMessage}}</div>
            </div>
        </div>
        <form class="form-horizontal objectForm" method="post" name="categoryUpdateForm">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Parent</label>
                <div class="col-sm-10">
                    <select name="categoryId" class="form-control" ng-model="category.parentId" ng-options="parent.id as ( parent.name ) for parent in parents"></select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                    <select
                        name="statusId"
                        class="form-control"
                        ng-model="category.statusId"
                        required
                        ng-options="status.id as ( status.name ) for status in statuses"
                    ></select>
                    <div class="help-block text-danger" ng-messages="categoryUpdateForm.statusId.$error" ng-show="categoryUpdateForm.statusId.$touched || categoryUpdateForm.$submitted">
                        <div class="text-danger" ng-message="required">You should set a status</div>
                    </div>
                    <div class="help-block" ng-repeat="error in errors.statusId"><p class="text-danger">{{error}}</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        ng-model="category.name"
                        ng-minlength="2"
                        ng-maxlength="400"
                        required
                    >
                    <div class="help-block text-danger" ng-messages="categoryUpdateForm.name.$error" ng-show="categoryUpdateForm.name.$touched || categoryUpdateForm.$submitted">
                        <div class="text-danger" ng-message="required">The name is required</div>
                        <div class="text-danger" ng-message="minlength">Your field is too short</div>
                        <div class="text-danger" ng-message="maxlength">Your field is too long</div>
                    </div>
                    <div class="help-block" ng-repeat="error in errors.name"><p class="text-danger">{{error}}</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Alias</label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        name="alias"
                        ng-model="category.alias"
                        ng-minlength="2"
                        ng-maxlength="400"
                        required
                    >
                    <div class="help-block text-danger" ng-messages="categoryUpdateForm.alias.$error" ng-show="categoryUpdateForm.alias.$touched || categoryUpdateForm.$submitted">
                        <div class="text-danger" ng-message="required">The alias is required</div>
                        <div class="text-danger" ng-message="minlength">Your field is too short</div>
                        <div class="text-danger" ng-message="maxlength">Your field is too long</div>
                    </div>
                    <div class="help-block" ng-repeat="error in errors.alias"><p class="text-danger">{{error}}</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea ckeditor="editorOptions" ng-model="category.description"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>