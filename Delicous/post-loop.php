 <!-- ======= Hero Section ======= -->
  <?php
   if (is_front_page()) {
    echo do_shortcode('[smartslider3 slider="4"]');
   }
   
  ?>
  
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <div class="container-fluid">
         <h1 class="text-center text-warning"><?php echo get_theme_mod('theme_post_title',true);?></h1>
         <p class="text-center"><?php echo get_theme_mod('theme_post_desc',true);?></p>
         <hr class="w-25 bg-warning mx-auto">
        <div class="row">

     <?php
     $WP_Query = new WP_Query(array(
      'post_type'=>'post',
      'posts_per_page'=>1
     ));
       

        if($WP_Query->have_posts()) {
       
        $WP_Query->the_post();
        ?>

          <div class="col-lg-6 align-items-stretch video-box mt-5">
             <?php the_post_thumbnail('about');?>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><?php the_title();?></h3>
              <?php the_excerpt();?>
            </div>
            <div class="btn">
              <a href="<?php the_permalink();?>"><button type="text" class="btn btn-warning mt-2">Read More</button></a>
            </div>
          </div>  
  <?php
}



  ?>
 </div>

      </div>
    </section><!-- End About Section 
    

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2 class="text-warning"><?php echo get_theme_mod('theme_animation_title',true);?></h2>
          <hr class="w-25 bg-warning">
          <p><?php echo get_theme_mod('theme_animation_title_desc',true);?></p>
        </div>

        <div class="row">
          <?php
            $service = null;
            $service = new WP_Query(array(
              
              'post_type'=> 'text',
              'posts_per_page' => 3
            ));
            if ($service->have_posts()) {
             while ($service->have_posts()) {
               $service->the_post();
               ?>
                <div class="col-lg-4">
                  <div class="box">
                  
                    <h4><?php the_title();?></h4>
                    <a href=""><?php the_post_thumbnail();?></a>
                    <p><?php the_excerpt();?></p>
                  </div>
                </div>
              <?php
             }
             wp_reset_postdata();
            }else{
              echo 'No posts inserted';
            }
            //web site er grid gola always slider er moto korbo...
          ?>

         

          
        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container mt-5">

        <div class="section-title">
          <h2><?php echo get_theme_mod('menu_recipe_title',true);?></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active"><?php echo get_theme_mod('menu_recipe_title_btn_1',true)?></li>
              <li data-filter=".filter-starters"><?php echo get_theme_mod('menu_recipe_title_btn_2',true)?></li>
              <li data-filter=".filter-salads"><?php echo get_theme_mod('menu_recipe_title_btn_3',true)?></li>
              <li data-filter=".filter-specialty"><?php echo get_theme_mod('menu_recipe_title_btn_4',true)?></li>
            </ul>
          </div>
        </div>
        <?php
        $WP_Query = null;
        $WP_Query = new WP_Query(array(
         'post_type'=> 'Recipe',
         'posts_per_page'=>4

        ));
        if ($WP_Query->have_posts()){
         while ($WP_Query->have_posts()) {
          $WP_Query->the_post();
          ?>



        <div class="row menu-container">

          <div class="col-lg-5 menu-item ">
            <div class="menu-content text-primary">
              <h1 class="font-weight-bold"><a href="#"><?php the_title();?></a></h1>
            </div>
            <div class="menu-ingredients">
              <a href="#"><?php the_content();?></a>
            </div>
          </div>
          <div class="col-lg-5 menu-item float-right mt-5">
             <?php the_post_thumbnail();?>
          </div>

         


        </div>



         <?php
       }
       wp_reset_postdata();
        }else{
          echo 'No Recipe Do not Added...';
        }


        ?>

        
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1"><?php echo get_theme_mod('check_menu_side_title_1',true);?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2"><?php echo get_theme_mod('check_menu_side_title_2',true);?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3"><?php echo get_theme_mod('check_menu_side_title_3',true);?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4"><?php echo get_theme_mod('check_menu_side_title_4',true);?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5"><?php echo get_theme_mod('check_menu_side_title_5',true);?></a>
              </li>
            </ul>
          </div>
         
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3><?php echo get_theme_mod('check_content_main_title_1',true);?></h3>
                    <p class="font-italic"><?php echo get_theme_mod('check_menu_des_1',true);?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/specials-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3><?php echo get_theme_mod('check_content_main_title_2',true);?></h3>
                    <p class="font-italic"><?php echo get_theme_mod('check_menu_des_2',true);?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/specials-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3><?php echo get_theme_mod('check_content_main_title_3',true);?></h3>
                    <p class="font-italic"><?php echo get_theme_mod('check_menu_des_3',true);?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/specials-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3><?php echo get_theme_mod('check_content_main_title_4',true);?></h3>
                    <p class="font-italic"><?php echo get_theme_mod('check_menu_des_4',true);?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/specials-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3><?php echo get_theme_mod('check_content_main_title_5',true);?></h3>
                    <p class="font-italic"><?php echo get_theme_mod('check_menu_des_5',true);?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/specials-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>
        
        <?php
        if (is_front_page()) {
          echo do_shortcode('[smartslider3 slider="3"]');
        }
        ?>
       

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <?php
           echo do_shortcode('[contact-form-7 id="413" title="C-1"]');
        ?>
        <!--
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
       -->
      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Photo Section ======= -->
    

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

 <?php if ( have_posts() ) : ?>
 
    <?php while ( have_posts() ) : the_post(); ?>

      <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                </div>
              <div class="member-info">
                <h4><?php the_title();?></h4>
                <?php the_excerpt();?>
                 
                <a href="<?php the_permalink();?>"><button type="text" class="btn btn-warning mt-2">Learn More</button></a>
              </div>
            </div>
          </div>
 
    <!-- the rest of your theme's main loop -->
 
    <?php endwhile; ?>
   <div class="text-secondary mt-5">
      <h4><?php next_posts_link(); ?></h4>
      <h4><?php previous_posts_link(); ?></h4>
  </div>
<?php else : ?>
 
<?php _e('Sorry, no posts matched your criteria.'); ?>
 
<?php endif; ?>
        </div>

      </div>
    </section><!-- End Chefs Section -->
	  
	  <!-- Testomonial section--->
	  <h1 class="text-center text-warning well">Client Testomonial</h1>
	  <hr class="w-50 text-center">
	   <?php 
	     echo do_shortcode('[sp_testimonial id="338"]');
	  ?>

   
   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->