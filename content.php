<?php if (is_search(  )||is_archive(  )) : ?>
<div class="archive-post">
    <h4>
    <a href="<?php the_permalink(  ); ?>"><?php the_title(  ); ?></a>
    </h4>
    <p>发布于：<?php the_time( 'Y-m-d G:i' ); ?></p>
</div>
<?php else : ?>
<article class="post">
    <h2><?php the_title(  ); ?></h2>
    <p class="meta">
    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php the_author(  ); ?></a> 
    编辑于 <?php the_time( 'Y-m-d, G:i' ); ?> |
    <?php
        $categories = get_the_category(  );
        $separator = ", ";
        $output = '';

        if ($categories) {
        foreach ($categories as $category) {
            $output .= '<a href="'.get_category_link($category->term_id).'">'.
            $category->cat_name.'</a>'.$separator;
        }
        }

        echo trim($output, $separator);
        
    ?>
    </p>
    <?php if( has_post_thumbnail(  ) ) : ?>
        <div class="post-thumbnail">
        <?php the_post_thumbnail(  ); ?>
        </div>
    <?php endif; ?>
    <?php the_excerpt(  ); ?>
    <a class="button" href="<?php the_permalink(  ); ?>">更多</a>
</article>
<?php endif; ?>