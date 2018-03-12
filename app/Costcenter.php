<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Costcenter
 *
 * @package App
 * @property string $cost_id
 * @property string $cost_name
 * @property string $cost_description
*/
class Costcenter extends Model
{
    use SoftDeletes;

    protected $fillable = ['cost_id', 'cost_name', 'cost_description'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Costcenter::observe(new \App\Observers\UserActionsObserver);
    }
    
}
