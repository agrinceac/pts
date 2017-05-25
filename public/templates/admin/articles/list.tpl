<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Articles
                    <a ui-sref="articles.create" class="btn btn-primary btn-sm">Create</a>
                    <a ng-click="filterOn = !filterOn" class="btn btn-info btn-sm">Filters</a>
                    <a ui-sref="articles.categories.list" class="btn btn-warning btn-sm">Article categories</a>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="additional">
                    Here you can manage records for site. You can create, edit or delete record.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" ng-show="mainMessage">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">{{mainMessage}}</div>
        </div>
    </div>
    <form ng-show="filterOn">
        <div class="row">
            <div class="col-md-1 col-sx-1">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="statusId">Id</label>
                    <input type="text" id="objectId" name="objectId" class="form-control" ng-model="filters.objectId">
                </div>
            </div>
            <div class="col-md-2 col-sx-2">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="statusId">Status</label>
                    <select id="statusId" name="statusId" class="form-control" ng-model="filters.statusId" ng-options="status.id as ( status.name ) for status in statuses"><option></option></select>
                </div>
            </div>
            <div class="col-md-2 col-sx-2">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="categoryId">Category</label>
                    <select id="categoryId" name="categoryId" class="form-control" ng-model="filters.categoryId" ng-options="category.id as ( category.name ) for category in categories"><option></option></select>
                </div>
            </div>
            <div class="col-md-3 col-sx-3">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" ng-model="filters.name">
                </div>
            </div>
            <div class="col-md-4 col-sx-4">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="text">Text</label>
                    <input type="text" class="form-control" id="text" name="text" ng-model="filters.text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sx-4 col-md-offset-4">
                <button class="btn btn-primary col-md-12" ng-click="filterByForm()">
                    Search
                </button>
            </div>
        </div>
    </form>

    <div class="row" ng-hide="records">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">Data is loading</div>
        </div>
    </div>

    <div class="row" ng-show="records.length==0">
        <div class="col-md-12">
            <div class="alert alert-warning">
                No records were found. <br>
                You can create an record <a ui-sref="records.create">on that page</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive" ng-show="records.length>0">
            <table class="listContainer table table-hover table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Title</th>
                    <th>Alias</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="listRow" id="listRow{{record.id}}" ng-repeat="record in records">
                    <td>{{$index+1}}</td>
                    <td>{{record.id}}</td>
                    <td>
                        {{record.name}}
                        <div class="additional">
                            Created at <strong>{{record.created_at}}</strong>
                        </div>
                    </td>
                    <td>
                        {{record.alias}}
                    </td>
                    <td class="{{record.status.alias}}">
                        <font color="{{record.status.color}}">{{record.status.name}}</font>
                    </td>
                    <td class="{{record.category.alias}}">
                        <font color="{{record.category.color}}">{{record.category.name}}</font>
                    </td>
                    <td>
                        <a ui-sref="articles.edit({ id : record.id })" class="btn btn-primary btn-sm">Edit</a>
                        <a
                            mwl-confirm
                            title="Would you like to delete this record?"
                            confirm-text="Delete"
                            cancel-text="No"
                            on-confirm="delete(record.id)"
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

    <ul uib-pagination ng-show="showPagination" total-items="total" ng-model="filters.page" ng-click="setPage()" class="pagination-sm" items-per-page="per_page"></ul>
</div>