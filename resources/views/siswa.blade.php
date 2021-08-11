@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h3>Data Siswa</h3>
        <table class="table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Tanggal lahir</th>
            </tr>
            <tr>
                <td>Andi Saputra</td>
                <td>101</td>
                <td>2003-02-22</td>
            </tr>
            <tr>
                <td>Rizal Bagus P</td>
                <td>102</td>
                <td>1998-08-01</td>
            </tr>
        </table>
    </div>    
@endsection