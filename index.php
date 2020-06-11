<!-- config.php -->
<?php require_once('config.php') ?>

<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>

<!-- Retrieve all posts from the database -->
<?php $posts = getPublishedPosts(); ?>

<?php require_once('includes/head_section.php') ?>

	<title>BlackTribals</title>

</head>
<body>

	<!-- container - wraps the whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include('includes/navbar.php') ?>
		<!--// navbar -->

		<!-- banner -->
		<?php include('includes/banner.php') ?>

		<!-- Page Content -->
		<div class="content">
			<h2 class="content-title">Recent Posts</h2>
			<hr>
			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0;">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" >
						<div class="post_info">
							<h3><?php echo $post['title'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								<span class="read_more">Read more...</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
		</div>
		<!--// Page Content -->

		<!-- footer -->
		<?php include('includes/footer.php') ?>
		<!--// footer -->
	</div>
	<!--// container -->
	
</body>
</html>