<?php get_header(); ?>
<main class="l-main p-main">
    <?php while( have_posts() ) : the_post(); ?>
    <h2 class="p-title--single c-wrapper">
        <?php the_title(); ?>
    </h2>
    <article class="p-article--single c-wrapper">
        <div class="p-postdate">
            <?php echo esc_html(get_the_date()); ?>
        </div>
        <div <?php post_class(); ?>> 
        </div>
        <?php the_content(); ?>
    </article>
    <?php wp_link_pages(); ?>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>