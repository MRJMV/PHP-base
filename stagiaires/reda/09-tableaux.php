<?php
$stagiairesWeb2025 = [
  "Nordine",
  "Omer",
  "Sola",
  "Massine",
  "Loukas",
  "Reda",
  "Soulaiman",
  "Agim",
  "Vahagn",
  "Daniel",
  "Samuel",
  "Jean-Michaël",
  "Saïd",
  "Géraldine",
  "Jeremy",
  "Mykyta",
];

// Pour compter les éléments d'un tableau, nous pouvons utiliser la fonction native count()
echo "<p>Il y a " . count($stagiairesWeb2025) . " élèves dans la classe.</p>";

// Pour afficher un élément du tableau, nous utilisons l'index de l'élément,
// ici par exemple les premiers élèves :

echo "<p>Les 3 premiers élèves sont : " . $stagiairesWeb2025[0] . ", " . $stagiairesWeb2025[1] . ",
 " . $stagiairesWeb2025[2] . "</p>";
