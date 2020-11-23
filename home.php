<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>
<div class="main page">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-content">
        <main>
            <div class="container" id="portrait">
                <div class="portrait">
                    <img class="img_portrait" src="wp-content/themes/portfolioRodrigueCalimia/img/portrait_Rodrigue.svg" alt="Portrait Rodrigue">
                </div>
                <div class="description_portrait">
                    <h1>Rodrigue CALIMIA</h1>
                    <h3>Développeur Web et Mobile</h3>
                    <p>Seul on va plus vite mais à plusieurs on va plus loin.</p>
                    <p>Je suis dynamique et rigoureux, cela me permet d’aller de l’avant et d’être en amélioration continue.</p>
                    <p>Je suis à l’écoute des nouveaux procédés et les nouveaux défis me motivent.</p>
                </div>
            </div>
            <div class="container" id="projets">
                <div class="projets">
                    <h1>Projets</h1>
                    <h3>& Compétences</h3>
                </div>
            </div>
            <div class="container1">
                <?php //get_template_part('loop'); ?>
                <div class="carte-projet">
                    <a href="projet-site-deesse.html"><img class="img_projet" src="wp-content/uploads/2020/11/carte_projet.png" alt="Site Déesse"></a>
                    <a href="projet-excel-deesse.html"><img class="img_projet" src="wp-content/uploads/2020/11/carte_projet_excel_deesse.png" alt="Application Déesse"></a>
                </div>
                <div class="carte-projet">
                    <a href="projet-site-vlbfinances.html"><img class="img_projet" src="wp-content/uploads/2020/11/carte_projet_vlb.png" alt="Site VLB Finances"></a>
                    <a href="projet-site-boucherie-argana.html"><img class="img_projet" src="wp-content/uploads/2020/11/carte_projet_boucherie.png" alt="Site Boucherie Argana"></a>
                </div>
            </div>
            <div class="container1" id="a-propos">
                <div class="a-propos">
                    <h1>À Propos</h1>
                    <h3>De Moi</h3>
                </div>
                <div class="description-a-propos">
                    <p>Âgé de 41 ans, j'ai travaillé dans le monde industriel et une grande partie dans l'automobile.</p>
                    <p>Ces différentes expériences m'ont amenées à utiliser un certains nombres d'application web métier et mobile. J'ai été confronté à leur complexité et donc à leur efficience.</p>
                    <p>Voulant aider un plus grand nombre de personne, je suis devenu auto-entrepreneur en 2017 dans le domaine du développement Web et application mobile afin de proposer mes services.</p>
                    <p>Depuis j'ai créer des sites Web E-commerce et Vitrine mais aussi des applications bureautiques.</p>
                    </p>
                </div>
                <div class="btn-cv">
                    <p>Visualiser mon CV</p>
                </div>
                <div class="cv">
                    <embed src="docs/cv-rodrigue-calimia.pdf" width=850 height=1200 type='application/pdf'/>
                </div>
            </div>
            <div class="container" id="contactez">
            <div class="contactez">
                <h1>Contactez</h1>
                <h3>Moi</h3>
            </div>
            </div>
            <div class="container">
                <div class="contact1">
                    <div class="contact_1">
                    <div class="contact1-1">
                        <img src="wp-content/uploads/2020/11/icone_tel.png" alt="Téléphoner">
                        <h3><a href="tel:+33(0)615697882">06 15 69 78 82</a></h3>
                    </div>
                    <div class="contact1-1">
                        <img src="wp-content/uploads/2020/11/icone_localisation.png" alt="Localisation">
                        <h3>14A Rue des Alisiers<br/>90400 BERMONT</h3>
                    </div>
                    <div class="contact1-1">
                        <img src="wp-content/uploads/2020/11/icone_mail.png" alt="E-Mail">
                        <h3><a href="mailto:rodrigue.calimia@outlook.fr">rodrigue.calimia@outlook.fr</a></h3>
                    </div>
                    <div class="contact1-1">
                        <img src="wp-content/uploads/2020/11/icone_linkedin.png" alt="Linkedin">
                        <h3><a href="http://linkedin.com/in/rodrigue-calimia-392674172" target="_blank">Rodrigue CALIMIA</a></h3>
                    </div></div>
                </div>
                <div class="contact2">
                    <form action="traitement.php" method="post">
                    <div class="form-label"><label for="nom">Nom</label></div>
                    <div class="form-input"><input type="text" name="nom" id="nom" required /></div>
                    <div class="form-label"><label for="prenom">Prénom</label></div>
                    <div class="form-input"><input type="text" name="prenom" id="prenom" required /></div>
                    <div class="form-label"><label for="e-mail">E-mail</label></div>
                    <div class="form-input"><input type="email" name="e-mail" id="e-mail" required /></div>
                    <div class="form-label"><label for="message">Message</label></div>
                    <div class="form-input"><textarea name="message" id="message" rows="10" cols="50"></textarea></div>
                    </form>
                </div>
            </div>
            <div class="container">
            <div class="vide"></div>
            <div class="envoyer"><input type="submit" value="Envoyer" class="bouton"/></div>
            </div>
        </main>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>