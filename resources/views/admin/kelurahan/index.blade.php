@extends('layouts.master')
@push('kelurahan')
active
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('succes'))
                        <div class="alert alert-success" role="alert">
                            {{ session('succes') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Kelurahan
                                <a href="{{route('kelurahan.create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr class="bg-info">
                                                        <th>No</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Nama kelurahan</th>
                                                        <th>
                                                            <center>
                                                                Action
                                                            </center>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($kelurahan as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->Kecamatan->nama_kecamatan}}</th>
                                                        <th>{{$item->nama_kelurahan}}</th>
                                                        <td> 
                                                          <form action="{{route('kelurahan.destroy', $item->id)}}" method="POST">
                                                                @csrf @method('delete')
                                                                <a href="{{route('kelurahan.edit', $item->id)}}" class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></a></i>
                                                            <button type="submit"  class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-trash-alt">
                                                          </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('master')
<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    });
</script>
@endpush