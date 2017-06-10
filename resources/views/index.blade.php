<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
<table border="1">
	<tr>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Jenis Kelamin</th>
	</tr>
	
		@foreach($a as $b)
		<tr>
			<td><center>{{$b->nama}}</center></td>
			<td><center>{{$b->kelas}}</center></td>
			<td><center>{{$b->jurusan}}</center></td>
			<td><center>{{$b->jk}}</center></td></tr>
		@endforeach

</table>
</body>
</html>
