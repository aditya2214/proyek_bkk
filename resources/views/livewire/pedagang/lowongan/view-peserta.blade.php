@extends('home')

@section('isi')
<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><b>Data Peserta Test</b></h1>
        <button onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sync"></i> Refresh</button>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <p>Lowongan Kerja</p>
            <p><b>
                @foreach($lokers as $dp)
                    {{$dp->basic}}
                @endforeach
            </b></p> 
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Nama Pelamar</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftar_peserta as $key => $daftar_p)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$daftar_p->email}}</td>
                        <td>{{$daftar_p->nama_lengkap}}</td>
                        <td>{{$daftar_p->tanggal_lahir}}</td>
                        <td>{{$daftar_p->pendidikan_terakhir}}</td>
                        <td>{{$daftar_p->berat_badan}}</td>
                        <td>{{$daftar_p->tinggi_badan}}</td>
                        <td>{{$daftar_p->alamat}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
