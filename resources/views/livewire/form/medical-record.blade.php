<form wire:submit.prevent="create">
{{--    <x-form.input model="pasien" title="Nama Pasien" type="text"/>--}}

{{--    <x-form.input model="data.file_location" title="Lokasi File" type="text"/>--}}
    <x-form.summernote model="data.soap" title="SOAP" type="text"/>
    <x-form.summernote model="data.action" title="Aksi/Tindakan" type="text"/>
    <x-form.summernote model="data.medicine" title="Obat" type="text"/>
{{--    <x-form.input model="data.refer" title="Rujuk" type="number"/>--}}
{{--    <x-form.input model="data.file_addition" title="File Tambahan" type="text"/>--}}
    <x-form.select model="data.type" title="Jenis Kasus" :options="$optionType"
                   :selected="$data['type']" defer="true"/>
    <x-form.select model="data.refer" title="Rujuk Pasien" :options="$optionUnitService"
                   :selected="$data['refer']" defer="true"/>
    <input type="submit" value="Buat RM" class="btn btn-primary"/>
{{--    <x-form.summernote model="data.soap" title="SOAP" type="text"/>--}}

{{--<livewire:check/>--}}
</form>
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-12">--}}
{{--            <div class="card  border border-bottom-danger ">--}}
{{--                <div class="card-body row">--}}
{{--                    <div class="col-6">--}}
{{--                        <h5 class="card-title">SOAP</h5>--}}
{{--                        <p class="card-text">SOAP blabalablablabla.</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <h5 class="card-title">AKSI</h5>--}}
{{--                        <p class="card-text">Aksi blablablabla.</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <h5 class="card-title">Diagnosa</h5>--}}
{{--                        <p class="card-text">Diagnosa blablablabla.</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <h5 class="card-title">Obat</h5>--}}
{{--                        <p class="card-text">Obat kuat blablabla.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
