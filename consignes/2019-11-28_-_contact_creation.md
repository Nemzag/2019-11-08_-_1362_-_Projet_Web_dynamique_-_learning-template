php bin/console make:entity Contact


edit Entiy/Contact.php 

Nettoyage du fichier contact Contact.php
<code class="language-php"><?php

namespace App\Entity;

class Contact
{

}</php>

<code class="language-powershell">php bin/console make:form
ContactType

// helas error, dans mon cas.</php>

Demander à martin copie de ConctactType

php bin/console make:controller ContactController

Lors de l'installation du Bundle KNP il a oinstallé la 5 pour Symofy 5,
ce qui cause probleme,
pour le resoudre il faut aller dans composer.json,
change 5.0 par 4.1
puis taper
`composer update`