<?php
require '../vendor/autoload.php';

$client = new Github\Client();
$repositories = $client->api('user')->repositories('yandod');
?>
<ul>
<?php foreach ($repositories as $row): ?>
<li><?php echo $row['name']; ?> (<?php echo $row['watchers'];?>) </li>
<?php endforeach; ?>
</ul>
