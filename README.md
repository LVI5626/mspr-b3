# NATION SOUNDS
projet nation sounds.

# Je t'explique comment ca marche :

## SRC/SECRET.PHP
*secret.php* c'est votre fichier avec votre base de donnée propre à vous que vous devrez ajouter dans *src*.
Ca permet que personne ait les codes des autres.

## LANCEMENT DU SITE
Pour lancer le site c'est simple, (après avoir changé secret.php selon votre compte phpmyadmin) il vous faudra :
- créer une bdd qui s'appelle nation sounds
- lancer le fichier migration qui créera les tables de la bdd, lien normalement src/Migration/migration20200406150927.php à lancer depuis votre localhost selon ou vous l'avez mis
- lancer le fichier fixture qui insèrera les données dans la bdd, lien normalement src/fixture/fixtures.php à lancer depuis votre localhost selon ou vous l'avez mis
- Enjoy ! vous avez accès à la totalité du site !

## .GITIGNORE
Le fichier *.gitignore* à la racine de site permet que votre fichier *secret.php* ne soit jamais mis sur le git comme ca chacun ses codes.

## SRC/CONNEXION.PHP
Du coup lui c'#� �m�s�p�r�-�b�3�
�
�
