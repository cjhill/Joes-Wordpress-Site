<?php get_header(); ?>
<!-- Jumbotron -->
<?php include 'content/jumbotron.php'; ?>
<!-- ABOUT -->
<?php include 'content/about.php'; ?>
<!-- BLOG-->
<?php include 'content/blog.php'; ?>
<!-- MORE BLOGS -->
<div id="more_blogs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h1 class="section_title">Check Out All Blog Posts <a href="<?php echo get_page_link(70);?>"><i class="fa fa-arrow-circle-right"></i></a></h1>
			</div>
		</div>
	</div>
</div>
<!-- GALLERY -->
<?php //include 'content/gallery.php'; ?>
<!-- VIDEOS -->
<?php include 'content/videos.php'; ?>

<!-- To The Top -->
<div class="to_the_top"><a href="#jumbotron" title=""><i class="fa fa-angle-up"></i> Top</a></div>

<?php get_footer(); ?>