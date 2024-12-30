<article id="post-<?php the_ID(  ); ?>" class="col-3" >
    <a href="<?php the_permalink(  ); ?>" class="portfolio_image_Link">
        <div class="portfolio_image_div">
            <?php if(has_post_thumbnail(  )): ?>
                <?php the_post_thumbnail(); ?>
            <?php else:?>
                <img class="portfolio_image" src="<?php echo esc_url(get_template_directory_uri(  )); ?>/assets/img/dummy-image.png" alt="" load="lazy">
            <?php endif; ?>
        </div>
    </a>
</article>