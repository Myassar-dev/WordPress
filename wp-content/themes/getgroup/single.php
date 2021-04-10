<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package getgroup
 */

// get_header();
get_template_part( 'navbar');

?>
 

<style>
.site-blocks-cover {
  background-image: url("<?php bloginfo('template_directory') ?>/images/12357.jpg");
}
</style>
<div class="site-blocks-cover inner-page-cover overlay"  data-aos="fade" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1><?php the_title( ); ?> </h1>
             
          </div>
        </div>
      </div>

      <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>  

    <?php 	$post_image=get_field('image'); ?>
    
    <div class="site-section" id="property-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="owl-carousel slide-one-item with-dots">
              <div><img src="<?= $post_image['url'] ?>" alt="Image" class="img-fluid"></div>
            </div>
          </div>
          <div class="col-lg-5 pl-lg-5 ml-auto">
            <div class="mb-5">
              
			  <p> 
		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
		 </p>
            </div>


          </div>
        </div>
      </div>
    </div>

 
	<main id="primary" class="site-main">


	</main><!-- #main -->

<?php
 
get_footer();
