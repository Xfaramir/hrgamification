<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Nationality
 *
 * @package App
 * @property string $nationalities
 * @property string $city
*/
class Nationality extends Model
{
    use SoftDeletes;

    protected $fillable = ['nationalities', 'city'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Nationality::observe(new \App\Observers\UserActionsObserver);
    }
    
}
