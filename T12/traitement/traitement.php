
<?php

// Importer les données des projets
require_once __DIR__ . "/../traitement/projets.php";

// Créer une collection pour les projets visibles
$projetsAffiches = [];

// Parcourir tous les projets
foreach ($projets as $projet) {
    // Vérifier si le projet est visible
    if ($projet["visible"] === true) {

        // Ajouter le projet à la collection
        $projetsAffiches[] = $projet;
    }
}
// Compter les projets visibles
$totalProjets = count($projetsAffiches);
?>
