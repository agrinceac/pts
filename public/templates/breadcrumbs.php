<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left" ng-bind="page.h1"></h1>
        <nav>
            <ul class="pull-right breadcrumb" ng-if="page.breadcrumbs">
                <li ng-repeat="breadcrumbItem in page.breadcrumbs" ng-if="breadcrumbItem.id != 1">
                    <a href="#!/category-articles/{{breadcrumbItem.id}}">{{breadcrumbItem.name}}</a>
                </li>
            </ul>
        </nav>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->