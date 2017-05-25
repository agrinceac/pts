<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Categories
                    <a ng-click="create()" class="btn btn-primary btn-sm">Create</a>
                    <a ng-click="back()" class="btn btn-warning btn-sm">Back</a>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" ng-hide="categories">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">Data is loading</div>
        </div>
    </div>

    <div class="row" ng-show="categories.length==0">
        <div class="col-md-12">
            <p class="bg-warning">
                No categories were found. <br>
                You can create an category <a ui-sref="categories.create">on that page</a>
            </p>
        </div>
    </div>

    <div class="table-responsive" ng-show="categories.length>0">
        <table class="listContainer table table-hover table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Alias</th>
                <th>Status</th>
                <th>Parent</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr class="listRow" id="listRow{{category.id}}" ng-repeat="category in categories">
                <td>{{$index+1}}</td>
                <td>
                    {{category.name}}
                    <div class="additional">
                        Created at <strong>{{category.created_at}}</strong>
                    </div>
                </td>
                <td>
                    {{category.alias}}
                </td>
                <td >
                    <font color="{{category.status.color}}">{{category.status.name || 'No status' }}</font>
                </td>
                <td class="{{category.category.alias}}">
                    <font color="{{category.category.color}}">{{category.parent.name || 'No parent' }}</font>
                </td>
                <td>
                    <a ng-click="edit(category.id)" class="btn btn-primary btn-sm">Edit</a>
                    <a
                        mwl-confirm
                        title="Would you like to delete this category?"
                        confirm-text="Delete"
                        cancel-text="No"
                        on-confirm="categoryDelete(category.id)"
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

    <ul uib-pagination ng-show="showPagination" total-items="total" ng-model="filters.page" ng-click="setPage()" class="pagination-sm" items-per-page="per_page"></ul>
</div>