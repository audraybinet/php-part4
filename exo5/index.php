<?php
$page = 'Exercice 1';
$nb = 56;
$message = 'c\'est mon camion';
include '../header.php';
function nothingElseMatter($nb , $message)
{
  return $nb . $message;
}
?>
<p><?= nothingElseMatter($nb , $message);  ?></p>
<?php include '../footer.php'; ?>
