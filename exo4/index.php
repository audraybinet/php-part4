<?php
$page = 'Exercice 4';
$firstNb = 24;
$secondNb = 666;
include '../header.php';
function fuckNb($firstNb , $secondNb){
  if ($firstNb == $secondNb)
  {
echo 'Les deux nombres sont identiques';
    }
else if ($firstNb > $secondNb)
{
echo 'Le premier nombre est plus grand';
}
else
{
echo 'Le premier nombre est plus petit';
}
}
?>
<p><?= fuckNb(24, 666); ?></p>
<?php include '../footer.php'; ?>
