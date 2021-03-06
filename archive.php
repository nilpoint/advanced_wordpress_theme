<?php get_header(  ); ?>

<div class="container content">
  <div class="main block">
    <h1 class="page-header">
      <?php
        if (is_category(  )) {
          single_cat_title(  );
        } else if(is_author(  )) {
          the_post(  );
          echo '按作者分类：' . get_the_author(  );
          rewind_posts(  );
        } elseif(is_tag(  )){
          single_tag_title(  );
        } elseif(is_day(  )){
          echo '按天分类：' . get_the_date(  );
        } elseif(is_month(  )){
          echo '按月分类：' . get_the_date( 'Y-m' );
        } elseif(is_year(  )){
          echo '按年分类：' . get_the_date( 'Y' );
        } else {
          echo '档案';
        }        
      ?>
    </h1>
    <?php if (have_posts(  )) : ?>
      <?php while(have_posts(  )) : the_post(  ); ?>
        <?php get_template_part( 'content', get_post_format(  ) ); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop( 'Sorry, no posts were found' ); ?>
    <?php endif; ?>
  </div>

  <div class="side">
    <?php if(is_active_sidebar( 'sidebar' )) : ?>
      <?php dynamic_sidebar( 'sidebar' ); ?>
    <?php endif; ?>
  </div>
</div>
  
<?php get_footer(  ); ?>  