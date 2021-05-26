<?php get_header(); ?>
    
    <article class="slideshow">
        <div class="slideshow__item --fade">
            <img src="<?php bloginfo('template_directory'); ?>/images/slideshow.png" style="width:100%">
        </div>
          
        <div class="slideshow__item --fade">
            <img src="<?php bloginfo('template_directory'); ?>/images/img_snow_wide.jpg" style="width:100%">
            <div class="text">
                <p>image 1</p>
            </div>
        </div>
          
        <div class="slideshow__item --fade">
            <img src="<?php bloginfo('template_directory'); ?>/images/img_mountains_wide.jpg" style="width:100%">
            <div class="text">
                <p>image 2</p>
            </div>
        </div>

        <div class="navi" style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    </article>

    <main>
        <section class="category">
            <?php
                $args = array(
                    'type'      => 'post',
                    'child_of'  => 0,
                    'parent'    => '',
                    'include'   => '6,7,8',
                );
                $categories = get_categories( $args );
                foreach ( $categories as $category ) { ?>
                    <div class="category__item">
                        <a href="<?php echo get_term_link($category->slug, 'category'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/category_img1.png" alt=""></a>
                        <div class="border">
                            <div class="__infoCategory">
                                <a href="<?php echo get_term_link($category->slug, 'category'); ?>"><p><?php echo $category->name; ?></p></a>
                            </div>
                        </div>  
                    </div>
                <?php }
            ?>
        </section>
        <section class="new-products">
            <div class="new-products__title">
                <h2>THỰC PHẨM MỚI NHẤT</h2>
                <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_logo.png" alt="">
            </div>
            <div id="new-products__details">
                <div class="MS-content">
                    <?php 
                    $feat_pro = new WP_Query( array('posts_per_page' => 8,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_visibility',
                                'field' => 'name',
                                'terms' => 'featured',
                                'operator' => 'IN'),
                            ),
                         )
                    );

                    while ( $feat_pro->have_posts() ) : $feat_pro->the_post();?>
                        //Hiển thị sản phẩm nổi bật
                    <?php endwhile; wp_reset_query(); ?>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_item1.png" alt="">
                        <div class="item__info">
                            <h2>Xà lách Lâm Đông</h2>
                            <span>25.000 VNĐ</span>
                            <a href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_item2.png" alt="">
                        <div class="item__info">
                            <h2>Dẻ sường Bò Úc</h2>
                            <span>250.000 VNĐ</span>
                            <a href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_item3.png" alt="">
                        <div class="item__info">
                            <h2>Nho đen Mỹ</h2>
                            <span>100.000 VNĐ</span>
                            <a href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_item4.png" alt="">
                        <div class="item__info">
                            <h2>Ngao trắng</h2>
                            <span>75.000 VNĐ</span>
                            <a href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_item1.png" alt="">
                        <div class="item__info">
                            <h2>Xà lách Lâm Đông</h2>
                            <span>25.000 VNĐ</span>
                            <a href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_item2.png" alt="">
                        <div class="item__info">
                            <h2>Dẻ sường Bò Úc</h2>
                            <span>250.000 VNĐ</span>
                            <a href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_item3.png" alt="">
                        <div class="item__info">
                            <h2>Nho đen Mỹ</h2>
                            <span>100.000 VNĐ</span>
                            <a href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/newproduct_item4.png" alt="">
                        <div class="item__info">
                            <h2>Ngao trắng</h2>
                            <span>75.000 VNĐ</span>
                            <a href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
                <div class="MS-controls">
                    <button class="MS-left"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    <button class="MS-right"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                </div>
            </div>
        </section>
        <section class="handbook">
            <div class="handbook__title">
                <h2>CẨM NANG NẤU ĂN</h2>
                <img src="<?php bloginfo('template_directory'); ?>/images/handbook_logo.png" alt="">
            </div>
            <div class="handbook__details">
            
                <?php 
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 3, // số lượng bài viết
                        'cat' => 5, // lấy bài viết trong chuyên mục có id là 1
                    );
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="__items">
                        <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumbnail') ); ?>
                        <div class="__itemInfo">
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>