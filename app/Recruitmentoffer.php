<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Recruitmentoffer
 *
 * @package App
 * @property string $hiring_offer
*/
class Recruitmentoffer extends Model
{
    use SoftDeletes;

    protected $fillable = ['hiring_offer_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Recruitmentoffer::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setHiringOfferIdAttribute($input)
    {
        $this->attributes['hiring_offer_id'] = $input ? $input : null;
    }
    
    public function hiring_offer()
    {
        return $this->belongsTo(Vacancy::class, 'hiring_offer_id')->withTrashed();
    }
    
}
