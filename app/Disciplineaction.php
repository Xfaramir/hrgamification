<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Disciplineaction
 *
 * @package App
 * @property string $disciplineactions
 * @property string $discipline_severity
 * @property text $discipline_description
 * @property string $discipline_status
*/
class Disciplineaction extends Model
{
    use SoftDeletes;

    protected $fillable = ['disciplineactions', 'discipline_severity', 'discipline_description', 'discipline_status_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Disciplineaction::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setDisciplineStatusIdAttribute($input)
    {
        $this->attributes['discipline_status_id'] = $input ? $input : null;
    }
    
    public function discipline_status()
    {
        return $this->belongsTo(Status::class, 'discipline_status_id')->withTrashed();
    }
    
}
