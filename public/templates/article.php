<!--=== Breadcrumbs ===-->
<?php require_once('breadcrumbs.php'); ?>
<!--=== End Breadcrumbs ===-->
<article class="container content">
	<div ng-bind-html="page.text"></div>

	<h2 ng-if="!page.text">Сега страница е празна, информацията ще бъде добавена по-късно</h2>
	<!-- Image Gallery -->
	<div class="headline" ng-if="page.images.length > 0">
	<h2>Изображение</h2>
	</div>
	<div class="row gallery">
		<div class="col-sm-4 col-md-3" ng-repeat="image in page.images">
			<a class="thumbnail fancybox bordered" data-fancybox="gallery" href="{{image.basePath + '/' + image.filename }}">
				<picture alt="" class="full-width img-responsive" style="background-image: url('{{image.basePath + '/' + image.filename }}')"></picture>
			</a>
		</div>
	</div>
	<!-- /Image Gallery -->
</article>