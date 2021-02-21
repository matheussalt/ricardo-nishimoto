<?php
/**
 * Template Name: sobre
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="sobre-title">
  <div class="container">
    <h2 class="title">sobre</h2>
  </div>
</section>

<section class="sobre">
  <div class="container">
    <div class="sobre-img">
      <img src="<?=get_template_directory_URI()?>/img/src/home/ricardo_nishimoto.jpg" alt="Ricardo Nishimoto" />
    </div>

    <div class="sobre-txt">
      <h3>Dr. Ricardo Nishimoto</h3>

      <p>Dr. Ricardo Nishimoto é médico urologista formado pela Universidade
        Federal de Minas Gerais (UFMG), com especialização em Cirurgia
        Robótica e Minimamente Invasiva na Clinique Saint Augustin
        (Bordeaux/França).</p>
      <p>Sua trajetória cirúrgica é dedicada ao desenvolvimento e aperfeiçoamento
        de técnicas minimamente invasivas, notadamente na área oncológica,
        sem deixar de lado o tratamento humanizado do paciente.</p>
      <p>Profissional que se mantém atualizado visando oferecer o melhor
        tratamento para seus pacientes, com eficácia e segurança.</p>
      <p>Compartilha constantemente seu conhecimento e experiência com a
        comunidade médica através de cursos, palestras e publicações científicas,
        contribuindo para a formação de novos especialistas.</p>
    </div>
  </div>
</section>

<section class="sobre grey">
  <div class="container">
    <div class="sobre-txt">
      <h3>FORMAÇÃO</h3>

      <ul>
        <li>- Membro do corpo docente do curso de Cirurgias Urológicas
          Minimamente Invasivas e Robóticas – IRCAD/ América Latina</li>
        <li>- Membro da Sociedade Brasileira de Cirurgia Minimamente Invasiva e
          Robótica (SOBRACIL)</li>
        <li>- Membro titular da Sociedade Brasileira de Urologia (SBU)</li>
        <li>- Especialização em Cirurgia Minimamente Invasiva e Robótica pela
          Clinique Saint Augustin – Bordeaux/França</li>
        <li>- Residência médica em Urologia pelo Instituto de Previdência dos
          Servidores do Estado de Minas Gerais (IPSEMG)</li>
        <li>- Residência médica em Cirurgia Geral pelo Instituto de Previdência dos
          Servidores do Estado de Minas Gerais (IPSEMG)</li>
        <li>- Graduação em Medicina pela Universidade Federal de Minas Gerais
          (UFMG)</li>
      </ul>
    </div>

    <div class="sobre-img">
      <img src="<?=get_template_directory_URI()?>/img/src/sobre/ricardo_nishimoto2.jpg" alt="Ricardo Nishimoto" />
    </div>
  </div>
</section>

<?php get_footer();