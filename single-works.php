<?php get_header(); ?>
<main class="l-main p-main">
    <figure class="p-single-w--fig">
        <?php the_post_thumbnail(); ?>
    </figure>
    <h2 class="p-title--single c-wrapper">
        <?php the_title(); ?>
    </h2>
    <article class="p-article--single c-wrapper">
         <div class="p-postdate">
            <?php echo esc_html(get_the_date()); ?>
        </div>
        <?php the_content(); ?>
    </article>
</main>
<?php get_footer(); ?>