<form wire:submit="create">
    <x-form.select model="queue.pasien_id" title="Nama pasien" :options="$optionPatient"
                   :selected="$queue['pasien_id']"/>
    <x-form.select model="queue.unit_service_id" title="Nama unit layanan" :options="$optionUnit"
                   :selected="$queue['unit_service_id']"/>
    <x-form.textarea model="data.main_complaint" title="Keluhan Utama" type="text"/>
    <div class="row">
        <x-form.textarea model="data.medical_history_now" title="Riwayat Penyakit Sekarang" type="text"/>
        <x-form.textarea model="data.medical_history_past" title="Riwayat Penyakit Dahhulu" type="text"/>
    </div>
    <div class="row">
        <x-form.textarea model="data.condition" title="Kondisi" type="text"/>
        <x-form.textarea model="data.awarness" title="Kesadaran" type="text"/>
    </div>
    <div class="row">
        <x-form.textarea model="data.gcs" title="GCS" type="text"/>
        <x-form.textarea model="data.sick_state" title="Keadaan Sakit" type="text"/>
    </div>
    <div class="row">
        <x-form.input model="data.nutritional_status" title="Keadaan Gizi" type="text"/>
        <x-form.input model="data.blood_pressure" title="Tekanan Darah" type="text"/>
    </div>
    <div class="row">
        <x-form.input model="data.pulse" title="Nadi" type="number"/>
        <x-form.input model="data.temperature" title="Suhu" type="number"/>
    </div>
    <div class="row">
        <x-form.input model="data.weight" title="Berat Badan" type="number"/>
        <x-form.input model="data.height" title="Tinggi Badan" type="number"/>
    </div>
    <x-form.textarea model="data.addition_note" title="Catatan Tambahan" type="text"/>
    <input class="btn btn-primary" type="submit" value="Kirim">
</form>
