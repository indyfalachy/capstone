<form wire:submit="create">
    <x-form.select model="queue.pasien_id" title="Nama pasien" :options="$optionPatient"
                   :selected="$queue['pasien_id']"/>
    <x-form.select model="queue.unit_service_id" title="Nama unit layanan" :options="$optionUnit"
                   :selected="$queue['unit_service_id']"/>
    <x-form.textarea model="data.addition_note" title="Catatan Tambahan" type="text"/>
    <input class="btn btn-primary" type="submit" value="Kirim">
</form>
