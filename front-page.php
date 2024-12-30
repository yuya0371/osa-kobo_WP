<?php get_header(); ?>

<main class="main">
            <div class="container-fluid">
                <div class="home-Hero">
                    <div class="home-Hero_Inner">
                        <p class="home-Hero_Txt">
                            青森県青森市を拠点とし活動する<br>唯一無二のさをり工房
                        </p>
                    </div>
                </div>
                <section class="home-Style">
                    <h2 class="home-Style_Title">作品<span>Portfolio</span></h2>
                    <div class="row">
                        <div class="col-lg-12 row">
                            <?php 
                            $osakobo_args=array(
                                'post_type'=>'post',
                                'posts_per_page'=>8,
                                'category_name'=>'portfolio',
                            );
                            $osakobo_news_query=new WP_Query($osakobo_args);
                            if ($osakobo_news_query->have_posts(  )):
                            ?>
                            <?php 
                            while($osakobo_news_query->have_posts()):
                                $osakobo_news_query->the_post(  );
                            ?>
                            <?php get_template_part( 'template-parts/loop', 'portfolio' ); ?>
                            <?php 
                            endwhile;
                            wp_reset_postdata(  );
                            ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="home-Style_More">
                        <a href="<?php echo esc_url( home_url( 'category/portfolio' ) ); ?>" class="home-Style_More_Link">もっと見る</a>
                    </p>
                </section>
                <section class="home-News">
                    <h2 class="home-News_Title">新着記事<span>Blog</span></h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <?php 
                            $osakobo_args=array(
                                'post_type'=>'post',
                                'posts_per_page'=>3,
                                'category_name'=>'blog',
                            );
                            $osakobo_news_query=new WP_Query($osakobo_args);
                            if ($osakobo_news_query->have_posts(  )):
                            ?>
                            <?php 
                            while($osakobo_news_query->have_posts()):
                                $osakobo_news_query->the_post(  );
                            ?>
                            <?php get_template_part( 'template-parts/loop', 'post' ); ?>
                            <?php 
                            endwhile;
                            wp_reset_postdata(  );
                            ?>
                            <?php endif; ?>

                        </div>
                    </div>
                    <p class="home-News_More">
                        <a href="<?php echo esc_url( home_url( 'category/blog' ) ); ?>" class="home-News_More_Link">もっと見る</a>
                    </p>
                </section>
            </div>
        </main>
<?php get_footer(); ?>