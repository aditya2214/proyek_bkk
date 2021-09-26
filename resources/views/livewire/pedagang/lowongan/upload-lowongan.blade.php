<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><b>Upload Lowongan</b></h1>
        <button onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sync"></i> Refresh</button>
    </div>
    <hr>
    <div class="row">
        @if($config_form == 0)
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3><b>Upload Lowongan</b></h3>
                    <br>
                    <form wire:submit.prevent="posting_loker">
                        <div class="form-group">
                            <label for="">Basic</label>
                            <input required  type="text" wire:model="basic" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat</label>
                            <input required  type="text" wire:model="tempat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <input required  type="text" wire:model="pendidikan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Lokasi</label>
                            <input required  type="text" wire:model="lokasi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Batas Akhir</label>
                            <input required type="date" wire:model="batas_akhir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Pekerjaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="desk"></textarea>         
                         </div>
                        <div class="form-group">
                            <label for="">Spesifikasi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="spesifikasi"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Posting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3><b>Upload Lowongan</b></h3>
                    <br>
                    <form wire:submit.prevent="update_loker">
                        <input type="hidden" wire:model="id_loker">
                        <div class="form-group">
                            <label for="">Basic</label>
                            <input required  type="text" wire:model="basic" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat</label>
                            <input required  type="text" wire:model="tempat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <input required  type="text" wire:model="pendidikan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Lokasi</label>
                            <input required  type="text" wire:model="lokasi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Batas Akhir</label>
                            <input required type="date" wire:model="batas_akhir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Pekerjaan</label>
                            <textarea  class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="desk"></textarea>         
                         </div>
                        <div class="form-group">
                            <label for="">Spesifikasi</label>
                            <textarea  class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="spesifikasi"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <h3><b>Lowongan</b></h3>
                <br>
                @foreach($lokers as $loker)
                    <div class="card weekly-product-card">
                        <div class="card-body d-flex align-items-center">
                        <div class="product-thumbnail-side"><a class="product-thumbnail d-block" href="{{ url ('daftar_peserta/'.$loker->id) }}"><img src="suha/dist/img/download.png" alt=""></a></div>
                        <div class="product-description"><a class="product-title d-block" href="{{ url ('daftar_peserta/'.$loker->id) }}" >{{ $loker->basic}}</a>
                            <p class="sale-price"><i class="lni lni-home"></i></i>{{$loker->tempat}}</p>
                            <div class="sale-price"><i class="lni lni-graduation"></i>{{$loker->pendidikan}}</div>
                            <div class="sale-price"><i class="lni lni-map"></i>{{$loker->lokasi}}</div>
                            @if($loker->conf == 1)
                            <a href="" class="btn btn-success">Aktif</a>
                            @else
                            <a href="" class="btn btn-danger">Aktif</a>
                            @endif
                            <a wire:click="edit_loker({{$loker->id}})" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
