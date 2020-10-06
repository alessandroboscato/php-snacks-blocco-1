<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
//snack 2
$name = $_GET["name"];
// controlla che name sia più lungo di 3 caratteri,
$mail = $_GET["mail"];
// controlla che mail contenga un punto e una chiocciola
$age = $_GET["age"];
//controlla che age sia un numero
$user_data = "";

//SAMUELE
// if (strlen($name) > 3 && strpos($mail, ".") !== false && strpos($mail, "@") !== false && is_numeric($age)) {
//   echo "Accesso riuscito";
// } else {
// echo "Accesso negato";
// }
//SAMUELE
//controllo che i get non siano vuoti
if (empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
  echo "Guarda che devi inserire tutti i dati";
  die;
} else {
  //controlla ogni singolo get
  if (strlen($name) > 3 && !is_nan($name)) {
   echo($name);
   $user_data .= $name. " ";
  }

  if (strpos($mail, ".") !== false && strpos($mail, "@") !== false) {
   echo($mail);
   $user_data .= $mail. " ";
  }

  if (is_numeric($age) && $age > 0) {
   echo($age);
   $user_data .= $age. " ";
  }
}
?>

<h1>Dati inseriti dall'utente: <?php echo $user_data?></h1>
