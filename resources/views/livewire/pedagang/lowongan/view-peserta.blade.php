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
                @foreach($data_peserta as $dp)
                    {{$dp->basic}}
                @endforeach
            </b></p>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Nama Calon</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
