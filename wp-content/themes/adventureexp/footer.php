<?php
/**
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
global $options;
?>
</div>
<footer class="footer">


<section class="sec-faq">
    <div class="container-fluid">
     <div class="row">
       <div class="col-md-12 text-center freqHeading">
         <h2>Frequently Asked Questions</h2>
       </div>
     </div>
        <div class="row">

    <div class="faqs">
               </div>
               <div class="row">
                  <?php $count2=1;  $index_query = new WP_Query(array( 'post_type' => 'faqs', 'posts_per_page' => -1,'order'=>'ASC' )); ?>
                  <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
                  <div class="col-md-12">
                     <div class="set <?php if($count2==1){ echo 'active1'; } ?>"   data-aos="fade-up" data-aos-offset="00"data-aos-easing="ease-in-sine" data-aos-delay="<?php echo $count*100; ?>">
                        <a href="javascript:void(0)">
                       <span> </span><?php the_title(); ?>
                        </a>
                        <div class="content" <?php if($count2==1){ echo 'style="display: block;"'; } else { echo 'style="display: none;"';  } ?>>
                           <?php the_content(); ?>
                        </div>
                     </div>
                  </div>
                  <?php $count2++; endwhile; wp_reset_postdata(); ?> 
               </div>
            </div>
        </div>
    </div>
</section>

<section class="getStart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center getStartHeading">
        <h2>Get Started Today</h2>
      </div>
    </div>

    <div class="row tabSec">
            <div class="col-md-12">
               <tabs>
                  <div id="tabs-container">
                     <!-- menu -->
                     <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1">Adventure Seeker</a></li>
                        <li ><a href="#tab-2">Search For Talent </a></li>
                     </ul>
                     <!-- menu -->
                     <div class="tab mainTabClass">
                        <!-- tab main class -->
                        <!-- first tab start  -->
                        <div id="tab-1" class="tab-content">
                           <div class="row setForm">
                             <?php echo do_shortcode('[contact-form-7 id="95" title="Contact form 1"]') ?>
                           </div>
                        </div>
                        <!-- first tab end -->
                        <div id="tab-2" class="tab-content">
                           <div class="row setForm">
                             <?php echo do_shortcode('[contact-form-7 id="95" title="Contact form 1"]') ?>
                           </div>
                        </div>
   
                        <!-- tab main class end-->
                     </div>
                  </div>
               </tabs>
            </div>
         </div>


  </div>
</section>

<section class="subscribeSec">
  <div class="container">
    <div class="row">
      <div class="bgBlur">
        <?php echo do_shortcode('[mc4wp_form id="96"]'); ?>
      </div>
    </div>
  </div>
</section>

<section class="contactUsSec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>Contact Us</h2>
                <a href="mailto:<?php echo $options['email']; ?>"> <?php echo $options['email']; ?> </a>
                
            </div>
            <div class="col-md-3"></div>

            <div class="col-md-3">
                <ul>
                    <li> <a href="<?php echo $options['facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $options['twitter']; ?>" target="_blank"> <i class="fa fa-twitter" ></i></a></li>
                    <li> <a href="<?php echo $options['googleplus']; ?>" target="_blank"> <i class="fa fa-google-plus" ></i></a></li>
                    <li> <a href="<?php echo $options['insta']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="allRight">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>2021 All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>


</footer>
</div>






<!------------------------ Back to top ------------------------------------>
<div id="back-top"><a href="#top"> <span class="fa fa-arrow-circle-o-up"></span></a></div>

<!--<div id="winSize"></div>-->
</main>

<!------------------------ CSS Library ------------------------------------>


<!------------------------ Jquery CDN ------------------------------------>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<!------------------------ Javascript ------------------------------------>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/library.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

<!------------------------ WOW Animation CDN------------------------------------>
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>new WOW().init();</script>

<?php wp_footer(); ?>
</body>
</html>
