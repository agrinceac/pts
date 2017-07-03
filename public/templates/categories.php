<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left" ng-bind="page.h1"></h1>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->
<link rel="stylesheet" href="assets/css/pages/page_job.css">
<!--=== Content Part ===-->
<div class="container content">
    <!-- Job Content -->

    <ul class="row job-content margin-bottom-40 list-unstyled">
        <li class="col-md-3 col-sm-3 md-margin-bottom-40" ng-repeat="category in categories | filter: { parentId: 40 }">
            <h3 class="heading-md"><a href="#!/category-articles/{{category.id}}">{{category.name}}</a></h3>
            <ul class="list-unstyled categories">
                <li ng-repeat="subCategory_1 in categories | filter: { parentId: category.id }">
                    <a href="#!/category-articles/{{subCategory_1.id}}">{{subCategory_1.name}}</a>
                    <ul>
                        <li ng-repeat="subCategory_2 in categories | filter: { parentId: subCategory_1.id }">
                            <a href="#!/category-articles/{{subCategory_2.id}}">{{subCategory_2.name}}</a>
                            <ul>
                                <li ng-repeat="subCategory_3 in categories | filter: { parentId: subCategory_2.id }">
                                    <a href="#!/category-articles/{{subCategory_3.id}}">{{subCategory_3.name}}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <!-- End Job Content -->
</div>
<!--=== End Content Part ===-->
