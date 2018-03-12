<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Education
 *
 * @package App
 * @property string $education_level
 * @property string $education_title
*/
class Education extends Model
{
    use SoftDeletes;

    
    protected $table = "education";
    protected $fillable = ['education_level', 'education_title'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Education::observe(new \App\Observers\UserActionsObserver);
    }
    
}
