<form wire:submit.prevent="{{$action}}">
    <div class="row">
        <x-form.input model="data.name" title="Nama" type="text"/>
        <x-form.input model="data.nik" title="NIK" type="number"/>
    </div>
    <div class="row">
        <x-form.select model="data.gender" title="Jenis Kelamin" :selected="$data['gender']" :options="$optionGender"/>
        <x-form.select model="data.religion" title="Agama" :selected="$data['religion']" :options="$optionReligion"/>
    </div>
    <div class="row">
        <x-form.input model="data.village" title="Desa" type="text"/>
        <x-form.input model="data.district" title="Kecamatan" type="text"/>
    </div>
    <x-form.textarea model="data.address" title="Alamat" type="text"/>
    <div class="row">
        <x-form.input model="data.birth_place" title="Tempat Lahir" type="text"/>
        <x-form.input model="data.birth_date" title="Tanggal Lahir" type="date"/>
    </div>
    <div class="row">
        <x-form.select model="data.bpjs_status" title="Status BPJS" :selected="$data['bpjs_status']"
                       :options="$optionBpjs"/>
        <x-form.input model="data.no_bpjs" title="No BPJS" type="text"/>
    </div>
    <x-form.input model="data.job" title="Pekerjaan" type="text"/>
    <x-form.input model="data.allergy" title="Alergi" type="text"/>
    <input class="btn btn-primary" type="submit" value="Tambah pasien">
</form>
