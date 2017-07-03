<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left" ng-bind="page.h1"></h1>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->
<article>
    <section class="container content-sm">
        <div class="row news-v2">
            <div class="col-md-4 sm-margin-bottom-30" ng-repeat="article in articles">
                <div class="news-v2-badge">
                    <a href="#!/articles/{{article.alias}}">
                        <picture class="img-responsive" style="{{ article.images[0].filename ? ('background-image: url(\'' + article.images[0].basePath + '/' + article.images[0].filename + '\')') : '' }}"></picture>
                    </a>
                </div>
                <div class="news-v2-desc bg-color-light">
                    <h3><a href="#!/articles/{{article.alias}}" title="{{article.name}}">{{article.name}}</a></h3>
                    <p>
                        <time>Публикуван: {{ article.updated_at | date: 'd.MM.y' }}</time>
                    </p>
                </div>
            </div>
            <div ng-if="!articles.length">
                <h2 class="text-center">Не са материали</h2>
            </div>
        </div>
    </section>
</article>