<?php get_header(); ?>
<main class="l-main p-main p-main--page">
    <h2 class="c-sec-title">Blog</h2>
    <section class="p-card--blog">
        <!--メインループ-->
        <?php
            if( have_posts() ):
                while( have_posts() ):
                    the_post(); ?>
        <!--繰り返す部分-->
        <article class="c-card--article">
            <h4 class="c-title--sub"><?php the_title(); ?></h4>
            <?php the_date(); ?>
            <!--<?php the_category(); ?>-->
            <?php the_excerpt(); ?> 
            <button class="c-button">
                <a href="<?php the_permalink();?>">
                    <?php _e('続きを見る','natsukoportfolio') ?>
                </a>
            </button>
        </article>
        <!--記事がない場合-->
        <?php endwhile;
            else :
        ?><p>表示する記事がありません</p><?php
        endif; ?>
    </section>
</main>
<?php get_footer(); ?>