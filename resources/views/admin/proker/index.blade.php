@extends('app')

@section('htmlheader_title')
Daftar Proker
@endsection

@section('contentheader_title')
Manajemen Proker
@endsection

@section('dashboard_sidebar')
active
@endsection

@section('main-content')
<br>
<table class="table table-striped">
	<thead>
		<tr>
			<th style="width:20%">Nama Proker</th>
			<th style="width:10%">Kementerian</th>
			<th style="width:10%">PIC</th>
			<th style="width:10%">No HP</th>
			<th style="width:10%">Tanggal</th>
			<th style="width:10%">Status</th>
			<th style="">Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="font-size: 12pt">OSPEK PEMABA AMERTA</td>
			<td>PSDM</td>
			<td>Gumilang</td>
			<td>085722134213</td>
			<td>Agustus 2016</td>
			<td><span class="bg-danger">waiting</span></td>
			<!-- <td><span class="bg-primary">berlansung</span></td> -->
			<td>
				<a href="" class="btn btn-danger">
					<i class="fa fa-trash"></i> Hapus
				</a>
				<a href="" class="btn btn-primary">
					<i class="fa fa-pencil"></i> Edit
				</a>
			</td>
		</tr>
		<tr>
			<td style="font-size: 12pt"> MEDIA VISIT</td>
			<td>KOMINFO</td>
			<td>Arifah</td>
			<td>085732401129</td>
			<td>Juni 2016</td>
			<td><span class="bg-danger">waiting</span></td>
			<td>
				<a href="" class="btn btn-danger">
					<i class="fa fa-trash"></i> Hapus
				</a>
				<a href="" class="btn btn-primary">
					<i class="fa fa-pencil"></i> Edit
				</a>
			</td>
		</tr>
        <!-- <tr>
          <td colspan="4"><center>no data</center></td>
      </tr> -->
  </tbody>
</table>

<nav>
	<ul class="pagination">
		<li>
			<a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li>
			<a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav>

@endsection
