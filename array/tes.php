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
		$data['dedi'] = array('no' => 1, 'nama' => 'Dedi', 'status' => 'Kawin' );
		$data['edo'] = array('no' => 2, 'nama' => 'Edo', 'status' => 'Belum kawin' );
		$data['ica'] = array('no' => 3, 'nama' => 'Ica', 'status' => 'Belum Kawin' );
		$data['fatma'] = array('no' => 4, 'nama' => 'Fatma', 'status' => 'Kawin' );

		foreach ($data as $param => $row) {
			$status[$param]  = $row['status'];
		}
		array_multisort($status, SORT_DESC, $data);

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