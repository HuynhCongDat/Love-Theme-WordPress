  <?php get_header(); ?>
    <main>
       <section class="detail-product">
           <div class="detail-product__contents">
               <div class="category-content">
                    <div class="category__title">
                        <h1><?php single_cat_title(); ?></h1>
                    </div>
                    <!-- Get post mặt định -->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="category__item">
                       <div class="__item-image">
                           <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumbnail') ); ?></a>
                       </div>
                       <div class="__item-info">
                           <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                           <span><?php echo get_the_date('d/m/Y'); ?></span>
                           <?php the_excerpt(); ?>   
                       </div>
                   </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
               </div>
               <?php if(paginate_links()!='') {?>
                    <div class="pagenavi">
                        <div class="pagenavi__item">
                        <?php
                            global $wp_query;
                            $big = 999999999;
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'prev_text'    => __('«'),
                                'next_text'    => __('»'),
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $wp_query->max_num_pages
                                ) );
                            ?>
                        </div>
                    </div>
                <?php } ?>
               <!-- <section class="pagenavi">
                    <div class="pagenavi__item">
                        <a href="#"><span>1</span></a>
                    </div>
                    <div class="pagenavi__item">
                        <a href="#"><span>2</span></a>
                    </div>
                    <div class="pagenavi__item">
                        <a href="#"><span>3</span></a>
                    </div>
               </section> -->
               <?php get_template_part('comment'); ?>
           </div>
           <?php get_sidebar(); ?>
       </section>
    </main>
    <?php get_footer(); ?>

   