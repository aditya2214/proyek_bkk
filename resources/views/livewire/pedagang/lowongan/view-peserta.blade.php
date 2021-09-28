<div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><b>Data Peserta Test</b></h1>
    <button wire:click="back" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-arrow-left"></i> Kembali</button>
</div>
<hr>
<div class="">
    <div class="card">
        <div class="card-body">
            <div class="float-left">
                <p>Lowongan Kerja</p>
                <p><b>
                    @foreach($lokers as $dp)
                        {{$dp->basic}}
                    @endforeach
                </b></p> 
            </div>
            <div class="float-right">
                <button class="btn btn-secondary">Next Level <i class="fas fa-arrow-right"></i></button>
            </div>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
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
                        <th>
                            <input type="checkbox" name="" id="">
                        </th>
                        <td>{{$key+1}}</td>
                        <td>{{$daftar_p->email}}</td>
                        <td>{{$daftar_p->nama_lengkap}}</td>
                        <td>{{$daftar_p->tanggal_lahir}}</td>
                        <td>{{$daftar_p->pendidikan_terakhir}}</td>
                        <td>{{$daftar_p->berat_badan}} Cm</td>
                        <td>{{$daftar_p->tinggi_badan}} Cm</td>
                        <td>{{$daftar_p->alamat}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success">Lolos</a>
                                <a class="btn btn-danger">Tidak</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>