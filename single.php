<?php get_header(); ?>
    
<main>
    <section class="detail-product">
        <div class="detail-product__contents">
            <div class="detail-new">
            
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <h1 class="single-title"><?php the_title(); ?></h1>
                    <div class="meta">
                        <span>Ngày đăng: <?php echo get_the_date('d/m/Y')?></span>
                        <span>Tác giả: <?php the_author(); ?></span>
                        <span>Category: <?php the_category(', '); ?></span>
                        <span>Lượt xem: 123 lượt xem</span>
                    </div>
                    <article class="post-content">
                        <?php the_content(); ?>
                    </article>
                    <div class="tag">
                        <?php the_tags('Từ khóa: '); ?>
                    </div>
                   
                <?php endwhile; ?>
                <?php endif; ?>
                <div class="__like">
                <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                </div>
                <div class="__product-comments">
                    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
                </div>
            </div>
            
        </div>
       <?php get_sidebar(); ?>
    </section>
</main>

<?php get_footer(); ?>