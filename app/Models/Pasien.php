<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $nik
 * @property string $address
 * @property string $birth_place
 * @property string $birth_date
 * @property string $village
 * @property string $district
 * @property string $gender
 * @property string $religion
 * @property string $job
 * @property string $no_bpjs
 * @property string $allergy
 * @property string $created_at
 * @property string $updated_at
 * @property MedicalRecord[] $medicalRecords
 * @property PatientQueue[] $patientQueues
 */
class Pasien extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'nik', 'address', 'birth_place', 'birth_date', 'village', 'district', 'gender', 'religion', 'job', 'no_bpjs', 'allergy', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicalRecords()
    {
        return $this->hasMany('App\Models\MedicalRecord');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patientQueues()
    {
        return $this->hasMany('App\Models\PatientQueue');
    }
}
