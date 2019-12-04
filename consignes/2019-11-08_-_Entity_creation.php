<?php $title = "Consigne’s";
include_once "include/include_head.php";
include_once "include/include_header.php";include_once "include/include_main.php";
?><!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv = "X-UA-Compatible"
          content = "ie=edge">
    <title>Document</title>

    <link rel = "stylesheet"
          href = "assets/css/prism/prism.css">
</head>
<body>
<section>
    <fieldset>
        <h2>Consigne phase 01</h2>
        <ul>
            <li><a href = "https://yiotis.net/filterizr/#/">https://yiotis.net/filterizr/#/</a></li>
        </ul>
        <p>Aller sur Git-Lab téléchargé le template du prof.</p>
        <ul>
            <li><a href = "https://gitlab.com/Teacher01/learning-template.git"

                   target = "_blank">https://gitlab.com/Teacher01/learning-template.git</a></li>
        </ul>
        <p>Créez trois entité</p>
        <p>Les cours ne peuvent pash avori plusieurs catégoires.</p>
        <p>En anglais…</p>
        <h3>course</h3>
        <table class = "ui selectable celled striped table"
               style = "width: auto;">
            <tbody>
            <tr>
                <th>id :</th>
                <td>int(11)</td>
                <td>{prof}</td>
            </tr>
            <tr>
                <th>name :</th>
                <td>varchar(120)</td>
                <td>{prof}</td>
            </tr>
            <tr>
                <th>smallDescription / small_description :</th>
                <td>varchar(255)</td>
                <td>{prof}</td>
            </tr>
            <tr>
                <th>fullDescription / full_description :</th>
                <td>longtext</td>
                <td>{prof}</td>
            </tr>
            <tr>
                <th>duration :</th>
                <td>varchar(60)</td>
                <td>{prof}</td>
            </tr>
            <tr>
                <th>price :</th>
                <td>double</td>
                <td>{prof}</td>
            </tr>
            <tr>
                <th>createdAt / created_at :</th>
                <td>datetime</td>
                <td>{prof}<br> Si il ce termine par _at, il propose date automatiquement.</td>
            </tr>
            <tr>
                <th>isPublished / is_published :</th>
                <td>tinyint(1)</td>
                <td>{prof}<br> Le fait de commencé par is_ créé un booleene.</td>
            </tr>
            <tr>
                <th>slug :</th>
                <td>varchar(255)</td>
                <td>{prof}<br> {Paramètre de url, qui retire tout les accents et les espaces.}</td>
            </tr>
            <tr>
                <th>image :</th>
                <td>varchar(255)</td>
                <td>{prof}</td>
            </tr>
            <tr>
                <th>schedule :</th>
                <td>varchar(255)</td>
                <td><br>
                </td>
            </tr>
            <tr>
                <th>program :</th>
                <td>varchar(255)</td>
                <td>timefile PDF</td>
            </tr>
            </tbody>
        </table>
        <h3>courseLevel (Entity) / course_level (converted in DataBase)</h3>
        <ul>
            <li>id : int(11)</li>
            <li>Name : varchar(120) {prof}</li>
            <li>description : varchar(255) {prof}</li>
        </ul>
        <h3>courseCategory (Entity) / course_category (converted in DataBase)</h3>
        <ul>
            <li>id : int(11) {prof}</li>
            <li>name : varchar(120) {prof}</li>
            <li>prerequisite : varchar(255) {prof}</li>
        </ul>
        <h3>course next operation :</h3>
        <ul>
            <li>categoryId : int(11) {prof}<br> il faut les faires en seconde phase, après avori créé CourseCategory.
            </li>
            <li>levelId : int(11) {prof}<br> il faut les faires en seconde phase, après avori créé CourseLevel.</li>
        </ul>
        <p>Lors de la création, j'avais un bug car quand je lançais la création de categoryId / category_id &amp; levelId / category_id, dans l'entité / table Course / course. Je faisais OneToMany dans type alors que il fallait faire ManyToOne</p>
        <figure><a href = "../public/public/img/screen_shot/2019-11-08_-_14h37.png"

                   target = "_blank"><img src = "../public/public/img/screen_shot/2019-11-08_-_14h37.png"

                                          alt = ""
                                          style = "width: 75%;"></a>
            <a href = "../public/public/img/screen_shot/2019-11-08_-_13h48.png"

               target = "_blank"><img src = "../public/public/img/screen_shot/2019-11-08_-_13h48.png"

                                      alt = ""
                                      style = "width: 75%;"></a>
            <figcaption>Erreur de liaison.</figcaption>
        </figure>
        <h4>Faker</h4>
        <ul>
            <li><a href = "https://github.com/fzaninotto/Faker">Git‑Hub fzaninotto/Faker</a></li>
            <li><code class = "language-php">composer require fzaninotto/faker</code></li>
        </ul>
        <h4>Slug :</h4>
        <ul>
            <li><a href = "https://packagist.org/?query=slugify"
                   target = "_blank">https://packagist.org/?query=slugify</a></li>
        </ul>
        <p><code class = "language-php">composer require cocur/slugify</code></p>
        <h3>2019-11-22</h3>
        <p>Admin<br> Public<br> <br> Split de element head header main footer avec affichage unique<br>
            <br> Afficher visible et icon pour cacher.</p>
        <h3>2019-11-28 - Contact creation :</h3>

        <p><code class = "language-php">php bin/console make:entity Contact</code><br> <br> edit
            <code class = "language-php">Entity/Contact.php</code><br> <br> Nettoyage du fichier contact
            <code class = "language-php">Contact.php</code><br>
        <pre><code class = "language-php line-numbers">&lt;?php<br>
          <br>
namespace App\Entity;<br>
<br>
class Contact<br>
{<br>
<br>
}
?&gt;</code></pre>

        <pre><code class = "language-php">php bin/console make:form ContactType
// helas error, dans mon cas.</code></pre>

        <p>Demander à martin copie de <code class="language-php">ConctactType</code></p>

        <pre><code class="language-php line-numbers">php bin/console make:controller ContactController</code></pre>

            <p>Lors de l'installation du Bundle KNP il a installé la 5 pour Symfony 5,<br> ce qui cause problème,<br> pour le résoudre il faut aller dans composer.json,<br> change 5.0 par 4.1<br> puis taper<br> `composer update`</p>
            <ul>
                <li>Se inscrire au cours,</li>
                <li>et faire de’s commentaire’s.</li>
                <li>Courrier éléctronique.</li>
                <li>Redimensionnement de image.</li>
                <li>M.J.M.L. (Template News letter’s)</li>
                <li>News Letter’s.</li>
                <li>Nous contacter (MailDev)<br>
                    <code class = "language-php">localhost:1080</code><br> accès MailDev<br> une fois installé<br> Test Mail Server Tool
                </li>
            </ul>
            <p>Le dépôt c'est pour après le’s vacance’s pour la première session.<br> La seconde il ne sait pash.</p>

            <h3>2019‑11‑29 :</h3>

            <p>Un commentaire par cours.<br> Dashboard</p>
            <ul>
                <li>Commentaire</li>
                <li>Actualité</li>
                <li>Utilisateur</li>
                <li>Cours</li>
                <li>Inscription</li>
            </ul>
            <p>Pour la semaine prochaine tout doit etre fonctionnel en publique ainsi que le’s commentaire’s.<br> Et dans la dashboard Admin, cours.
            </p>
    </fieldset>
</section>
<h2>Test</h2>

<footer>
    <script src = "assets/js/prism/prism.js"></script>
</footer>
</body>
</html>
<!--?php
include_once "include/include_footer.php";-->