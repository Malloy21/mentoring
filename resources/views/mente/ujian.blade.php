@extends('layouts.app')

@section('content')
<div class=container>
    <h2>Nilai Ujian</h2>
<div class="card">
    <div class="card-body">
    Pertemuan <input type="date" name="nama" required="required"> <br/>
<table  class="table" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Nilai</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($data_mente as $p)
            <tr>
                <td>{{$p->nama}}</td>
                <td>{{$p->nim}}</td>
                <td>
                <input type="text"> <br/>
                </td>
                
            </tr>

            @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
@endsection
@section('script')