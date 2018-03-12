<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vacancy
 *
 * @package App
 * @property string $vacancy_title
 * @property string $vacancy_name
 * @property string $vacancy_manager
 * @property text $vacancy_description
 * @property string $vacancy_date
 * @property string $vacancy_location
 * @property integer $vacancy_available
*/
class Vacancy extends Model
{
    use SoftDeletes;

    protected $fillable = ['vacancy_name', 'vacancy_description', 'vacancy_date', 'vacancy_available', 'vacancy_title_id', 'vacancy_manager_id', 'vacancy_location_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Vacancy::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setVacancyTitleIdAttribute($input)
    {
        $this->attributes['vacancy_title_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setVacancyManagerIdAttribute($input)
    {
        $this->attributes['vacancy_manager_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setVacancyDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['vacancy_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['vacancy_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getVacancyDateAttribute($input)
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
    public function setVacancyLocationIdAttribute($input)
    {
        $this->attributes['vacancy_location_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setVacancyAvailableAttribute($input)
    {
        $this->attributes['vacancy_available'] = $input ? $input : null;
    }
    
    public function vacancy_title()
    {
        return $this->belongsTo(Job::class, 'vacancy_title_id')->withTrashed();
    }
    
    public function vacancy_manager()
    {
        return $this->belongsTo(Employee::class, 'vacancy_manager_id')->withTrashed();
    }
    
    public function vacancy_location()
    {
        return $this->belongsTo(Nationality::class, 'vacancy_location_id')->withTrashed();
    }
    
}
