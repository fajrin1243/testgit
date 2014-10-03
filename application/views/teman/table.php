<!DOCTYPE HTML>
<html>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>No. Telepon</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
			<?php
			$no = 1;
			foreach($teman->result() as $d)
			{
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $d->nama ?></td>
					<td><?php echo $d->tempat_lahir.", ".$d->tanggal_lahir ?></td>
					<td><?php echo $d->no_telepon ?></td>
					<td>Ini Action Buat Nanti</td>
				</tr>
				<?php
			}
			?>
			
		</tbody>
	</table>
</body>
</html>