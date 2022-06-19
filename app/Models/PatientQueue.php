<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $pasien_id
 * @property integer $unit_service_id
 * @property integer $medical_initial_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property Pasien $pasien
 * @property MedicalInitial $medicalInitial
 * @property UnitService $unitService
 */
class PatientQueue extends Model
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
    protected $fillable = ['queue','pasien_id', 'unit_service_id', 'medical_initial_id', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicalInitial()
    {
        return $this->belongsTo('App\Models\MedicalInitial');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unitService()
    {
        return $this->belongsTo('App\Models\UnitService');
    }
}
