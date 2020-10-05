<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array che rappresentano delle partite di basket di una tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60


PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

$matches = [
  ["Dolomiti Energia Trentino - UNAHOTELS Reggio Emilia | 81 - 87"],
  ["Vanoli Basket Cremona - Umana Reyer Venezia | 66 -83"],
  ["A|X Armani Exchange Milano - De'Longhi Treviso | 104 - 64"],
  ["Germani Brescia - Virtus Segafredo Bologna | 80 - 81"],
  ["Banco di Sardegna Sassari - Allianz Pallacanestro Trieste | 72 -74"],
  ["Fortitudo Lavoropiù Bologna - Openjobmetis Varese | 83 - 88"],
  ["Happy Casa Brindisi - Virtus Roma | 92 - 67"],
  ["Acqua S.Bernardo Cantù - Carpegna Prosciutto Pesaro | 81 - 72"]
];

var_dump($match);

 ?>
