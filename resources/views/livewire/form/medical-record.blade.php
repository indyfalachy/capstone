<form action="">
    <x-form.input model="data.user_id" title="NAMA USER" type="number"/>
    <x-form.input model="data.pasien_id" title="Nama Pasien" type="number"/>
    <x-form.input model="data.file_location" title="Lokasi File" type="text"/>
    <x-form.input model="data.soap" title="SOAP" type="text"/>
    <x-form.input model="data.action" title="Aksi/Tindakan" type="text"/>
    <x-form.input model="data.refer" title="Rujuk" type="number"/>
    <x-form.input model="data.file_addition" title="File Tambahan" type="text"/>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <livewire:check/>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </div>
    </div>
</form>
