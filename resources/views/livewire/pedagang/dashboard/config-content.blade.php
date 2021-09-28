<div>
    @if($query == 'dashoard')
        <livewire:pedagang.dasboard.shortcut> 
    @elseif($query == 'upload_loker')
        <livewire:pedagang.lowongan.upload-lowongan>
    @elseif($query == 'upload_loker')
        <livewire:pedagang.users.index>
    @endif
</div>
