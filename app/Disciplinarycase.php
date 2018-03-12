<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

/**
 * Class Disciplinarycase
 *
 * @package App
 * @property string $discipline_employee
 * @property string $discipline_case
 * @property text $disciplinary_description
 * @property string $disciplinary_date
 * @property string $disciplinary_actions
 * @property string $disciplinary_manager
*/
class Disciplinarycase extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $fillable = ['discipline_case', 'disciplinary_description', 'disciplinary_date', 'discipline_employee_id', 'disciplinary_actions_id', 'disciplinary_manager_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Disciplinarycase::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setDisciplineEmployeeIdAttribute($input)
    {
        $this->attributes['discipline_employee_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDisciplinaryDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['disciplinary_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['disciplinary_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDisciplinaryDateAttribute($input)
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
    public function setDisciplinaryActionsIdAttribute($input)
    {
        $this->attributes['disciplinary_actions_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setDisciplinaryManagerIdAttribute($input)
    {
        $this->attributes['disciplinary_manager_id'] = $input ? $input : null;
    }
    
    public function discipline_employee()
    {
        return $this->belongsTo(Employee::class, 'discipline_employee_id')->withTrashed();
    }
    
    public function disciplinary_actions()
    {
        return $this->belongsTo(Disciplineaction::class, 'disciplinary_actions_id')->withTrashed();
    }
    
    public function disciplinary_manager()
    {
        return $this->belongsTo(User::class, 'disciplinary_manager_id');
    }
    
}
