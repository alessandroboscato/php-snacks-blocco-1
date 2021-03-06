<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array che rappresentano delle partite di basket di una tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

  // snack 1.1
// $matches = [
//   ["Dolomiti Energia Trentino - UNAHOTELS Reggio Emilia | 81 - 87"],
//   ["Vanoli Basket Cremona - Umana Reyer Venezia | 66 -83"],
//   ["A|X Armani Exchange Milano - De'Longhi Treviso | 104 - 64"],
//   ["Germani Brescia - Virtus Segafredo Bologna | 80 - 81"],
//   ["Banco di Sardegna Sassari - Allianz Pallacanestro Trieste | 72 -74"],
//   ["Fortitudo Lavoropiù Bologna - Openjobmetis Varese | 83 - 88"],
//   ["Happy Casa Brindisi - Virtus Roma | 92 - 67"],
//   ["Acqua S.Bernardo Cantù - Carpegna Prosciutto Pesaro | 81 - 72"]
// ];

  // snack 1.2
$matches = [
  [
    "squadra di casa" => "Dolomiti Energia Trentino",
    "squadra ospite" => "UNAHOTELS Reggio Emilia",
    "punti squadra di casa" => 81,
    "punti squadra ospite" => 87
  ],
  [
    "squadra di casa" => "Vanoli Basket Cremona",
    "squadra ospite" => "Umana Reyer Venezia",
    "punti squadra di casa" => 66,
    "punti squadra ospite" => 83
  ],
  [
    "squadra di casa" => "A|X Armani Exchange Milano",
    "squadra ospite" => "De'Longhi Treviso",
    "punti squadra di casa" => 104,
    "punti squadra ospite" => 64
  ]
];

for ($i = 0; $i < count($matches); $i++) {
  echo($matches[$i]["squadra di casa"]." - ".$matches[$i]["squadra ospite"]." | ".$matches[$i]["punti squadra di casa"]." - ".$matches[$i]["punti squadra ospite"]. "<br>" );
}

 ?>
