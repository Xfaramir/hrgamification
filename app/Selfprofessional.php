<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Selfprofessional
 *
 * @package App
 * @property string $self_start
 * @property string $self_end
 * @property string $self_protitle
 * @property string $self_title
 * @property text $self_comment
*/
class Selfprofessional extends Model
{
    use SoftDeletes;

    protected $fillable = ['self_start', 'self_end', 'self_protitle', 'self_comment', 'self_title_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Selfprofessional::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setSelfStartAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['self_start'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['self_start'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getSelfStartAttribute($input)
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
    public function setSelfEndAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['self_end'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['self_end'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getSelfEndAttribute($input)
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
    public function setSelfTitleIdAttribute($input)
    {
        $this->attributes['self_title_id'] = $input ? $input : null;
    }
    
    public function self_title()
    {
        return $this->belongsTo(Job::class, 'self_title_id')->withTrashed();
    }
    
}
