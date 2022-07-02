<form action="">
    <x-form.input model="data.user_id" title="NAMA USER" type="number"/>
    <x-form.input model="data.email" title="NAMA USER" type="text"/>
    <x-form.input model="data.address" title="Alamat" type="text"/>
    <x-form.input model="data.unit_service_id" title="Unit Layanan" type="text"/>
    <x-form.input model="data.birth_place" title="Tempat Lahir" type="text"/>
    <x-form.input model="data.birth_date" title="Tanggal Lahir" type="number"/>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <livewire:check/>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </div>
    </div>
</form>
