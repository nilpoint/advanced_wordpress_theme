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
        <a href="index.html"><?php bloginfo( 'name' ); ?></a>
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
      <article class="post">
        <h2>博客文章1</h2>
        <p class="meta">Posted at 13:00 on Jan 22 by admin</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare, enim nec accumsan pretium, nibh est pharetra purus, a scelerisque purus neque eget lorem. Vestibulum nisl dui, efficitur vel ultricies id, bibendum et odio. Integer sagittis urna at lorem mollis tempor. Nam aliquet risus nisi, non laoreet tellus placerat ut. Aliquam finibus convallis magna eget blandit. Donec consectetur ex dui, quis cursus risus pharetra quis. Aenean ornare eros a sapien finibus dictum. Pellentesque pharetra in mauris eu facilisis. Sed eu tortor sit amet risus cursus congue. Nulla ut dui lobortis nisl finibus volutpat.</p>
        <a class="button" href="#">更多</a>
      </article>
      <article class="post">
          <h2>博客文章2</h2>
          <p class="meta">Posted at 13:00 on Jan 22 by admin</p>
          <p>Integer accumsan dapibus ipsum et rutrum. Donec pharetra nibh mi, at varius est ultrices ut. Aenean convallis pharetra orci vitae maximus. Integer dapibus ligula massa, et scelerisque odio cursus vitae. Aenean ac risus ut eros rutrum auctor. Suspendisse pharetra elit at est pharetra, ut porta turpis ullamcorper. In tellus magna, mollis at ullamcorper sed, pharetra vitae neque. Aliquam egestas ut lectus sit amet auctor. Phasellus in felis purus. Curabitur vitae tincidunt tortor. Maecenas eu varius mauris. Aliquam molestie vulputate ipsum eget egestas. Donec a risus maximus, pharetra justo et, pulvinar ipsum. Nunc tempus dictum dolor, ac congue diam pellentesque eu. Aliquam dictum cursus euismod. Duis in euismod massa.</p>
          <a class="button" href="#">更多</a>
        </article>
        <article class="post">
            <h2>博客文章3</h2>
            <p class="meta">Posted at 13:00 on Jan 22 by admin</p>
            <p>Ut sit amet est lacinia, varius mauris et, mollis nulla. Vestibulum id gravida quam. Sed ac cursus orci. Nam laoreet, lacus ut dignissim bibendum, lectus urna molestie diam, non sollicitudin quam ante vel risus. Vestibulum posuere, justo quis vehicula facilisis, lacus eros finibus elit, sed imperdiet magna libero eget arcu. Fusce laoreet dolor id augue molestie lobortis. Maecenas porta eget nibh id interdum. Phasellus enim eros, efficitur et tincidunt id, dictum ac nisi. Nam sed dapibus lorem. Mauris consectetur libero et felis consectetur bibendum vehicula non dui. Cras augue massa, accumsan dapibus ligula tincidunt, interdum viverra tellus. Mauris lobortis pharetra augue, ac dignissim magna iaculis sed.</p>
            <a class="button" href="#">更多</a>
          </article>
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