Instruction :

Une liste de dossiers est fournie comportant les informations d'un dossier par ligne.
Chaque ligne est composée du nom du dossier ainsi que du nom du dossier parent.
Un dossier peut ne pas avoir de parent, il s'agit donc d'un dossier racine.
Le but est d'afficher le chemin d'accès pour un dossier donné.
*
EXEMPLE
*
Entrées
*
Liste des dossiers:
Dir1;
Dir2;Dir1
Dir3;Dir1
Dir4;Dir2
*
Dossier à trouver:
Dir4
*
Sortie attendue
/Dir1/Dir2/Dir4
*/

$dirs = "Dir1;
Dir4;Dir2
Dir8;Dir5
Dir14;Dir13
Dir5;
Dir2;Dir1
Dir6;Dir5
Dir3;Dir1
Dir9;Dir6
Dir12;Dir7
Dir13;Dir12
Dir7;Dir5
Dir10;Dir9
Dir11;Dir7";