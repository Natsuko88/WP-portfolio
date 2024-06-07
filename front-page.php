<?php get_header(); ?>
<main class="l-main p-main">
    <section class="p-tophead">
        <div class="p-site-title">
            <h2 class="c-logo">
                Natsuko's portfolio
            </h2>
        </div> 
    </section>
    <section id="about" class="p-sec-contents p-sec-contents--about c-wrapper">
        <h2 class="c-sec-title">About</h2>
        <div class="p-card--about">
            <img class="c-author-img" src="<?php echo esc_url(get_template_directory_uri(). '/img/author2.png'); ?>">
            <p>
                コーダーです。<br>
                お客様の大切なデザインを正確にWebサイトで再現します。<br>
                SassやFLOCSSを取り入れて、CSSの管理を効率的にしています。<br>
                Git,Githubを活用したコード管理ができます。<br>
                HTMLで作られたサイトをWordPress化して、サイトの更新を簡単にするお手伝いができます。<br>
            </p>
        </div>
        <div class="p-skills">
            <p class="c-sec-title u-sec-title">Skills</p>
            <div class="p-skill-icon">
                <i class="fa-brands fa-sass"></i>
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-wordpress"></i>
            </div>
        </div>
    </section>
    <section id="works" class="p-sec-contents c-wrapper">
        <h2 class="c-sec-title"><a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>">Works</a></h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <!--サブループ-->
            <?php
                //$argsのプロパティを変更することでカスタマイズ
                $args = array(
                'post_type' => 'works',
                'no_found_rows' => true
                );
                $wp_query_array = new WP_Query( $args ); 
            ?>
              <div class="swiper-slide">
                <?php
                    if ( $wp_query_array -> have_posts() ) :
                    while ( $wp_query_array -> have_posts() ) : $wp_query_array -> the_post();
                ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <h4 class="c-title--sub"><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                </a>
                </div>
            <?php
            endwhile;?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section id="blog" class="p-sec-contents c-wrapper">
        <h2 class="c-sec-title"><a href="<?php echo esc_url(home_url()); ?>/post">Blog</a></h2>
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
    </section>
    <section id="contact" class="p-sec-contents c-wrapper">
            <h2 class="c-sec-title">Contact</h2>
            <div class="p-form--contact">
                <button class="c-button">
                <a href="<?php echo esc_url('/contact/'); ?>">
                <h3 class="c-subtitle">お問い合わせはこちらから</h3>
                </a>
                </button>
                <p>回答に２〜３日お時間をいただく場合がございます。</p>
            </div>
    </section>
</main>
<?php get_footer(); ?>