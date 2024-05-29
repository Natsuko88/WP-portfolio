<?php get_header(); ?>
<main class="l-main p-main">
    <figure>
        <?php the_post_thumbnail(); ?>
    </figure>
    <?php the_title(); ?>
    <?php the_content(); ?>
</main>
<?php get_footer(); ?>