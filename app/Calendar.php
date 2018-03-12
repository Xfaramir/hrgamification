<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

/**
 * Class Calendar
 *
 * @package App
 * @property string $calendar_event
 * @property string $calendar_time
 * @property string $calendar_location
 * @property text $calendar_description
*/
class Calendar extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $fillable = ['calendar_event', 'calendar_time', 'calendar_location', 'calendar_description'];
    public static $searchable = [
        'calendar_event',
        'calendar_location',
    ];
    
    public static function boot()
    {
        parent::boot();

        Calendar::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setCalendarTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['calendar_time'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['calendar_time'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getCalendarTimeAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }
    
}
