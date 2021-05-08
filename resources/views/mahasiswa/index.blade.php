@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NRP</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Achmad Akbar Megantara</td>
                        <td>05111950010039</td>
                        <td>achmegantara@gmail.com</td>
                        <td>Teknik Informatika</td>
                        <td>
                        <a href="" class="badge bg-success">edit</a>
                        <a href="" class="badge bg-danger">delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection
