<?php
$page = 'Exercice 7';
$gender = 'femme';
$age = 49;
$message = '';
include '../header.php';
function person($gender, $age){
  if($gender !='homme' || $age >= 18)
  {
    $message = "Vous êtes une femme et vous êtes majeur";
  }
  else if($gender != 'homme' || $age < 18){
    $message = "Vous êtes une femme et vous êtes mineur";
  }
  else if($age >=18){
    $message = "Vous êtes un homme et vous êtes majeur";
  }
  else {
    $message = "Vous êtes un homme et vous êtes mineur";
  }
  return $message;
}
?>
<p><?= person($gender, $age); ?></p>
<?php include '../footer.php'; ?>
