<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 *
 * @package App
 * @property string $engagement_courses
 * @property string $engament_skill
 * @property string $engagement_duration
 * @property text $engagement_description
 * @property string $engagment_link
*/
class Course extends Model
{
    use SoftDeletes;

    protected $fillable = ['engagement_courses', 'engagement_duration', 'engagement_description', 'engagment_link', 'engament_skill_id'];
    public static $searchable = [
        'engagement_courses',
    ];
    
    public static function boot()
    {
        parent::boot();

        Course::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEngamentSkillIdAttribute($input)
    {
        $this->attributes['engament_skill_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setEngagementDurationAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['engagement_duration'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['engagement_duration'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getEngagementDurationAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
    public function engament_skill()
    {
        return $this->belongsTo(Skill::class, 'engament_skill_id')->withTrashed();
    }
    
}
