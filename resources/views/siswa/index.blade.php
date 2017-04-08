<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template');
@section('content')
<!-- Your custom  HTML goes here -->
<table class='table table-striped table-bordered'>
  <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
       </tr>
  </thead>
  <tbody>
    @foreach($result as $row)
      <tr>
        <td>{{$row->nama_siswa}}</td>
        <td>{{$row->tempat_lahir_siswa}}</td>
        <td>{{$row->tanggal_lahir_siswa}}</td>
        
       </tr>
    @endforeach
  </tbody>
</table>

<!-- ADD A PAGINATION -->
<p>{!! urldecode(str_replace("/?","?",$result->appends(Request::all())->render())) !!}</p>
@endsection
