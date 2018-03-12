<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @package App
 * @property string $title
 * @property string $roletype
*/
class Role extends Model
{
    protected $fillable = ['title', 'roletype'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Role::observe(new \App\Observers\UserActionsObserver);
    }
    
}
