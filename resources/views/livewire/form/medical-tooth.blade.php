<form action="">
    <x-form.input model="data.main_complaint" title="Keluhan Utama" type="text"/>
    <x-form.input model="data.medical_history_now" title="Riwayat Penyakit Sekarang" type="text"/>
    <x-form.input model="data.medical_history_past" title="Riwayat Penyakit Dahhulu" type="text"/>
    <x-form.input model="data.condition" title="Kondisi" type="text"/>
    <x-form.input model="data.awarness" title="Kesadaran" type="text"/>
    <x-form.input model="data.gcs" title="GCS" type="text"/>
    <x-form.input model="data.sick_state" title="Keadaan Sakit" type="text"/>
    <x-form.input model="data.nutritional_status" title="Keadaan Gizi" type="text"/>
    <x-form.input model="data.blood_pressure" title="Tekanan Darah" type="text"/>
    <x-form.input model="data.pulse" title="Nadi" type="number"/>
    <x-form.input model="data.temperature" title="Suhu" type="double"/>
    <x-form.input model="data.weight" title="Berat Badan" type="number"/>
    <x-form.input model="data.height" title="Tinggi Badan" type="number"/>
    <x-form.input model="data.addition_note" title="Catatan Tambahan" type="text"/>

    <div class="list-group">
        <a href="#" class="list-group-item active">Soap</a>
        <a href="#" class="list-group-item">Diagnosis</a>
        <a href="#" class="list-group-item">Aksi</a>
        <a href="#" class="list-group-item">Obat</a>
    </div>

</form>
