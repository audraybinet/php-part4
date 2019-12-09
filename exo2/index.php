<?php
$page = 'Exercice 2';
$caca= 'caca';
include '../header.php';
function firstFunction($caca)
{
return $caca;
}
?>
<p><?= firstFunction($caca); ?></p>
<?php include '../footer.php'; ?>
