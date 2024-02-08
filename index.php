<?php get_header(); ?>
<main class="wrap">

  <section class="content-area content-thin">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <article class="article-loop">
        <header>
          <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
        </header>
        <?php the_excerpt(); ?>
      </article>

      <?php endwhile; else : ?>
        <article>
          <p>Nenhum post encontrado.</p>
        </article>

        <?php endif; ?>
  </section>
  
  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>