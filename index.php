<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <?php wp_head(  ); ?>
</head>
<body <?php body_class(  ); ?>>
  <header>
    <div class="container">
      <h1>
        <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
        <small><?php bloginfo( 'description' ); ?></small>
      </h1>
      <div class="h_right">
        <form method="get" action="<?php esc_url( home_url( '/' ) ); ?>">
          <input type="text" name="s" placeholder="搜索...">
        </form>
      </div>
    </div>
  </header>
  <nav class="nav main-nav">
    <div class="container">
      <?php 
        $args = array('theme_location' => 'primary' );
      ?>
      <?php wp_nav_menu( $args ); ?>
    </div>
  </nav>
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
            <?php the_excerpt(  ); ?>
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
  
  <footer class="main-footer">
    <div class="container">
      <div class="f_left">
          <p>&copy;2018 - WordPress 高级主题</p>
      </div>
      <div class="f_right">
          <ul>
            <li><a href="index.html">首页</a></li>
            <li><a href="about.html">关于</a></li>
            <li><a href="#">服务</a></li>
          </ul>
      </div>
    </div>
  </footer>
  <?php wp_footer(  ); ?>
</body>
</html>