<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
<title> exercice 1</title>

    </head>
    <body>
   <?php

echo '<h1>Exercice 1</h1>';
	
echo '<hr />' ; # Solution 1
echo 'PHP Version: ' .phpversion() . '<br />' ;
echo 'Operating System: ' . php_uname() . '<br />' ;
echo 'Browser language: ', $_SERVER["HTTP_ACCEPT_LANGUAGE"];     


echo '<h1>Exercice 2</h1>';
$phrase= "je m'appelle eva";
echo '1. ' . ucfirst($phrase) . '<br />';
echo '2. ' . ucwords($phrase) . '<br />';
echo '3. ' . str_replace(' ', '_', $phrase) . '<br />';
echo '4.1 La phrase contient ' . str_word_count($phrase) . ' mots.' . '<br />'; //Attention renvoie un résultat incohérent si la phrase contient des caractères spéciaux
echo '4.2 La phrase contient ' . strlen($phrase). ' caractères.'; 


echo '<h1>Exercice 3</h1>';

# Déclaration du tableau
$cars = [
  ['marque' => 'Audi', 'modele' => 'A1', 'type' => 'citadine'],
  ['marque' => 'Volkswagen', 'modele' => 'Passat', 'type' => 'berline'],
  ['marque' => 'Volkswagen', 'modele' => 'Golf', 'type' => 'compact'],
  ['marque' => 'Mazda', 'modele' => 'CX-5', 'type' => 'SUV']
];

# Création de tableau pour chaque clé (pour le tri)
foreach ($cars as $key => $row)
{
  $marque[$key]  = $row['marque'];
  $modele[$key] = $row['modele'];
  $type[$key] = $row['type'];
}

# Tri des données par marque puis par modele.
array_multisort($marque, SORT_ASC, $modele, SORT_ASC, $cars );

# Affichage des valeurs
foreach( $cars as $car )
{
  echo '<b>Marque</b> :' . $car['marque'] . '<br />';
  echo '<b>Modèle</b> :' . $car['modele'] . '<br />';
  echo '<b>Type</b> :' . $car['type'] . '<br />';
  echo '<hr />';

}
?>

    </body>


</html>


