<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $main_complaint
 * @property string $medical_history_now
 * @property string $medical_history-past
 * @property string $condotion
 * @property string $awarnes
 * @property string $gcs
 * @property string $sick_state
 * @property string $nutritional_status
 * @property string $blood_pressure
 * @property int $pulse
 * @property float $temperature
 * @property int $weight
 * @property int $height
 * @property string $addition_note
 * @property string $created_at
 * @property string $updated_at
 * @property PatientQueue[] $patientQueues
 */
class MedicalInitial extends Model
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
    protected $fillable = ['main_complaint', 'medical_history_now', 'medical_history_past', 'condition', 'awarnes', 'gcs', 'sick_state', 'nutritional_status', 'blood_pressure', 'pulse', 'temperature', 'weight', 'height', 'addition_note', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patientQueue()
    {
        return $this->hasOne('App\Models\PatientQueue');
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('main_complaint','like', '%'.$query.'%')
                ->orWhere('condition', 'like', '%'.$query.'%')
                ->orWhere('awarnes', 'like', '%'.$query.'%');
    }

}
