<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Salary
 *
 * @package App
 * @property string $salary
 * @property string $salary_position
*/
class Salary extends Model
{
    use SoftDeletes;

    protected $fillable = ['salary', 'salary_position_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Salary::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setSalaryPositionIdAttribute($input)
    {
        $this->attributes['salary_position_id'] = $input ? $input : null;
    }
    
    public function salary_position()
    {
        return $this->belongsTo(Job::class, 'salary_position_id')->withTrashed();
    }
    
}
