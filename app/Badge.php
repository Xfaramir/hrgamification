<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Badge
 *
 * @package App
 * @property string $title
 * @property string $icon
 * @property text $description
 * @property string $status
*/
class Badge extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'icon', 'description', 'status_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Badge::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setStatusIdAttribute($input)
    {
        $this->attributes['status_id'] = $input ? $input : null;
    }
    
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id')->withTrashed();
    }
    
}
