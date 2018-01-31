<?php
/*
  Template Name: Company Layout
*/
?>
<?php get_header(  ); ?>

<div class="container content">
  <div class="main block">
    <?php if (have_posts(  )) : ?>
      <?php while(have_posts(  )) : the_post(  ); ?>
        <article class="page">
          <h2><?php the_title(  ); ?></h2>
          <p class="phone">1-234-567-8900</p>
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