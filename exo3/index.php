<?php
$page = 'Exercice 3';
$first = 'Kammthar';
$second = 'ich liebe dich';
include '../header.php';
function firstFunction($first, $second)
{
  //on oubie pas le point sinon ça marche pas pour la concaténation
return $first . $second;
}
?>
<p><?= firstFunction($first, $second); ?></p>
<?php include '../footer.php'; ?>
