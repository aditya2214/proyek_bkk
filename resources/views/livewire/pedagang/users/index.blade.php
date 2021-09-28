<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><b>Users</b></h1>
        <button onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sync"></i> Refresh</button>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <table class="table" style="font-size:10px;">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>TTL</th>
                        <th>Jenis-Kelamin</th>
                        <th>Tinggi-Badan</th>
                        <th>Berat-Badan</th>
                        <th>Alamat</th>
                        <th>Pendidikan</th>
                        <th>Alumni</th>
                        <th>Bahasa</th>
                        <th>Skill</th>
                        <th>Pengalaman</th>
                        <th>Media Sosial</th>
                        <th>Hobi</th>
                        <th>Role</th>
                        <th>@</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->foto}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->no_hp}}</td>
                        <td>{{$user->tanggal_lahir }}</td>
                        <td>{{$user->jenis_kelamin }}</td>
                        <td>{{$user->tinggi_badan}}</td>
                        <td>{{$user->berat_badan }}</td>
                        <td>{{$user->alamat }}</td>
                        <th>{{$user->pendidikan_terakhir}}</th>
                        <td>{{$user->alumni }}</td>
                        <td>{{$user->bahasa }}</td>
                        <td>{{$user->keahlian }}</td>
                        <td>{{$user->pengalaman }}</td>
                        <td>{{$user->media_sosial }}</td>
                        <td>{{$user->hobi }}</td>
                        <td>
                            @if($user->role > 0)
                            <span class=" btn badge badge-success">Akun Admin</span>
                            @else
                            <span wire:click="set_admin({{$user->id}})" class="btn badge badge-primary">Jadikan Admin</span>
                            @endif
                        </td>

                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
