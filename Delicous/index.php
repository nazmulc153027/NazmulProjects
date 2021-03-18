<?php get_header();?>
<!--index.php means blog page
https://themewagon.com/theme_tag/left-sidebar/
 -->

 <section>
   <div class="banner">
     <div class="container">
       <h1 class="text-center" style="background-color:gray; width:auto; height:300px;"><?php wp_title('||');?></h1>
     </div>
   </div>
 </section>

    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
         
        </div>

        <div class="row">
         <?php
         
          if (have_posts()) {
           while (have_posts()) {
            the_post();
            ?>
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                </div>
              <div class="member-info">
                <h4><?php the_title();?></h4>
                <?php the_excerpt();?>
                 
                <!--
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              -->
                <a href="<?php the_permalink();?>"><button type="text" class="btn btn-warning mt-2">Learn More</button></a>
              </div>
            </div>
          </div>
         <?php
             
           }
          
          }else{
            echo 'Sorry! No Posts Doesnot Match Which You Are Found';
          }
          ?>
         
        
        </div>

      </div>
    </section>
  

  <!-- ======= Footer ======= -->
 <?php get_footer();?>















