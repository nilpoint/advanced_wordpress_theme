<?php get_header(  ); ?>

<div class="container content">
  <div class="main block">
    <?php if (have_posts(  )) : ?>
      <?php while(have_posts(  )) : the_post(  ); ?>
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
          <?php the_content(  ); ?>
          <a class="button" href="<?php the_permalink(  ); ?>">更多</a>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop( 'Sorry, no posts were found' ); ?>
    <?php endif; ?>
  </div>

  <div class="side">
      <div class="block">
      <h3>Sidebar Head</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
      Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
      <a class="button">More</a>
      </div>
    </div>
</div>
  
<?php get_footer(  ); ?>  