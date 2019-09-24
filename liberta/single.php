<?php
/**
 * The templte for displaying single post page
 *
 * @package WordPress
 * @subpackage Liberta
 * @since 1.0.0
 */

?>

<?php
// Prepare content
$post_image_array   = wp_get_attachment_image_src( get_post_thumbnail_id(), 'Large' );
$post_image         = $post_image_array['0'];
$post_image_alt     = get_post_meta(get_post_thumbnail_id(),'_wp_attachment_image_alt', true);
$post_title         = get_the_title();
$post_link          = get_the_permalink();
$categories 		= get_the_category();
$post_category      = $categories[0]->name;
$post_date          = get_post_time('d/m/y', true);
$author_name        = get_the_author();

?>

<?php
// Get template parts for HTML Head
?>
<?php get_template_part( 'inc/shared/html', 'head' ); ?>

<?php
// Loop throught post data
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php
// Get template parts for Header
?>
<?php get_template_part( 'inc/shared/header' ); ?>

<?php
// Get all blog posts
?>
<main>
	<section class="blog-post section--small">
		<div class="container">

			<div class="blog-post__header text-center">

				<div class="post-meta-container d-flex justify-content-center">
					<p class="post-meta-category">Category: <span><?php echo $post_category; ?></span></p>
				</div>

				<div class="post-heading">
					<h1><?php echo $post_title; ?></h1>
				</div>

				<div class="post-meta-container d-flex justify-content-center">
					<p class="post-meta-author"><?php echo $author_name; ?></p>
					<p class="post-meta-date"><?php echo $post_date; ?></p>
				</div>

				<div class="share-container" data-sticky-container>
					<div class="sticky sticky--share sticky--top" data-sticky data-margin-top="10" data-sticky-on="large" data-anchor="post">
						<ul class="share share--mobile stacked-list share lstn">
							<li class="facebook">
								<a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url={the_link}&amp;pubid=ra-55c9b19dd297c33b&amp;ct=1&amp;title={the_title}&amp;pco=tbxnj-1.0" target="_blank" class="facebook">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/misc/facebook_icon.svg" alt="">
								</a>
							</li>
							<li class="twitter">
								<a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url={the_link}&amp;pubid=ra-55c9b19dd297c33b&amp;ct=1&amp;title={the_title}&amp;pco=tbxnj-1.0" target="_blank" class="twitter">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/misc/Twitter_icon.svg" alt="">
								</a>
							</li>
							<li class="linkedin">
								<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={the_link}&amp;title={the_title}&amp;source={the_site}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="linkedin" title="Share this on Linkedin">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/misc/LinkedIn_icon.svg" alt="">
								</a>
						</ul>
					</div>
				</div>

				<img src="<?php echo $post_image; ?>" alt="<?php echo $post_image_alt; ?>">

			</div>

			<div class="blog-post__content">
				<?php the_content(); ?>
			</div>


		</div>
	</section>
</main>

<?php
// Get template parts for Footer
?>
<?php get_template_part( 'inc/shared/footer' ); ?>

<?php endwhile; ?>

<?php
// Get template parts for HTML Footer
?>
<?php get_template_part( 'inc/shared/html', 'footer' ); ?>
