<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Status
 *
 * @package App
 * @property string $status
*/
class Status extends Model
{
    use SoftDeletes;

    protected $fillable = ['status'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Status::observe(new \App\Observers\UserActionsObserver);
    }
    
}
