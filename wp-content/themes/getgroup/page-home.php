<?php
/**
* Template Name: Home
*
*/
get_header();
?>


<section class="site-section" id="about-section">
          <div class="container">

            <div class="row">
              <div class="col-lg-6">

                <div class="owl-carousel slide-one-item-alt">
                  <img src="<?= get_field('about-image')['url']  ?>" alt="Image" class="img-fluid">
                </div>


              </div>
              <div class="col-lg-5 ml-auto">

                <h2 class="section-title mb-3"><?= get_field('about-title') ?></h2>
                    <p class="lead"><?= get_field('about-header') ?></p>
                    <p> <?= get_field('about-text') ?></p>

              </div>
            </div>
          </div>
        </section>



        <section class=" border-bottom bg-light" id="services-section">
          <div class="background-coloer site-section">
            <div class="container">
              <div class="row mb-5">
                <div class="col-12 text-center">
                  <h2 class="section-title white-text mb-3">Services</h2>
                </div>
              </div>
              <div class="row align-items-stretch">
                  <?php

                    $args = array(  
                        'post_type' => 'services',
                        'posts_per_page' => 8, 
                        'orderby' => 'post_id', 
                        'order' => 'ASC', 
                    );

                    $serviecs = new WP_Query( $args ); 

                    while ( $serviecs->have_posts() ) : $serviecs->the_post();                     
                    ?>

                <!-- ============= Start ============ -->
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-4" data-aos="fade-up">
                  <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><?php the_field('service-icon') ?></div>
                    <div>
                      <h3 class="white-text"><?php the_field('service-title') ?> </h3>
                    </div>
                  </div>
                  <p class="white-text"><?php the_field('service-details') ?></p>
                
                </div>
                  <!-- ============ End ============= -->
                  <?php 
                     endwhile;
            
                     wp_reset_postdata(); 
                 ?>
              </div>
            </div>
          </div>

        </section>

    <div class="site-section" id="download-section">
      <div class="container">
        <div class="row mb-5 align-items-center">

          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">GET Group – Download Manager</h2>
          </div>
          <div class="col-md-5 text-left text-md-right">
            <div class="custom-nav1">
              <a href="#" class="custom-prev1">Previous</a><span class="mx-3">/</span><a href="#" class="custom-next1">Next</a>
            </div>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">
        <?php

            $args = array(  
                'post_type' => 'books',
                'posts_per_page' => 8, 
                'orderby' => 'post_id', 
                'order' => 'ASC', 
            );

            $books = new WP_Query( $args ); 

            while ( $books->have_posts() ) : $books->the_post();    
            $book_image=get_field('book-image');  
            $book_url=get_field('book-url');               
            ?>
          <div class="property" id="e">
            <a href="property-single.html">
              <img src="<?= $book_image['url'] ?>" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="download-title"><?php the_field('book-title') ?></strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r"><?php the_field('book-description') ?></span>
              </div>
              <div> 
                  <a href="<?= $book_url['url'] ?>" class="btn btn-primary btn-download" download target="_blank" >Download</a>
              </div>
            </div>
          </div>
          <?php 
                     endwhile;
            
                     wp_reset_postdata(); 
         ?>
        </div>
      </div>
    </div>




    <section class="site-section" id="news-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">News &amp; Events</h2>
          </div>
        </div>

        <div class="row">
     
        <?php

        $args = array(  
            'post_type' => 'news_events',
            'posts_per_page' => 8, 
            'orderby' => 'post_id', 
            'order' => 'ASC', 
        );


        $news = new WP_Query( $args );
 
			// Load posts loop.
			// while ( have_posts() ) {
            //     the_post();

        while ( $news->have_posts() ) : $news->the_post();    
        $post_image=get_field('image');  
        ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html">
                  <img src="<?= $post_image['url'] ?>" alt="Image" class="img-fluid">
             </a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark"><?php the_field('title'); ?></a></h2>
            </div>
          </div>
               
        <?php	
            endwhile;
            wp_reset_postdata(); 
		?>
        </div>
      </div>
    </section>




    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <!-- <h3 class="section-sub-title">Get</h3> -->
            <h2 class="section-title mb-3">Contct Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">



            <div class="p-5 bg-white">

              <h2 class="h4 text-black mb-5">Contact Form</h2>
              <?= get_field('contact-form') ?>
              
        </div>
          </div>
          <div class="col-md-5">

            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"> Dubai, UAE</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+971 521386336</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">myassar.kaboul@hotmail.com</a></p>

            </div>

          </div>
        </div>
      </div>
    </section>



<?php 

get_footer();

?>