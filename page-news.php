<?php get_header(); ?>
<?php get_template_part('components/page-header-news'); ?>

<section class="news__list">
    <div class="news__list__wrap">
        <div class="news__list__heading">
          <h3>お知らせ</h3>
          <p>news&blog</p>
        </div>
    <div class="news__list__contents">
    <!-- 最新の投稿一覧　6件表示 -->
    <?php
    if (get_query_var('paged')) {
        $paged = get_query_var('paged');
    } elseif (get_query_var('page')) {
        $paged = get_query_var('page');
    } else {
        $paged = 1;
    } ?>

    <?php
    $the_query = new WP_Query(array(
        'post_type' => 'post',
        'paged' => $paged,
        'order' => 'DESC',
        'orderby' => 'date',
        'posts_per_page' => 6,
    ));
    ?>

    <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="news__list__contents__item">
            <a href="<?php the_permalink(); ?>">
                <p class="news__list__contents__item-date"><?php echo get_the_date('Y.m.d'); ?></p>
                <p class="news__list__contents__item-category">
                    <?php
                    $categories = get_the_category();
                    $category_name = $categories[0]->name;
                    echo $category_name;
                    ?>
                </p>
                <h5 class="news__list__contents__item-title"><?php the_title(); ?></h5>    
            </a>
        </div>
        <?php endwhile; ?>
        <!-- ページネーション -->
        <div class="news__list__pagenation ">
            <?php 
                if ($the_query->max_num_pages > 1) {
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged),
                        'mid_size' => 1,
                        'total' => $the_query->max_num_pages,
                        'prev_text' => "<",
                        'next_text' => ">"
                    ));
                }
            ?>
        </div>
    <?php else: ?>
        <div class="news__list__contents__no-post">現在更新情報がありません</div>
    <?php endif; ?>
    </div>
    <? wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>  