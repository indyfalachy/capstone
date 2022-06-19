<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $pasien_id
 * @property integer $unit_service_id
 * @property string $file_location
 * @property string $soap
 * @property string $action
 * @property string $type
 * @property int $refer
 * @property string $file_addition
 * @property string $created_at
 * @property string $updated_at
 * @property Pasien $pasien
 * @property User $user
 * @property UnitService $unitService
 */
class MedicalRecord extends Model
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
    protected $fillable = ['user_id', 'pasien_id', 'unit_service_id', 'file_location', 'soap', 'action', 'type', 'refer', 'file_addition', 'created_at', 'updated_at'];

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
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unitService()
    {
        return $this->belongsTo('App\Models\UnitService');
    }
}
