<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Role;
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
    }
}
