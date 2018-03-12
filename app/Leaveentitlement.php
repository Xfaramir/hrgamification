<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Leaveentitlement
 *
 * @package App
 * @property string $leave_type
 * @property string $leave_employee
 * @property string $leave_from
 * @property string $leave_until
 * @property string $status
*/
class Leaveentitlement extends Model
{
    use SoftDeletes;

    protected $fillable = ['leave_from', 'leave_until', 'leave_type_id', 'leave_employee_id', 'status_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Leaveentitlement::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setLeaveTypeIdAttribute($input)
    {
        $this->attributes['leave_type_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setLeaveEmployeeIdAttribute($input)
    {
        $this->attributes['leave_employee_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setLeaveFromAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['leave_from'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['leave_from'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getLeaveFromAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setLeaveUntilAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['leave_until'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['leave_until'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getLeaveUntilAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setStatusIdAttribute($input)
    {
        $this->attributes['status_id'] = $input ? $input : null;
    }
    
    public function leave_type()
    {
        return $this->belongsTo(Leaveperiod::class, 'leave_type_id')->withTrashed();
    }
    
    public function leave_employee()
    {
        return $this->belongsTo(Employee::class, 'leave_employee_id')->withTrashed();
    }
    
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id')->withTrashed();
    }
    
}
