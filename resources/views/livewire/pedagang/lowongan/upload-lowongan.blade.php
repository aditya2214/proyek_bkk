<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><b>Upload Lowongan</b></h1>
        <button onClick="window.location.reload();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sync"></i> Refresh</button>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="pull-center">
                        <i class="fab fa-confluence fa-5x"></i>
                    </div>
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
                            <button class="btn btn-success">Posting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
