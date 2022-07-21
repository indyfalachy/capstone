<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['user_id', 'patient_id', 'unit_service_id', 'refer', 'file_location', 'soap', 'action', 'type', 'file_addition', 'created_at', 'updated_at', 'odontogram','medicine'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function refered()
    {
        return $this->belongsTo('App\Models\UnitService', 'refer');
    }

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
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('user_id', 'like', '%' . $query . '%')
                ->orWhereHas('unitService', function ($q2) use ($query) {
                    $q2->where('title', 'like', '%' . $query . '%');
                })->orWhereHas('user', function ($q2) use ($query) {
                    $q2->where('name', 'like', '%' . $query . '%');
                })->orWhereHas('pasien', function ($q2) use ($query) {
                    $q2->where('name', 'like', '%' . $query . '%')
                        ->orWhere('nik', 'like', '%' . $query . '%')
                        ->orWhere('address', 'like', '%' . $query . '%')
                        ->orWhere('gender', 'like', '%' . $query . '%')
                        ->orWhere('no_bpjs', 'like', '%' . $query . '%');
                });
    }
}
