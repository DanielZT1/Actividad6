<?php
require_once('config.php');

$sql = "SELECT * FROM arduino";
$result = $conn->query($sql);
$arr_users = [];
if ($result->num_rows > 0) {
$arr_users = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv='refresh' content='1'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Datatable</title>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
</head>
<body>
<table id="userTable">
<thead>
<th>ID</th>
<th>Datos</th>
</thead>
<tbody>
<?php if(!empty($arr_users)) { ?>
<?php foreach($arr_users as $user) { ?>
<tr>
<td><?php echo $user['id']; ?></td>
<td><?php echo $user['datas']; ?></td>
</tr>
<?php } ?>
<?php } ?>
</tbody>
</table>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
$('#userTable').DataTable();
});
</script>
</body>
</html>
