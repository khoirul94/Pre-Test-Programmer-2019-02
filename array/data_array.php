<!doctype html>
<html>
<head>
	<title>Membuat tabel Array</title>
</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Status</th>
			<th>keterangan</th>
		</tr>
		<?php
		$data=array(
			'dedi'=>array('1','Dedi','kawin'),
			'edo'=>array('2','Edo','Belum Kawin'),
			'ica'=>array('3','ica','Belum Kawin'),
			'fatma'=>array('4','Fatma','kawin')
		);
		echo "<tr>";
		foreach($data['dedi'] as $nama) {
			echo "<td>$nama</td>";
		}
		echo "</tr>";
		echo "<tr>";
		foreach($data['edo'] as $nama) {
			echo "<td>$nama</td>";
		}
		echo "</tr>";
		echo "<tr>";
		foreach($data['ica'] as $nama) {
			echo "<td>$nama</td>";
		}
		echo "</tr>";
		echo "<tr>";
		foreach($data['fatma'] as $nama) {
			echo "<td>$nama</td>";
		}
		echo "</tr>";
		?>
	</table>
</body>
</html>