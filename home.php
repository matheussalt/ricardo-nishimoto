<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.home-banner {
  background-image: url('<?=get_template_directory_URI()?>/img/src/home/banner.jpg');
}

.home-sobre {
  background-image: url('<?=get_template_directory_URI()?>/img/src/home/background_sobre.jpg');
}

.home-parallax {
  background-image: url('<?=get_template_directory_URI()?>/img/src/home/parallax.jpg');
}
</style>

<section class="home-banner">
  <div class="container">
    <div class="home-banner-img">
      <img src="<?=get_template_directory_URI()?>/img/src/home/imagem_banner.jpg"
        alt="Urologia e Alta Tecnologia em favor da saúde" />
    </div>

    <div class="home-banner-txt">
      <h1>UROLOGIA E ALTA TECNOLOGIA EM FAVOR DA SAÚDE</h1>
      <p>A cirurgia robótica possibilita mais precisão, alta definição e operações menos invasivas</p>

      <a href="<?=site_url()?>/contato">marque sua consulta</a>
    </div>
  </div>

  <a href="<?=site_url()?>/contato" class="home-banner-marcar">
    <img src="<?=get_template_directory_URI()?>/img/src/home/calendario.png" alt="Marque sua consulta" />
    <span>marque sua consulta</span>
  </a>
</section>

<section class="home-robotica">
  <div class="container">
    <div class="home-robotica-txt">
      <h2 class="title">cirurgia robótica na urologia</h2>
      <p>A robótica aplicada na Urologia é um grande avanço médico. Com o uso da tecnologia, é possível realizar
        cirurgia
        de rins, próstata, bexiga e outras áreas de forma minimamente invasiva. É comprovado que a operação se torna
        mais
        segura.</p>

      <p>Hoje, a Medicina conta com máquinas que potencializam cirurgiões. Problemas cardíacos, cerebrais, oncológicos e
        outros são tratados com braços robóticos. Eles levam câmeras e instrumentos para dentro do paciente,
        proporcionando visão 3D.</p>

      <h3>Robótica com foco em Urologia. Principais
        cirurgias realizadas:</h3>

      <ul>
        <li>Prostatectomia radical no tratamento do câncer da próstata</li>
        <li>Nefrectomia parcial no tratamento do câncer de rim</li>
        <li>Cistectomia radical no tratamento do câncer de bexiga</li>
      </ul>

      <a href="<?=site_url()?>/urorobotica-mg/" class="see-more blue">
        <span>ver mais</span>
        <img src="<?=get_template_directory_URI()?>/img/src/home/arrow.png" />
      </a>
    </div>

    <div class="home-robotica-img">
      <img src="<?=get_template_directory_URI()?>/img/src/home/cirurgia_na_urologia.jpg" />
    </div>
  </div>
</section>

<section class="home-sobre">
  <div class="container">
    <h2>sobre o
      doutor
      ricardo
      nishimoto</h2>

    <div class="home-sobre-img">
      <img src="<?=get_template_directory_URI()?>/img/src/home/ricardo_nishimoto.jpg" alt="Dr. Ricardo Nishimoto" />
    </div>

    <div class="home-sobre-txt">
      <h3>ricardo nishimoto</h3>
      <h4>crm 1234-56</h4>

      <p>Cirurgião com expertise em Urorobótica. Um dos poucos cirurgiões urologistas de Belo Horizonte/MG capacitado
        para operar com tecnologia robótica. Profissional que se preocupa com o bem-estar do paciente acima de tudo. Por
        isso, está sempre se atualizando para oferecer mais avanço médico e segurança.</p>

      <a href="<?=site_url()?>/sobre/" class="see-more white">
        <span>ver mais</span>
        <img src="<?=get_template_directory_URI()?>/img/src/home/arrow.png" />
      </a>
    </div>
  </div>
</section>

<section class="home-areas">
  <div class="container">
    <div class="home-areas-txt">
      <h2 class="title">áreas de atuação</h2>

      <div class="home-areas-topicos">
        <h3>Robótica com foco em microcirurgia.
          Cirurgias realizadas:</h3>

        <div class="home-areas-topico">
          <div class="home-areas-topico-img">
            <img src="<?=get_template_directory_URI()?>/img/src/home/homem.png" />
          </div>

          <div class="home-areas-topico-txt">
            <h4>saúde do homem</h4>
            <p>Os principais procedimentos visam a tratamentos de próstata, bexiga e rins. A Uro-oncologia é a área que
              mais necessita da intervenção robótica.</p>
          </div>
        </div>

        <div class="home-areas-topico">
          <div class="home-areas-topico-img">
            <img src="<?=get_template_directory_URI()?>/img/src/home/mulher.png" />
          </div>

          <div class="home-areas-topico-txt">
            <h4>saúde da Mulher</h4>
            <p>Ao contrário do que muito se pensa, a Urologia também atende às mulheres para tratar bexiga, rins e
              realizar tratamentos uroginecológicos e uro-oncológicos.</p>
          </div>
        </div>

        <a href="<?=site_url()?>/sobre/" class="see-more blue">
          <span>ver mais</span>
          <img src="<?=get_template_directory_URI()?>/img/src/home/arrow.png" />
        </a>
      </div>
    </div>

    <div class="home-areas-img">
      <img src="<?=get_template_directory_URI()?>/img/src/home/atuacao_1.jpg" class="frente" />
      <img src="<?=get_template_directory_URI()?>/img/src/home/atuacao_2.jpg" class="fundo" />
    </div>
  </div>
</section>

<section class="home-parallax"></section>

<section class="home-blog">
  <div class="container">
    <div class="home-blog-wrapper">
      <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '3', 'cat' => '1' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', get_post_format() ); ?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <a href="<?=site_url()?>/sobre/" class="see-more blue">
      <span>ver mais</span>
      <img src="<?=get_template_directory_URI()?>/img/src/home/arrow.png" />
    </a>
  </div>
</section>

<section class="home-imprensa">
  <div class="container">
    <h2 class="title">sala de imprensa</h2>
    <p>Dr. Ricardo Nishimoto está presente na mídia. Clique e confira as matérias sobre Urologia e Robótica.</p>

    <div class="home-imprensa-wrapper">
      <? query_posts( array( 'post_type' => 'salas-de-imprensa', 'posts_per_page' => '3' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <a href="<?=the_permalink()?>" class="imprensa-card">
        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
        <h3><?=the_title()?></h3>
      </a>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <a href="<?=site_url()?>/sala-de-imprensa" class="see-more white">
      <span>Ver mais</span>
      <img src="<?=get_template_directory_URI()?>/img/src/home/arrow.png" />
    </a>
  </div>
</section>

<?php get_footer();