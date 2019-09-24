<?php
/**
 * The template for displaying all default pages
 *
 *
 * @package WordPress
 * @subpackage Liberta
 * @since 1.0.0
 */

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
// Get template parts for Hero section
?>
<?php get_template_part( 'inc/widgets/hero', 'section' ); ?>

<?php
// Get template parts for Footer
?>
<?php get_template_part( 'inc/shared/footer' ); ?>

<?php endwhile; ?>


<?php
// Get template parts for HTML Footer
?>
<?php get_template_part( 'inc/shared/html', 'footer' ); ?>
