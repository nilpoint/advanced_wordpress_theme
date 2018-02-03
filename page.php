<?php get_header(  ); ?>

<div class="container content">
  <div class="main block">
    <?php if (have_posts(  )) : ?>
      <?php while(have_posts(  )) : the_post(  ); ?>
        <article class="page">
        <nav class="nav sub-nav">
          <ul>
            <span class="parent-link">
              <a href="<?php echo get_the_permalink(get_top_parent()); ?>">
                <?php echo get_the_title(get_top_parent()); ?>
              </a>
            </span>
          
            <?php
              $args = array(
                'child_of' => get_top_parent(), 
                'title_li' => ''
              );
            ?>
            <?php wp_list_pages( $args ); ?>
          </ul>
        </nav>
          <h2><?php the_title(  ); ?></h2>
          <?php the_content(  ); ?>
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

<?php
  function get_top_parent()
  {
    global $post;
    if ($post->post_parent) {
      $ancestors = get_post_ancestors( $post->ID );
      return $ancestors[0];
    }
    return $post->ID;
  }
?>