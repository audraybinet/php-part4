<?php
$page = 'Exercice 6';
$firstName = 'Binet';
$surName = 'Audrey';
$age = 37;
include '../header.php';
function me($firstName , $surName, $age)
{
echo "Bonjour, $firstName  $surName, tu as $age ans. ";
}
?>
<p><?= me($firstName , $surName, $age);  ?></p>
<?php include '../footer.php'; ?>
