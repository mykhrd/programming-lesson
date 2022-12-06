<?php get_header(); ?>
<?php get_template_part('components/page-header-news'); ?>
<section class="single">
    <div class="single__wrap">
        <div class="single__heading">
            <h3>お知らせ</h3>
            <p>news&blog</p>
            </div>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <span class="single-category">
                <?php
                $categories = get_the_category();
                $category_name = $categories[0]->name;
                echo $category_name; 
                ?>
            </span>
            <span class="single-date"><?php the_time('Y-m-d'); ?></span>
            <h3 class="single-title"><?php the_title(); ?></h3>         
            <div class="single-content"><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>         
    <?php wp_reset_postdata(); ?>
    </div>              
</section>
<?php get_footer(); ?>







