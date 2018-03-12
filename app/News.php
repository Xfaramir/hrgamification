<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class News
 *
 * @package App
 * @property string $subject
 * @property string $published_date
 * @property text $description
*/
class News extends Model
{
    use SoftDeletes;

    
    protected $table = "news";
    protected $fillable = ['subject', 'published_date', 'description'];
    public static $searchable = [
        'subject',
        'published_date',
        'description',
    ];
    
    public static function boot()
    {
        parent::boot();

        News::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setPublishedDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['published_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['published_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getPublishedDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
}
