<?php
  /* Template Name: Home page */
  get_header();

  // About section
  $about_title           = get_field('about_title');
  $about_subtitle        = get_field('about_subtitle');
  $about_section_title   = get_field('about_section_title');
  $about_section_excerpt = get_field('about_section_excerpt');
  $about_section_body    = get_field('about_section_body');
  $about_image01         = get_field('about_image_1');
  $about_image02         = get_field('about_image_2');

  // services
  $service_title    = get_field('service_title');
  $service_subtitle = get_field('service_subitle');

  // gallery
  $gallery_section_title    = get_field('gallery_section_title');
  $gallery_section_subtitle = get_field('gallery_section_subtitle');

  //News
  $news_section_title    = get_field('news_section_title');
  $news_section_subtitle = get_field('news_section_subtitle');

  // location
  $location_title    = get_field('locate_section_title');
  $location_subtitle = get_field('locate_section_subtitle');
  $location_map      = get_field('locate_section_map');
?>

  <!-- banner -->
  <div class="banner">
    <!--Slider-->
    <div class="slider">
      <div class="callbacks_container">
        <ul class="rslides" id="slider3">
          <?php
            $banner = new WP_Query(array(
              'post_type' => 'banner',
              'order' => 'ASC'
            ));

            while( $banner->have_posts() ) : $banner->the_post();
            $banner_img = get_field('banner_image');
            $banner_text = get_field('banner_text');
            $banner_link = get_field('banner_link');
            $banner_button_text = get_field('banner_button_text');
          ?>
            <li>
              <div class="slider-img">
                <img src="<?php echo $banner_img['url']; ?>" class="img-responsive" alt="<?php echo $banner_img['alt']; ?>">
              </div>
              <div class="slider-info">
                <h4><?php the_title(); ?> </h4>
                <p>
                  <?php echo $banner_text; ?>
                </p>
                <?php if( !empty($banner_link) ) : ?>
                <a href="<?php echo $banner_link; ?>" class="hvr-shutter-in-horizontal scroll">
                  <?php echo $banner_button_text; ?>
                </a>
                <?php endif; ?>
              </div>
            </li>
            <?php endwhile; ?>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <!--//Slider-->
  </div>
  <!-- //banner -->
  <!-- Modal1 -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Contracts</h4>
          <img src="<?php echo get_template_directory_uri(); ?>/images/ab.jpg" alt=" " class="img-responsive">
          <h5>Donec lobortis pharetra dolor</h5>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable. If you are going to use a passage of Lorem
            Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- //Modal1 -->

  <!-- about -->
  <div class="about" id="about">
    <div class="container">
      <div class="col-md-4 agileits_about_left">
        <h3 class="w3l_head"><?php echo $about_title; ?></h3>
        <p class="w3ls_head_para">
          <?php echo $about_subtitle; ?>
        </p>
      </div>
      <div class="agileits_banner_bottom_grids">
        <div class="col-md-6 agileits_banner_bottom_grid_l">
          <h4><?php echo $about_section_title; ?></h4>
          <p><i><?php echo $about_section_excerpt; ?></i>
            <?php echo $about_section_body; ?>
          </p>
        </div>
        <div class="col-md-6 agileits_banner_bottom_grid_r">
          <div class="agileits_banner_btm_grid_r">
            <img src="<?php echo $about_image01['url']; ?>" alt="<?php echo $about_image01['alt']; ?>" class="img-responsive">
            <?php if( !empty($about_image02) ) : ?>
            <div class="agileits_banner_btm_grid_r_pos">
              <img src="<?php echo $about_image02['url'];  ?>" alt="<?php echo $about_image02['alt']; ?>" class="img-responsive">
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- //about-bottom -->

  <!-- services -->
  <div class="services" id="services">
    <h3 class="w3l_head w3l_head1"><?php echo $service_title; ?></h3>
    <p class="w3ls_head_para w3ls_head_para1">
      <?php echo $service_subtitle; ?>
    </p>
    <div class="services-agile-w3l">
      <?php
      $service = new WP_Query(array(
        'post_type' => 'service',
        'order' => 'ASC'
      ));
        while( $service->have_posts() ) : $service->the_post();
        $service_text  = get_field('service_text');
        $service_image = get_field('service_image');
        $service_link  = get_field('service_link');
    ?>
        <div class="col-md-3 services-gd text-center">
          <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
            <a href="<?php echo $service_link; ?>" class="hi-icon"><img src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>" /></a>
          </div>
          <h4><?php the_title(); ?></h4>
          <p>
            <?php echo $service_text; ?>
          </p>
        </div>
        <?php endwhile; ?>
        <div class="clearfix"> </div>
    </div>
  </div>
  <!-- //services -->

  <!-- gallery -->
  <div class="team-bottom" id="work">
    <div class="container">
      <h3 class="w3l_head w3l_head1"><?php echo $gallery_section_title; ?></h3>
      <p class="w3ls_head_para w3ls_head_para1">
        <?php echo $gallery_section_subtitle; ?>
      </p>
      <div class="w3layouts_gallery_grids">
        <ul class="w3l_gallery_grid" id="lightGallery">
          <?php
            $gallery = new WP_Query(array(
              'post_type' => 'gallery',
              'order'     => 'ASC'
            ));

            while($gallery->have_posts()) : $gallery->the_post();
            $gallery_title = get_field('gallery_title');
            $gallery_desc = get_field('gallery_desc');
            $gallery_image = get_field('gallery_image');
          ?>
            <li data-title="<?php echo $gallery_title; ?>" data-desc="<?php echo $gallery_desc; ?>" data-src="<?php echo $gallery_image['url'];?>" data-responsive-src="<?php echo get_template_directory_uri(); ?>/images/8.jpg">
              <div class="w3layouts_gallery_grid1 box">
                <a href="#">
								<img src="<?php echo $gallery_image['url']; ?>" alt="<?php echo $gallery_image['alt']; ?>" class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><?php the_title(); ?></h4>
								</div>
							</a>
              </div>
            </li>
            <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- //gallery -->
  <!-- projects -->
  <div class="projects" id="projects">
    <div class="container">
      <div class="port-head">
        <h3 class="w3l_head w3l_head1"><?php echo $news_section_title ?></h3>
        <p class="w3ls_head_para w3ls_head_para1">
          <?php echo $news_section_subtitle; ?>
        </p>
      </div>
    </div>
    <div class="projects-grids">
      <div class="sreen-gallery-cursual">

        <div id="owl-demo" class="owl-carousel owl-theme">
          <?php
              $news = new WP_Query(array(
                'post_type' => 'news',
                'order'     => 'ASC'
              ));
              while( $news->have_posts() ) : $news->the_post();
          ?>
            <div class="item">
              <a href="<?php the_permalink(); ?>">
                <div class="projects-agile-grid-info">
                  <?php the_post_thumbnail(); ?>
                  <div class="projects-grid-caption">
                    <h4><?php the_title(); ?></h4>
                    <p>
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- //projects -->

  <!-- mail -->
  <div class="mail" id="mail">
    <div class="container">
      <h3 class="w3l_head w3l_head1">Contact Us</h3>
      <p class="w3ls_head_para w3ls_head_para1">send us a message</p>
      <div class="w3_mail_grids">
        <?php echo do_shortcode('[contact-form-7 id="81" title="Contact Us"]'); ?>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!-- //mail -->
  <div class="map">
    <div class="container">
      <h3 class="w3l_head w3l_head1"><?php echo $location_title ?></h3>
      <p class="w3ls_head_para w3ls_head_para1">
        <?php echo $location_subtitle ?>
      </p>
    </div>
    <?php

if( !empty($location_map) ):
?>
      <div class="acf-map">
        <div class="marker" data-lat="<?php echo $location_map['lat']; ?>" data-lng="<?php echo $location_map['lng']; ?>"></div>
      </div>
      <?php endif; ?>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57537.641430789925!2d-74.03215321337959!3d40.719122105634035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1456152197129" allowfullscreen=""></iframe> -->
  </div>

  <?php get_footer(); ?>
