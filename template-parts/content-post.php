<?php
/**
 * Content area for Default Template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
    <div class="entry-content entry-blog-content group">
        <?php the_content(); ?>
        <?php if( get_field('schema_script') ) : ?>
            <?php the_field('schema_script')?>
        <?php endif; ?>    
      </div><!-- .entry-content -->
    <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post --> 

<div id="prenxtlink" class="group prenextLinkeer">
    <?php 
    // get the prev and next post page
    $prev_post = get_previous_post();
    if (!empty( $prev_post )): ?>
        <a class="prevPost" href="<?php echo get_the_permalink( $prev_post->ID )  ?>">
            <span class="default_prev_title"><?php _e('previous')?></span>
        </a>
    <?php endif;

    $next_post = get_next_post();
    if (!empty( $next_post )): ?>
        <a class="nextPost" href="<?php echo get_the_permalink($next_post->ID)  ?>">
            <span class="default_next_title"><?php _e('next', 'pgflowteknik')?></span>
        </a>
    <?php endif ?>
    
</div> <!-- #prenxtlink -->