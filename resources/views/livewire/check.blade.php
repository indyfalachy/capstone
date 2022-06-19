<div>
    <form action="">
{{--        <x-form.input model="data.file_location" title="Lokasi File" type="text"/>--}}
        <div class="row">
            <div class="col-sm-6">
                <x-form.summernote model="data.soap" title="SOAP" type="text"/>
            </div>
            <div class="col-sm-6">

                <x-form.summernote model="data.action" title="Aksi/Tindakan" type="text"/>
            </div>
        </div>
        <x-form.input model="data.refer" title="Rujuk" type="number"/>
        <x-form.input model="data.file_addition" title="File Tambahan" type="file"/>


    </form>
</div>
