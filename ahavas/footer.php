<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Ahavas Chesed 1.0
 */
?>
</div>
<!-- #main -->

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="people-reviews">
          <h3>People Reviews</h3>
          <?php query_posts( 'post_type=testimonials&order=Asc&posts_per_page=1'); $counter = 1; ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <p>
            <?php the_content(); ?>
          </p>
          <div class="author">
            <?php the_title(); ?>
            <span><?php echo get_post_meta($post->ID, 'CEO', true); ?></span> </div>
          <?php endwhile; ?>
          <?php else : ?>
          <p>Sorry, but you are looking for something that isn't here.</p>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="contact-us">
          <h3>Contact Us</h3>
          <ul class="list-unstyled">
          	 <?php get_sidebar( 'main' ); ?>
           
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="boy-holder"> <img src="<?php bloginfo('template_url'); ?>/images/boy.png" alt="boy" title="boy"> </div>
      </div>
    </div>
  </div>
</footer>
<footer id="colophon" class="site-footer" role="contentinfo" style="display:none;">
  <?php //get_sidebar( 'main' ); ?>
  <div class="site-info">
    <?php do_action( 'twentythirteen_credits' ); ?>
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a> </div>
  <!-- .site-info --> 
</footer>
<!-- #colophon -->
</div>
<!-- #page -->

<?php wp_footer(); ?>
<!-- jQuery --> 

<!-- Other plugins --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
</body></html>