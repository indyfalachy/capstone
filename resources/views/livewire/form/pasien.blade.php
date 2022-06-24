<form wire:submit.prevent="{{$action}}">
    <x-form.input model="data.name" title="Nama" type="text"/>
    <x-form.input model="data.nik" title="NIK" type="number"/>
    <x-form.textarea model="data.address" title="Alamat" type="text"/>
    <x-form.input model="data.birth_place" title="Tempat Lahir" type="text"/>
    <x-form.input model="data.birth_date" title="Tanggal Lahir" type="date"/>
    <x-form.input model="data.village" title="Desa" type="text"/>
    <x-form.input model="data.district" title="kecamatan" type="text"/>
    <x-form.input model="data.gender" title="Jenis Kelamin" type="text"/>
    <x-form.input model="data.religion" title="Agama" type="text"/>
    <x-form.input model="data.job" title="Pekerjaan" type="text"/>
    <x-form.input model="data.no_bpjs" title="No BPJS" type="text"/>
    <x-form.input model="data.allergy" title="Alergi" type="text"/>
    <input class="btn btn-primary" type="submit" value="Tambah pasien">
</form>
