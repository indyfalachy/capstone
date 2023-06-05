<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $disease_id
 * @property string $symptom_id
 * @property string $created_at
 * @property string $updated_at
 * @property Disease $disease
 * @property Symptom $symptom
 */
class SymptomOfDisease extends Model
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
    protected $fillable = ['disease_id', 'symptom_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function disease()
    {
        return $this->belongsTo('App\Models\Disease');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function symptom()
    {
        return $this->belongsTo('App\Models\Symptom');
    }
}
