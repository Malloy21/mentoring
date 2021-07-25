@extends('layout.app')

@section('content')
<div class=container>
<h2>Laporan</h2>
<div class="card">
    <div class="card-body">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_mente as $p)
            <tr>
                <td>{{$p->nama}}</td>
                <td></td>
                <td></td>
                <td></td>
                
                
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

@endsection
@section('script')