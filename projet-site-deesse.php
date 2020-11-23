<?php
/*
Template Name: Site Sténie
*/
?>
<?php get_header(); ?>
<div class="main page"> 
  <main>
    <h1 class="post-title"><?php the_title(); ?></h1>
    <div class="description_projet">
        <div id="logo-titre">
            <div class="logo">
                <a href="https://www.steniedeesseconseil.com/" target="_blank">
                  <img src="../wp-content/uploads/2020/11/LogoSiteStenie_MyDeesseCosmeticsRose.png" alt="Logo Déesse">
                </a>
            </div>
            <div class="titre-competence">
                <h2>Développement du site Web e-commerce "Sténie Déesse Conseil" sous WordPress</h2>
            </div>
        </div>
        <div>
            <p>Dans un premier temps, la demande était d'avoir un site Vitrine afin d'être visible et de présenter les prestations et produits proposés.</p>
            <p>Par la suite, le site a évolué afin de permettre aux utilisateurs de commander les produits. La particularité est que la commande est possible que si l'utilisateur est connecté.</p>
        </div>
        <div class="fct-comp">
            <div class="fonction">
                <h2>Les principales fonctionnalités</h2>
                <ul>
                    <li>Gestion du paiement en ligne</li>
                    <li>Livraison dans un périmètre limité</li>
                    <li>Inscription à des évènements</li>
                    <li>Gestion de l'affichage des prix</li>
                </ul>
            </div>
            <div class="competences">
                <h2>Les compétences</h2>
                <div class="logo-competences">
                    <img src="../wp-content/uploads/2020/11/logo-wordpress.png" alt="Logo WordPress">
                    <img src="../wp-content/uploads/2020/11/logo_CSS.png" alt="Logo CSS">
                    <img src="../wp-content/uploads/2020/11/logo_HTML.png" alt="Logo HTML">
                </div>
            </div>
        </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>