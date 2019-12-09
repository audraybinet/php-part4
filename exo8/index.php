<?php
$page = 'Exercice 8';
$nbOne = 94;
$nbTwo = 450;
$nbThree = 122;
include '../header.php';
function add($nbOne , $nbTwo , $nbThree)
{
  echo $nbOne + $nbTwo + $nbThree;
}
?>
<p><?= add($nbOne , $nbTwo , $nbThree); ?></p>
<?php include '../footer.php'; ?>
