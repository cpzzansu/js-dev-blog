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
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); ?>

            <!-- 블로그 글 리스트 제목 -->
            <div class="mb-2">
                <a href="<?php the_permalink(); ?>">
                    <strong class="title"><?php the_title(); ?></strong>
                </a>
            </div>

            <!-- 블로그 글 리스트 처음 내용 -->
            <a href="<?php the_permalink(); ?>">
                <p class="substr"><?php echo mb_substr( strip_tags( get_the_content() ), 0, 100 ) ?></p>
            </a>

            <div>
                <!-- 블로그 글 리스트 카테고리 -->
                <p><?php the_category( ', ' ); ?></p>

                <!-- 블로그 글 리스트 등록 날짜 -->
                <p><?php the_date(); ?></p>
            </div>

		<?php endwhile;
	else: _e( 'Sorry, no posts found.' );
	endif;
	?>

</div>
<?php get_footer(); ?>
