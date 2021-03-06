@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kecamatan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kecamatan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="from-group">
                                <label for="">Nama Kota</label>
                                <select name="id_kota" id="" class="form-control" name="id_kelurahan[]">
                                    @foreach ($kota as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kota }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="from-group">
                                <label for="">Nama Kecamatan</label>
                                <input type="text" name="nama_kecamatan"
                                    class="form-control @error('nama_kecamatan') is-invalid @enderror"
                                    value="{{ old('nama_kecamatan') }}">
                                @error('nama_kecamatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Simpan </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
