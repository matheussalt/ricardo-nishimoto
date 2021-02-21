<?php
/**
 * Template Name: duvidas
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="duvidas">
  <div class="container">
    <h2 class="title">Dúvidas</h2>
    <p>A cirurgia robótica é algo novo no mercado. Consequentemente, existem muitas dúvidas sobre o assunto. Confira as
      respostas de algumas dúvidas frequentes.</p>

    <div class="duvidas-wrapper">
      <? query_posts( array( 'post_type' => 'duvida', 'posts_per_page' => '-1' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="duvidas-card">
        <h3><?=the_title()?></h3>
        <div>
          <?=the_content()?>
        </div>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer();