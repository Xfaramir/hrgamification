<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

/**
 * Class Candidate
 *
 * @package App
 * @property string $candidate_vacancy
 * @property string $candidate_name
 * @property string $candidate_firstname
 * @property string $candidate_secondname
 * @property string $candidate_email
 * @property integer $candidate_phone
 * @property string $candidate_facebook
 * @property string $candidate_linkein
 * @property string $candidate_notes
 * @property string $candidate_date
 * @property string $candidate_photo
*/
class Candidate extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $fillable = ['candidate_name', 'candidate_firstname', 'candidate_secondname', 'candidate_email', 'candidate_phone', 'candidate_facebook', 'candidate_linkein', 'candidate_notes', 'candidate_date', 'candidate_photo', 'candidate_vacancy_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Candidate::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCandidateVacancyIdAttribute($input)
    {
        $this->attributes['candidate_vacancy_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setCandidatePhoneAttribute($input)
    {
        $this->attributes['candidate_phone'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setCandidateDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['candidate_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['candidate_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getCandidateDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
    public function candidate_vacancy()
    {
        return $this->belongsTo(Vacancy::class, 'candidate_vacancy_id')->withTrashed();
    }
    
}
