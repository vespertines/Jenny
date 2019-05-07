<?php get_header(); ?>

<?php
$article = get_field("article");
$slide_1 = get_field("slide_1");
$slide_2 = get_field("slide_2");
$slide_3 = get_field("slide_3");
$slide_4 = get_field("slide_4");
$slide_5 = get_field("slide_5");
$slide_6 = get_field("slide_6");
$slide_7 = get_field("slide_7");
$slide_8 = get_field("slide_8");
$slide_9 = get_field("slide_9");
$slide_10 = get_field("slide_10");
?>

<div class="project--tool">
    <? // php
    //$content = get_the_content();
    //if (empty($article)) {
    //    echo '<span class="read">Read</span>';
    // } ?>
    <?php if ( $article ): ?>
        <span class="read">Read</span>
    <?php endif; ?>
    <span class="pagination"></span>
    <span class="close"><a href="/projects">Close</a></span>
    <span class="next-project">
        <?php
        if ( get_adjacent_post(false, '', true) ) { 
            previous_post_link('%link', 'Next project');
        } else { 
            $first = new WP_Query('post_type=post&posts_per_page=1&order=desc'); $first->the_post();
            echo '<a href="' . get_permalink() . '">Next project</a>';
            wp_reset_query();
        }; 
        ?></span>
</div>

<div class="project">
    <div class="article--container">
        <div class="article">
            <div class="article--grid">
                <?php echo $article; ?>
            </div>
        </div>
    </div>
    <div class="prev"></div>
    <div class="next"></div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php if ( $slide_1 ): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_1; ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_2 ): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_2; ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_3): ?>
           <div class="swiper-slide" style="background-image: url(<?php echo $slide_3;  ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_4 ): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_4; ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_5 ): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_5; ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_6 ): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_6; ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_7 ): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_7; ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_8): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_8; ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_9 ): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_9; ?>)">
            </div>
            <?php endif; ?>
            <?php if ( $slide_10 ): ?>
            <div class="swiper-slide" style="background-image: url(<?php echo $slide_10; ?>)">
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>