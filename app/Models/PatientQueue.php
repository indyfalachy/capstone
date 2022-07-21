<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $patient_id
 * @property integer $unit_service_id
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property Patient $patient
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
    protected $fillable = ['patient_id','queue', 'unit_service_id', 'status', 'created_at', 'updated_at'];

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
    public function unitService()
    {
        return $this->belongsTo('App\Models\UnitService');
    }
    public static function getQueues($unit){
        return static::whereDate('created_at',\Carbon\Carbon::today())
            ->whereUnitServiceId($unit)
            ->where('status','=',1)
            ->orderByDesc('id')
            ->get();
    }
    public static function getDoneQueues($unit){
        return static::whereDate('created_at',\Carbon\Carbon::today())
            ->whereUnitServiceId($unit)
            ->where('status','=',2)
            ->orderByDesc('id')
            ->get();
    }

    public static function getCancelQueues($unit){
        return static::whereDate('created_at',\Carbon\Carbon::today())
            ->whereUnitServiceId($unit)
            ->where('status','=',3)
            ->orderByDesc('id')
            ->get();
    }

    public static function getVisitor(){
        return PatientQueue::whereDate('created_at', Carbon::today())->get()->count();
    }
    public static function getVisitorDone(){
        return PatientQueue::whereDate('created_at', Carbon::today())->where('status','=',2)->get()->count();
    }
    public static function getQueueDone($unit){
        return PatientQueue::whereDate('created_at', Carbon::today())->whereUnitServiceId($unit)->where('status','=',2)->get()->count();
    }
    public static function getVisitorCancel(){
        return PatientQueue::whereDate('created_at', Carbon::today())->where('status','=',3)->get()->count();
    }
    public static function getQueue($unit){
        return PatientQueue::whereDate('created_at', Carbon::today())->whereUnitServiceId($unit)->get()->count() + 1;
    }
    public static function getLastQueue($unit){
        return PatientQueue::whereDate('created_at', Carbon::today())
                ->whereUnitServiceId($unit)
                ->where('status','!=',1)
                ->get()->count();
    }
    public static function getVisitorMonth($month){
        return PatientQueue::whereStatus(2)
            ->whereMonth('created_at',$month)
            ->whereYear('created_at',Carbon::now()->year)
            ->get()->count();
    }

}
