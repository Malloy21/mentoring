@extends('layouts.app')

@section('content')
<div class=container>
<h2>Laporan</h2>
<div class="card">
    <div class="card-body">
    <table id="example" class="table  table-hover table-sm" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Absensi</th>
                <th>Tilawah</th>
                <th>Ujian</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($data_mente as $p)
        
            <tr>
                <td>{{$p->nama}}</td>
                <td>{{$p->nim}}</td>
                <td>{{$p->prodi}}</td>
                <td>{{$p->tahun}}</td>
                <td>78%</td>
                <td>60</td>
                <td>70</td>
                
                
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

@endsection
@section('script')