<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<h2>
Input Data
</h2>


	<?php foreach ($content->result() as $key): ?>
	<form action="<?php echo base_url().'crud/action_update/'.$key->id; ?>" method="post">
	<input type="text" name="nama" placeholder="masukkan nama" value="<?php echo $key->nama ?>"/>
	<input type="text" name="status" placeholder="masukkan status"  value="<?php echo $key->status ?>"/>
	<input type="text" name="jurusan" placeholder="masukkan jurusan"  value="<?php echo $key->jurusan ?>"/>
	<input type="submit" value="save">
	<?php endforeach;?>
	</form>
</body>
</html>
