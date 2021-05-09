@extends('layout/main')

@section('title', 'Tambah data Mahasiswa')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-2">Tambah data mahasiswa</h1>

                <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror
                </div>
                    <div class="form-group">
                    <label for="nrp">nrp</label>
                    <input type="text" name="nrp" id="nrp" class="form-control @error('nrp') is-invalid @enderror" placeholder="Masukkan nrp" value="{{ old('nrp') }}">
                        @error('nrp')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror
                </div>
                    <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukkan jurusan" value="{{ old('jurusan') }}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah data</button>
                </form>

            </div>
        </div>
    </div>
@endsection
