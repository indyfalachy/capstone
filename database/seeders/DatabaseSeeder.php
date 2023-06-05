<?php

namespace Database\Seeders;

use App\Models\Disease;
use App\Models\Patient;
use App\Models\Role;
use App\Models\Symptom;
use App\Models\SymptomOfDisease;
use App\Models\UnitService;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UnitService::create(['title' => 'Poli Umum']);
        UnitService::create(['title' => 'Poli Gigi']);
        UnitService::create(['title' => 'Poli KIA dan KB']);
        UnitService::create(['title' => 'Poli Gizi']);
        UnitService::create(['title' => 'Poli Imunisasi']);
        UnitService::create(['title' => 'Poli TB dan HIV']);
        UnitService::create(['title' => 'Laboratorium']);

        Role::create(['title' => 'Resepsionis']);
        Role::create(['title' => 'Dokter']);

        User::create([
            'name' => 'resepsionis',
            'email' => 'resepsionis@resepsionis',
            'password' => bcrypt('resepsionis'),
            'role' => 1,
        ]);
        User::create([
            'name' => 'umum',
            'email' => 'umum@umum',
            'password' => bcrypt('umum'),
            'role' => 2,
            'unit_service_id' => 1
        ]);
        User::create([
            'name' => 'gigi',
            'email' => 'gigi@gigi',
            'password' => bcrypt('gigi'),
            'role' => 2,
            'unit_service_id' => 2
        ]);

        User::create([
            'name' => 'kia',
            'email' => 'kia@kia',
            'password' => bcrypt('kia'),
            'role' => 2,
            'unit_service_id' => 3
        ]);

        User::create([
            'name' => 'gizi',
            'email' => 'gizi@gizi',
            'password' => bcrypt('gizi'),
            'role' => 2,
            'unit_service_id' => 4
        ]);

        User::create([
            'name' => 'imunisasi',
            'email' => 'imunisasi@imunisasi',
            'password' => bcrypt('imunisasi'),
            'role' => 2,
            'unit_service_id' => 5
        ]);

        User::create([
            'name' => 'tb',
            'email' => 'tb@tb',
            'password' => bcrypt('tb'),
            'role' => 2,
            'unit_service_id' => 6
        ]);
        User::create([
            'name' => 'labo',
            'email' => 'labo@labo',
            'password' => bcrypt('labo'),
            'role' => 2,
            'unit_service_id' => 7
        ]);

        Patient::create([
            'name'=>"Yoski Tanjung",
            'nik'=>"3575091707000001",
            'address'=>'Kencong timur',
            'birth_place'=>'Jember',
            'birth_date'=>'2000-07-17',
            'village'=>'cakru',
            'district'=>'kencong',
            'gender'=>'Laki-laki',
            'religion'=>'islam',
            'job'=>'Mahasiswa',
            'bpjs_status'=>1,
            'no_bpjs'=>null,
            'allergy'=>''
        ]);

        Patient::create([
            'name'=>"Indy falachy",
            'nik'=>"3575091707000002",
            'address'=>'Kencong barat',
            'birth_place'=>'Jember',
            'birth_date'=>'2000-07-17',
            'village'=>'Sumber gading',
            'district'=>'Sumber wringin',
            'gender'=>'Laki-laki',
            'religion'=>'islam',
            'job'=>'Mahasiswa',
            'bpjs_status'=>1,
            'no_bpjs'=>null,
            'allergy'=>''
        ]);

        Disease::create([
            'id'=>'P001',
            'title' => 'Ispa'
        ]);
        Disease::create([
            'id'=>'P002',
            'title' => 'Dermatitis Alergi'
        ]);
        Disease::create([
            'id'=>'P003',
            'title' => 'Febris'
        ]);
        Disease::create([
            'id'=>'P004',
            'title' => 'Diare'
        ]);
        Disease::create([
            'id'=>'P005',
            'title' => 'Common Cold'
        ]);


        Symptom::create([
            'id' => 'G001',
            'title' => 'Batuk-pilek',
            'weight' => 0.6
        ]);
        Symptom::create([
            'id' => 'G002',
            'title' => 'Demam',
            'weight' => 0.8
        ]);
        Symptom::create([
            'id' => 'G003',
            'title' => 'Lemas',
            'weight' => 0.8
        ]);
        Symptom::create([
            'id' => 'G004',
            'title' => 'Tidak nafsu makan',
            'weight' => 0.6
        ]);
        Symptom::create([
            'id' => 'G005',
            'title' => 'Gatel',
            'weight' => 0.4
        ]);
        Symptom::create([
            'id' => 'G006',
            'title' => 'Ruam merah',
            'weight' => 0.6
        ]);
        Symptom::create([
            'id' => 'G007',
            'title' => 'Sesak nafas (Alergi saluran nafas)',
            'weight' => 1
        ]);
        Symptom::create([
            'id' => 'G008',
            'title' => 'Biduran',
            'weight' => 0.6
        ]);
        Symptom::create([
            'id' => 'G009',
            'title' => 'Pusing',
            'weight' => 0.6
        ]);
        Symptom::create([
            'id' => 'G010',
            'title' => 'BAB Cair',
            'weight' => 0.8
        ]);
        Symptom::create([
            'id' => 'G011',
            'title' => 'BAB 3 kali dalam sehari',
            'weight' => 0.8
        ]);
        Symptom::create([
            'id' => 'G012',
            'title' => 'Feses lembek atau cair',
            'weight' => 0.6
        ]);
        Symptom::create([
            'id' => 'G013',
            'title' => 'Mual muntah',
            'weight' => 0.8
        ]);
        Symptom::create([
            'id' => 'G014',
            'title' => 'Dehidrasi (akan terjadi menjadikan elastis kulit berkurang, hanya untuk anak dibawah 2 tahun)',
            'weight' => 0.8
        ]);
        Symptom::create([
            'id' => 'G015',
            'title' => 'Nyeri tenggorokan',
            'weight' => 0.6
        ]);
        Symptom::create([
            'id' => 'G016',
            'title' => 'Bersin',
            'weight' => 0.6
        ]);
        Symptom::create([
            'id' => 'G017',
            'title' => 'Badan terasa nyeri dan timbul rasa tidak nyaman.',
            'weight' => 0.6
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P001',
            'symptom_id'=>'G001',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P001',
            'symptom_id'=>'G002',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P001',
            'symptom_id'=>'G003',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P001',
            'symptom_id'=>'G004',
        ]);

        SymptomOfDisease::create([
            'disease_id'=>'P002',
            'symptom_id'=>'G005',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P002',
            'symptom_id'=>'G006',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P002',
            'symptom_id'=>'G007',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P002',
            'symptom_id'=>'G008',
        ]);

        SymptomOfDisease::create([
            'disease_id'=>'P003',
            'symptom_id'=>'G002',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P003',
            'symptom_id'=>'G009',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P004',
            'symptom_id'=>'G010',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P004',
            'symptom_id'=>'G011',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P004',
            'symptom_id'=>'G012',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P004',
            'symptom_id'=>'G013',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P004',
            'symptom_id'=>'G014',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P004',
            'symptom_id'=>'G004',
        ]);

        SymptomOfDisease::create([
            'disease_id'=>'P005',
            'symptom_id'=>'G015',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P005',
            'symptom_id'=>'G016',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P005',
            'symptom_id'=>'G002',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P005',
            'symptom_id'=>'G009',
        ]);
        SymptomOfDisease::create([
            'disease_id'=>'P005',
            'symptom_id'=>'G017',
        ]);


    }
}
