<div class="content-section-a">
    <div class="container">
        <h1>
            Record edit mode
            <button ng-click="save()" type="submit" class="btn btn-success btn-sm objectFormSubmit">Update</button>
            <a ui-sref="articles.list" class="btn btn-warning btn-sm">Back</a>
        </h1>
    </div>
</div>
<div class="content-section-b">
    <div class="container" ng-hide="record && statuses && categories">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">Data is loading</div>
            </div>
        </div>
    </div>

    <div class="container" ng-show="record && statuses && categories">
        <div class="row" ng-show="mainMessage">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">{{mainMessage}}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Article data
                    </div>
                    <div class="panel-body">
                        <form name="updateForm" class="form-horizontal objectForm" method="post" novalidate>
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
                                    <div class="help-block text-danger" ng-messages="recordStoreForm.categoryId.$error" ng-show="recordStoreForm.categoryId.$touched || recordStoreForm.$submitted">
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
                                    <div class="help-block text-danger" ng-messages="recordStoreForm.statusId.$error" ng-show="recordStoreForm.statusId.$touched || recordStoreForm.$submitted">
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
                                    <div class="help-block text-danger" ng-messages="recordStoreForm.name.$error" ng-show="recordStoreForm.name.$touched || recordStoreForm.$submitted">
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
                                    <div class="help-block text-danger" ng-messages="recordStoreForm.alias.$error" ng-show="recordStoreForm.alias.$touched || recordStoreForm.$submitted">
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
                                    <div class="help-block" ng-messages="recordStoreForm.text.$error" ng-show="recordStoreForm.$submitted">
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
            </div>
        </div>
    </div>
    <div class="container" ng-show="record && statuses && categories">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                Images
                                <span class="badge panel-badge" ng-bind="getImagesCount()"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                <input type="file" name="images" imageread="selectedImage" class="upload-input">
                                <button type="button" ng-click="uploadImage()" class="btn btn-success upload-button" ng-disabled="!$$childHead.selectedImage">
                                    <span class="glyphicon button-glyphicon glyphicon-upload moving-log-msg-icon" aria-hidden="true"></span>
                                    Upload
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="row no-images" ng-show="images.length==0">
                            <div class="col-md-12">
                                <div class="alert alert-warning">
                                    No images found. <br>
                                    You can add one by clicking the button below.
                                </div>
                            </div>
                        </div>

                        <div class="row no-images" ng-show="uploadError">
                            <div class="col-md-12">
                                <div class="alert alert-danger" ng-repeat="error in uploadError.images"><strong ng-bind="error"></strong></div>
                            </div>
                        </div>

                        <div class="table-responsive" ng-show="images.length>0">
                            <table class="listContainer table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Image</th>
                                    <th>Filename</th>
                                    <th>Size</th>
                                    <th>Extension</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="listRow" id="listRow{{image.id}}" ng-repeat="image in images">
                                    <td>{{image.id}}</td>
                                    <td>
                                        <img ng-if="images" ng-src="{{getImageLink(image)}}" height="50" alt="">
                                    </td>
                                    <td>
                                        {{image.filename}}
                                        <div class="additional">
                                            Uploaded at <strong>{{image.created_at}}</strong>
                                        </div>
                                    </td>
                                    <td>{{image.size / 1000}} KB</td>
                                    <td>{{image.ext}}</td>
                                    <td>
                                        <a ng-click="copyLink(image)" class="btn btn-primary btn-sm" ng-hide="copied">
                                            <span>Copy link</span>

                                        </a>
                                        <div class="alert alert-success" ng-show="copied" >
                                            <span>Copied</span>
                                        </div>
                                        <a
                                                mwl-confirm
                                                title="Would you like to delete this image?"
                                                confirm-text="Delete"
                                                cancel-text="No"
                                                on-confirm="removeImage(image)"
                                                on-cancel="cancelClicked = true"
                                                confirm-button-type="danger"
                                                cancel-button-type="default"
                                                class="btn btn-danger btn-sm"
                                        ><span class="glyphicon glyphicon-remove"></span></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>