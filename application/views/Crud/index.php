<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<a href="<?php echo base_url() . 'crud/add' ?>">Tambah </a>
	<table border="2">
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>Status</td>
		<td>Jurusan</td>
		<td>Edit</td>
		<td>delete</td>
	</tr>
	<?php foreach ($content->result() as $key): ?>
		<tr>
		<td><?php echo $key->id ?></td>
		<td><?php echo $key->nama ?></td>
		<td><?php echo $key->status ?></td>
		<td><?php echo $key->jurusan ?></td>
		<td><a href="<?php echo base_url().'crud/update/'.$key->id;?>">edit</a></td>
		<td><a href="<?php echo base_url().'crud/delete/'.$key->id;?>">hapus</a></td>
		</tr>
		<?php endforeach?>

	</table>
</body>
</html>
