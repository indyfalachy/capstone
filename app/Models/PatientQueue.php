<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $pasien_id
 * @property integer $unit_service_id
 * @property integer $medical_initial_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $queue
 * @property UnitService $unitService
 * @property Pasien $pasien
 * @property MedicalInitial $medicalInitial
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
    protected $fillable = ['pasien_id', 'unit_service_id', 'medical_initial_id', 'status', 'created_at', 'updated_at', ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unitService()
    {
        return $this->belongsTo('App\Models\UnitService');
    }

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
    public static function getQueue($unit)
    {
        $q=PatientQueue::where('unit_service_id',$unit)->whereDate('created_at','=',Carbon::now()->toDateString())->get()->count();
        return $q+1;
    }
}
