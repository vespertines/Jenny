<?php
/*
Template Name: page-home
*/
?>

<?php
$slide_1 = get_field("slide_1");
$footnote_1 = get_field("footnote_1");
$slide_2 = get_field("slide_2");
$footnote_2 = get_field("footnote_2");
$slide_3 = get_field("slide_3");
$footnote_3 = get_field("footnote_3");
$slide_4 = get_field("slide_4");
$footnote_4 = get_field("footnote_4");
$slide_5 = get_field("slide_5");
$footnote_5 = get_field("footnote_5");
$slide_5 = get_field("slide_6");
$footnote_5 = get_field("footnote_6");
$slide_5 = get_field("slide_7");
$footnote_5 = get_field("footnote_7");
$slide_5 = get_field("slide_8");
$footnote_5 = get_field("footnote_8");
?>

<?php get_header(); ?>

<main>
  <div class="swiper-container">
    <div class="home-prev"></div>
    <div class="home-next"></div>

    <div class="swiper-wrapper">
        <?php if ( $slide_1 ): ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_1; ?>);">
          <div class="footnote">
            <?php echo $footnote_1; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $slide_2 ): ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_2; ?>);">
          <div class="footnote">
            <?php echo $footnote_2; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $slide_3 ): ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_3; ?>);">
          <div class="footnote">
            <?php echo $footnote_3; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $slide_4 ): ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_4; ?>);">
          <div class="footnote">
            <?php echo $footnote_4; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $slide_5 ): ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_5; ?>);">
          <div class="footnote">
            <?php echo $footnote_5; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $slide_6 ): ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_6; ?>);">
          <div class="footnote">
            <?php echo $footnote_6; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $slide_7 ): ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_7; ?>);">
          <div class="footnote">
            <?php echo $footnote_7; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if ( $slide_8 ): ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_8; ?>);">
          <div class="footnote">
            <?php echo $footnote_8; ?>
          </div>
        </div>
        <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>