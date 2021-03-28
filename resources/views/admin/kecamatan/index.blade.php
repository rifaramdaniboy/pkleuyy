@extends('layouts.master')
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
                            <div class="card-header">Data Kecamatan
                                <a href="{{ route('kecamatan.create') }}" class="float-right btn btn-primary">Tambah
                                    Data</a>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="table" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr class="bg-info">
                                                        <th>No</th>
                                                        <th>Nama Kota</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Action</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($kecamatan as $item)
                                                        <tr>
                                                            <th>{{ $no++ }}</th>
                                                            <th>{{ $item->kota->nama_kota }}</th>
                                                            <th>{{ $item->nama_kecamatan }}</th>
                                                            <td>
                                                                <form action="{{ route('kecamatan.destroy', $item->id) }}"
                                                                    method="POST">
                                                                    @csrf @method('delete')
                                                                    <a href="{{ route('kecamatan.edit', $item->id) }}"
                                                                        class="btn btn-success">Edit</a>
                                                                    <button type="submit" class="btn btn-danger"
                                                                        onclick="return confirm('apakah anda yakin ?')">Delete</button>
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
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

    </script>
@endpush
