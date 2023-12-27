<?php get_header(); ?>
<div class="container">
    <div class="row" style="height: 300px;">
        <div class="d-flex align-items-center justify-content-center">
            <div>
                <div style="font-family: 'GmarketSansMedium'; font-size: 40px; color: #383838;">Story of</div>
                <div style="font-family: 'GmarketSansBold'; font-size: 40px; color: #383838; margin-left: 90px">
                    Developer JS
                </div>
            </div>
        </div>
    </div>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <a href="<?php the_permalink(); ?>">
                <strong class="title mb-2"><?php the_title(); ?></strong>
                <p><?php echo mb_substr(strip_tags(get_the_content()),0,100) ?></p>
            </a>

        <?php endwhile;
    else: _e('Sorry, no posts found.');
    endif;
    ?>

</div>
<?php get_footer(); ?>
