<?php get_header(  ); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-12">
                    <main class="main">
                        <header class="content-Header">
                            <h1 class="content-Title">
                                <?php if(is_month(  )): ?>
                                <?php echo get_the_date( 'Y年n月' ); ?>
                                <?php else: ?>
                                <?php single_term_title(  ); ?>
                                <?php endif; ?>
                            </h1>
                        </header>
                        <div class="portfolioArcive row">
                            <?php if(have_posts(  )): ?>
                            <?php 
                            while(have_posts(  )):
                                the_post(  );
                            ?>
                            <?php get_template_part( 'template-parts/loop', 'portfolioArchive' ); ?>
                            <?php endwhile; ?>
                        </div>
                        <?php get_template_part( 'template-parts/parts','pagination' ); ?>
                        <?php endif; ?>
                    </main>
                </div>
                <?php get_sidebar(  ); ?>
            </div>
        </div>
<?php get_footer(  ); ?>