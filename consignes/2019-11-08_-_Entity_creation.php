<?php
$title = "Consigne’s";

include_once "include/include_head.php";
include_once "include/include_header.php";
include_once "include/include_main.php";
?>


<section>
    <fieldset>
        <h2>Consigne phase 01</h2>

        <ul><li><a href="https://yiotis.net/filterizr/#/">https://yiotis.net/filterizr/#/</a></li>
        </ul>

        <p>Aller sur Git-Lab téléchargé le template du prof.</p>

        <ul><li><a href="https://gitlab.com/Teacher01/learning-template.git" target="_blank">https://gitlab.com/Teacher01/learning-template.git</a></li></ul>



        <p>Créez trois entité</p>

        <p>Les cours ne peuvent pash avori plusieurs catégoires.</p>

        <p>En anglais…</p>

        <h3>course</h3>
        <table class="ui selectable celled striped table" style="width: auto;">
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
                <td>{prof}<br>Si il ce termine par _at, il propose date automatiquement.
                </td>
            </tr>
            <tr>
                <th>isPublished / is_published :</th>
                <td>tinyint(1)</td>
                <td>{prof}<br> Le fait de commencé par is_ créé un booleene.</td>
            </tr>
            <tr>
                <th>slug :</th>
                <td>varchar(255)</td>
                <td>{prof}<br>{Paramètre de url, qui retire tout les accents et les espaces.}</td>
            </tr>
            <tr>
                <th>image :</th>
                <td>varchar(255)</td>
                <td>{prof}</td>
            </tr>
            <tr>
                <th>schedule :</th>
                <td>varchar(255)</td>
                <td></td>
            </tr>
            <tr>
                <th>program :</th>
                <td>varchar(255)</td>
                <td>timefile PDF</td>
            </tr>
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
            <li>categoryId : int(11) {prof}<br>il faut les faires en seconde phase, après avori créé CourseCategory.
            </li>
            <li>levelId : int(11) {prof}<br>il faut les faires en seconde phase, après avori créé CourseLevel.
            </li>
        </ul>
        <p>Lors de la création, j'avais un bug car quand je lançais la création de categoryId / category_id & levelId / category_id, dans l'entité / table Course / course. Je faisais OneToMany dans type alors que il fallait faire ManyToOne</p>

        <figure>
            <a href="../public/public/img/screen_shot/2019-11-08_-_14h37.png" target="_blank"><img src="../public/public/img/screen_shot/2019-11-08_-_14h37.png" alt="" style="width: 75%;"></a>

            <a href="../public/public/img/screen_shot/2019-11-08_-_13h48.png" target="_blank"><img src="../public/public/img/screen_shot/2019-11-08_-_13h48.png" alt="" style="width: 75%;"></a>
            <figcaption>Erreur de liaison.</figcaption>
        </figure>

        <h4>Faker</h4>
        <ul>
            <li><a href="https://github.com/fzaninotto/Faker">Git‑Hub fzaninotto/Faker</a></li>
            <li><code>composer require fzaninotto/faker</code></a></li>

        </ul>

        <h4>Slug :</h4>
        <ul>
            <li><a href="https://packagist.org/?query=slugify" target="_blank">https://packagist.org/?query=slugify</a></li>
        </ul>

        <p><code>composer require cocur/slugify</code></p>


    </fieldset>
</section>

<h2>Test</h2>

<?php
include_once "include/include_footer.php";