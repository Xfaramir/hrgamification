<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Currency
 *
 * @package App
 * @property string $currency
*/
class Currency extends Model
{
    use SoftDeletes;

    protected $fillable = ['currency'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Currency::observe(new \App\Observers\UserActionsObserver);
    }
    
}
