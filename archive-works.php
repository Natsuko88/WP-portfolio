<?php get_header(); ?>
<main class="l-main p-main p-main--page">
    <h2 class="c-sec-title">Works</h2>
    <section class="p-card--blog">
        <!--メインループ-->
        <?php $args = array(
        'post_type' => 'works', // カスタム投稿タイプ
        'post_status' => 'publish', // 公開済の投稿
        'posts_per_page' => 10, // 投稿を10件表示
        'paged'=>$paged
        // 条件を追加する場合はここに追記
        );
        $the_query = new WP_Query($args);
    ?>
<?php if( $the_query->have_posts() ): ?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
    
        <!--繰り返す部分-->
        <article class="c-card--article">
            <?php the_post_thumbnail(); ?>
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
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else :
        ?><p>表示する記事がありません</p><?php
        endif; ?>
    </section>
</main>
<?php get_footer(); ?>