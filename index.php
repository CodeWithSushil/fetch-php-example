<?php
use Fetch\Interfaces\Response as ResponseInterface;

require_once "vendor/autoload.php";

// Simple GET request
$response = fetch('https://jsonplaceholder.typicode.com/users');
$users = $response->json();
?>
<table style="width:100%;" border="1" cellpadding="10"  cellspacing="0" >
<tr>
<th>Sri No</th>
<th>Name</th>
</tr>
<?php
$id = 1;
foreach($users as $key => $user){
?>
<tr>
<td><?= $id++ ?></td>
<td><?= $user['name'] ?></td>
</tr>
<?php } ?>
</table>

