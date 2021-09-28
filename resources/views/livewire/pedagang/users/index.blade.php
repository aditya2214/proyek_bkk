<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><b>Users</b></h1>
        <button onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sync"></i> Refresh</button>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Password</th>
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
                        <td>{{$user->password}}</td>
                        <td>
                            @if($user->role > 0)
                            <span class="badge badge-success">Akun Admin</span>
                            @else
                            <button wire:click="set_admin({{$user->id}})" class="btn btn-danger">Jadikan Admin</button>
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
