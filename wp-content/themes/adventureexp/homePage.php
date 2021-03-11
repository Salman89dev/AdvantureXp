<?php
/**
 * The main template file.
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 * template Name:Home
 */

get_header(); ?>
<!-------------------------------------------Slider-------------------------------------------------->
<section class="sliderSec">
<slider>
<div class="slider">
  <div class="container-fluid p-0">
    <div class="tst">
      <div class="main-slider">
        <?php $index_query = new WP_Query(array( 'post_type' => 'home_slider', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        <div class="inner-item" style="background:url( <?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full');} ?> ) no-repeat center top / cover " >
        <div class="mainTextH">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="caption">
          <div class="mainSlider">
            <div class="sliderFirst">
              
              <?php the_content(); ?>
              <a href="<?php the_field('how_we_do_it_btn_link') ?>"> <?php the_field('how_we_do_it_btn') ?> </a>
            </div>

            <div class="sliderSecnd">
              <div class="firstCircle">
                <div class="secondCircle">
                  <div class="thirdCircle">
                    <div class="forthCircle">
                      <img src="<?php the_field('playimg') ?>" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <!-- <img src="<?php the_field('playimg'); ?>" alt=""> -->
              <p>Play our adventures</p>
            </div>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
  </div>
 </div>
</div>
</slider>
</section>

<section class="home-sec-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 mapFirst">
        <h6><?php the_field('why_choose_us'); ?></h6>
        <p><?php the_field('advanture_para'); ?></p>
      </div>
       
      <div class="col-md-5 mapSecnd">
        <img src="<?php the_field('usa_map_img'); ?>" alt="">
        <p><?php the_field('live_in_coolest_para'); ?></p>
      </div>
    </div>

    <div class="row mapSecRow">
      <div class="col-md-5 mapSecRowMap">
        <img src="<?php the_field('usa_map_img'); ?>" alt="">
      </div>
      <div class="col-md-2"></div>

      <div class="col-md-5">
        <div class="btnCircle">
          <a href="<?php the_field('start_your_advanture_btn_link'); ?>">
          <div class="arrowCircle">
            <img src="<?php the_field('arrow_img'); ?>" alt="">
            <p><?php the_field('start_your_advanture'); ?></p>
          </div>
          </a>
        </div>
      </div>
    </div>

    <div class="row readyAdvantureSec">

      <div class="col-md-6">
        <div class="readyAdvantureSecContent">
          <h6><?php the_field('read_for_advanture'); ?></h6>
          <p><?php the_field('read_for_advanture_para'); ?></p>

        </div>

        <div class="btnCircle">
          <a href="<?php the_field('start_your_advanture_btn_link'); ?>">
          <div class="arrowCircle">
            <img src="<?php the_field('arrow_img'); ?>" alt="">
            <p><?php the_field('start_your_advanture'); ?></p>
          </div>
          </a>
        </div>
      </div>

      <div class="col-md-6">
        <img src="<?php the_field('read_for_advanture_sec_img'); ?>" alt="">
      </div>

    </div>

    <div class="row telentSearching">
      <div class="col-md-6 telentSearchingImg">
         <img src="<?php the_field('talent_searching_sec_img'); ?>" alt="">
      </div>
      
      <div class="col-md-6">
        <h6><?php the_field('talent_searching_heading'); ?></h6>
        <?php the_field('talent_searching_para'); ?>

        <div class="learnImgSec">
          <div class="learnMoreBtn">
            <div>
              <a href="<?php the_field('talent_searching_learn_more_btn_link'); ?>"> <?php the_field('talent_searching_learn_more_btn'); ?> </a>
            </div>
            <div class="learnCircle"></div>
            <div class="learnBtnImg">
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
              <img src="<?php the_field('talent_searching_arrow_img'); ?>" alt="">
            </div>
          </div>

          <div class="usaMapImgs">
          
            <img src="<?php the_field('usa_map_img'); ?>" alt="">
          </div>


        </div>


      </div>
    </div>


    <div class="row OurStorySec">

       <div class="col-md-6 OurStorySecFirstSec">
         <h6><?php the_field('our_story_headig'); ?></h6>
         <p><?php the_field('our_story_para'); ?></p>


         <div class="learnImgSec">

          <div class="learnMoreBtn">
            <div>
              <a href="<?php the_field('talent_searching_learn_more_btn_link'); ?>"> <?php the_field('talent_searching_learn_more_btn'); ?> </a>
            </div>
            <div class="learnCircle"></div>
            <div class="learnBtnImg">
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
              <img src="<?php the_field('talent_searching_arrow_img'); ?>" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <div class="usaMapImgsss">
          
          <img src="<?php the_field('usa_second_map_img'); ?>" alt="">
        </div>

            </div>
          </div>
        </div>
        </div>

       <div class="col-md-6">
       <div class="usaMapImgs">
          
          <img src="<?php the_field('our_story_sec_img'); ?>" alt="">
        </div></div>
    </div>
  </div>  
</section>

<section class="checkOutSec">
  <div class="container-fluid">


  <div class="row checkOutSecFirst">
      <div class="col-md-5 checkOutSecImg">
         <img src="<?php the_field('check_out_sec_img'); ?>" alt="">
      </div>
      
      <div class="col-md-7">
        <h6><?php the_field('check_out_heading'); ?></h6>
        <?php the_field('check_out_para'); ?>

        <div class="learnImgSec">
          <div class="learnMoreBtn">
            <div>
              <a href="<?php the_field('check_out_learn_more_link'); ?>"> <?php the_field('talent_searching_learn_more_btn'); ?> </a>
            </div>
            <div class="learnCircle"></div>
            <div class="learnBtnImg">
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
              <img src="<?php the_field('talent_searching_arrow_img'); ?>" alt="">
            </div>
          </div>

          <div class="checkOutSecusaMapImgs">
          
            <img src="<?php the_field('usa_second_map_img'); ?>" alt="">
          </div>


        </div>


      </div>
    </div>
  </div>
</section>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
