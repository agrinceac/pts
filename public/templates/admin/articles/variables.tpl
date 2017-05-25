<div class="content-section-a">
    <div class="container">
        <h1>
            Article variables
            <button ng-click="save()" type="submit" class="btn btn-success btn-sm objectFormSubmit">Update</button>
            <a ui-sref="articles.list" class="btn btn-warning btn-sm">Back</a>
        </h1>
    </div>
</div>
<div class="content-section-b">
    <div class="container" ng-hide="variables">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">Data is loading</div>
            </div>
        </div>
    </div>
    <div class="container" ng-show="variables">
        <div class="row" ng-show="mainMessage">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">{{mainMessage}}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Articles variables
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="listContainer table table-hover">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tr ng-repeat="variable in variables">
                                    <td style="width: 50%;"> {{variable.name}} </td>
                                    <td>
                                        <input type="text" ng-model="variable.value" class="form-control">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>