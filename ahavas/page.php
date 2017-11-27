<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Ahavas Chesed 1.0
 */

get_header(); ?>

<div class="inner-banner"> </div>
<div class="heading-title-area"><div class="container"><div class="row"><?php the_title(); ?></div></div></div>
<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
        <div class="entry-thumbnail">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        
      </header>
      <!-- .entry-header -->
      
      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      </div>
      <!-- .entry-content -->
      
      <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
      </footer>
      <!-- .entry-meta --> 
    </article>
    <!-- #post -->
    
    <?php comments_template(); ?>
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<!-- #primary -->
<div class="call-to-action-donate">
  <div class="container">
    <h1>Take Part In Feeding The Hungry Children In Israel</h1>
    <a href="#" class="btn btn-primary">Donate Now</a> </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
