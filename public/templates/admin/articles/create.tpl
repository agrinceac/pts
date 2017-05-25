<div class="content-section-a">
    <div class="container">
        <h1>
            Create new record
            <button ng-click="save()" type="submit" class="btn btn-success btn-sm objectFormSubmit">Store</button>
            <a ui-sref="articles.list" class="btn btn-warning btn-sm">Back</a>
        </h1>
    </div>
</div>
<div class="content-section-b">
    <div class="container">
        <div class="row" ng-show="mainMessage">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">{{mainMessage}}</div>
            </div>
        </div>
        <form name="storeForm" class="form-horizontal objectForm" method="post" novalidate>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Category*</label>
                <div class="col-sm-10">
                    <select
                        name="categoryId"
                        class="form-control"
                        ng-model="record.categoryId"
                        required
                        ng-options="category.id as ( category.name ) for category in categories"
                    ></select>
                    <div class="help-block text-danger" ng-messages="storeForm.categoryId.$error" ng-show="storeForm.categoryId.$touched || storeForm.$submitted">
                        <div class="text-danger" ng-message="required">You should set a category</div>
                    </div>
                    <div class="help-block" ng-repeat="error in errors.categoryId"><p class="text-danger">{{error}}</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Status*</label>
                <div class="col-sm-10">
                    <select
                        name="statusId"
                        class="form-control"
                        ng-model="record.statusId"
                        required
                        ng-options="status.id as ( status.name ) for status in statuses"
                    ></select>
                    <div class="help-block text-danger" ng-messages="storeForm.statusId.$error" ng-show="storeForm.statusId.$touched || storeForm.$submitted">
                        <div class="text-danger" ng-message="required">You should set a status</div>
                    </div>
                    <div class="help-block" ng-repeat="error in errors.statusId"><p class="text-danger">{{error}}</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title*</label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        ng-model="record.name"
                        ng-minlength="2"
                        ng-maxlength="400"
                        required
                    >
                    <div class="help-block text-danger" ng-messages="storeForm.name.$error" ng-show="storeForm.name.$touched || storeForm.$submitted">
                        <div class="text-danger" ng-message="required">The name is required</div>
                        <div class="text-danger" ng-message="minlength">Your field is too short</div>
                        <div class="text-danger" ng-message="maxlength">Your field is too long</div>
                    </div>
                    <div class="help-block" ng-repeat="error in errors.name"><p class="text-danger">{{error}}</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Alias*</label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        name="alias"
                        ng-model="record.alias"
                        ng-minlength="2"
                        ng-maxlength="400"
                        required
                    >
                    <div class="help-block text-danger" ng-messages="storeForm.alias.$error" ng-show="storeForm.alias.$touched || storeForm.$submitted">
                        <div class="text-danger" ng-message="required">The alias is required</div>
                        <div class="text-danger" ng-message="minlength">Your field is too short</div>
                        <div class="text-danger" ng-message="maxlength">Your field is too long</div>
                    </div>
                    <div class="help-block" ng-repeat="error in errors.alias"><p class="text-danger">{{error}}</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Header h1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="h1" ng-model="record.h1">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea ckeditor="editorOptions" ng-model="record.description"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Text*</label>
                <div class="col-sm-10">
                    <textarea
                        ckeditor="editorOptions"
                        name="text"
                        ng-model="record.text"
                        required
                    ></textarea>
                    <div class="help-block" ng-messages="storeForm.text.$error" ng-show="storeForm.$submitted">
                        <div class="text-danger" ng-message="required">The text is required</div>
                        <div class="text-danger" ng-message="minlength">Your field is too short</div>
                        <div class="text-danger" ng-message="maxlength">Your field is too long</div>
                    </div>
                    <div class="help-block" ng-repeat="error in errors.text"><p class="text-danger">{{error}}</p></div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Meta Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="metaTitle" ng-model="record.metaTitle">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Meta Keywords</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="metaKeywords" ng-model="record.metaKeywords">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Meta Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="metaDescription" ng-model="record.metaDescription">
                </div>
            </div>
        </form>
    </div>
</div>