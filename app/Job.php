<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 *
 * @package App
 * @property string $job_title
 * @property string $job_description
 * @property string $job_specification
 * @property string $job_note
*/
class Job extends Model
{
    use SoftDeletes;

    protected $fillable = ['job_title', 'job_description', 'job_specification', 'job_note'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Job::observe(new \App\Observers\UserActionsObserver);
    }
    
}
