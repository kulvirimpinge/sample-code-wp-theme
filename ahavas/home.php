<?php
/**
 * Template Name: Home
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
<!-- Carousel -->

<div class="banner"> <?php echo do_shortcode("[metaslider id=38]");?></div>
<div  class="what-we-do">
  <div class="container">
    <h2 class="sec-title">What we do</h2>
    <ul class="list-unstyled list-inline what-items-list">
      <?php query_posts( 'post_type=whatwedo&order=Asc&posts_per_page=6'); $counter = 1; ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <li <?php echo ($relatedPostID == $post->ID) ? 'class="selected"' : ''; ?>>
        <div class="what-item">
          <div class="img-wrap">
            <?php if(function_exists('the_post_thumbnail')) {
        echo '' . the_post_thumbnail(array(135, 125)).'';}
        ?>
          </div>
          <div class="content-wrap">
            <h5><a href="<?php the_permalink() ?>">
              <?php the_title(); ?>
              </a></h5>
            <p><?php echo substr(get_the_excerpt(), 0,120); ?></p>
           
          </div>
        </div>
      </li>
      <?php endwhile; ?>
      <?php else : ?>
      <p>Sorry, but you are looking for something that isn't here.</p>
      <?php endif; ?>
    </ul>
  </div>
</div>
<!--/. What We Do --> 

<!-- Call to Action -->
<div class="call-to-action-donate">
    <div class="container">
    <h1>Take Part In Feeding The Hungry Children In Israel</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Donate Now
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <iframe src="http://urtestsite.com/projects/web/aron_lerner/ahavas/donation/" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>    
        
    </div>
</div>
<!--/. Call to Action --> 

<!-- Counters -->
<div class="counters-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 pd5">
        <div class="counter-item">
          <h1>233</h1>
          <h4>Thousand Dollars for Stipends every Month</h4>
        </div>
      </div>
      <div class="col-sm-3 pd5">
        <div class="counter-item">
          <h1>987</h1>
          <h4>Pairs of childres shoes bought last year</h4>
        </div>
      </div>
      <div class="col-sm-3 pd5">
        <div class="counter-item">
          <h1>2656</h1>
          <h4>Pounds of chicken given to needy families for pesach</h4>
        </div>
      </div>
      <div class="col-sm-3 pd5">
        <div class="counter-item">
          <h1>124</h1>
          <h4>Volunteers working tirelessy around the clock</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/. Counters --> 

<!-- Campaigns -->
<div class="campaigns-sec">
  <div class="container">
    <h2 class="sec-title">Campaigns</h2>
    <p class="maxwidth800">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
    <div class="row">
      <?php query_posts( 'cat=3&order=Asc&posts_per_page=3'); $counter = 1; ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-sm-4">
        <div class="campaigns-item">
          <figure>
            <?php if(function_exists('the_post_thumbnail')) {
        echo '' . the_post_thumbnail(array(360, 240)).'';}
        ?>
          </figure>
          <h3><a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
            </a></h3>
          <p><?php echo substr(get_the_excerpt(), 0,170); ?></p>
          <a href="<?php echo site_url(); ?>/donate" class="btn btn-primary">Donate Now</a> </div>
      </div>
      <?php endwhile; ?>
      <?php else : ?>
      <p>Sorry, but you are looking for something that isn't here.</p>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--/. Campaigns --> 

<!-- About -->
<div class="about-sec">
  <div class="container">
    <div class="row">
      <?php $the_query = new WP_Query( 'page_id=6' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
      <div class="col-md-5 col-sm-12 pull-right">
        <figure class="helping">
          <?php if(function_exists('the_post_thumbnail')) {
        echo '' . the_post_thumbnail(array()).'';}
        ?>
        </figure>
      </div>
      <div class="col-md-7 col-sm-12">
        <h3>
          <?php the_title(); ?>
        </h3>
        <?php the_content(); ?>
      </div>
      <?php endwhile;?>
    </div>
  </div>
</div>
<!--/. About --> 

<!-- Call to Action -->
<div class="call-to-action-donate">
  <div class="container">
    <h1>Take Part In Feeding The Hungry Children In Israel</h1>
    <a href="<?php echo site_url(); ?>/donate" class="btn btn-primary">Donate Now</a> </div>
</div>
<!--/. Call to Action --> 

<!-- Clients -->
<div class="clients-sec">
  <div class="container">
    <div class="clients-list list-unstyled list-inline"> <?php echo do_shortcode('[logo-slider]'); ?> </div>
  </div>
</div>
<!--/. Clients -->
<div id="primary" class="content-area" style="display:none;">
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
        <h1 class="entry-title">
          <?php the_title(); ?>
        </h1>
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
