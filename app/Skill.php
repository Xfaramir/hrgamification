<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Skill
 *
 * @package App
 * @property string $skill_name
 * @property string $skill_description
*/
class Skill extends Model
{
    use SoftDeletes;

    protected $fillable = ['skill_name', 'skill_description'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Skill::observe(new \App\Observers\UserActionsObserver);
    }
    
}
