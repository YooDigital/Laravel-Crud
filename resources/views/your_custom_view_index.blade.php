<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template');
@section('content')
<!-- Your custom  HTML goes here -->
<table class='table table-striped table-bordered'>
  <thead>
      <tr>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Action</th>
       </tr>
  </thead>
  <tbody>
    @foreach($result as $row)
      <tr>
        <td>{{$nama_siswa->nama_siswa}}</td>
        <td>{{$row->tempat_lahir_siswa}}</td>
        <td>{{$row->tanggal_lahir_siswa}}</td>
        
       </tr>
    @endforeach
  </tbody>
</table>

<!-- ADD A PAGINATION -->
@endsection
