<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

/**
 * Class Selfdocument
 *
 * @package App
 * @property string $self_offerletter
 * @property string $self_joinletter
 * @property string $self_contract
 * @property string $self_id
 * @property string $self_photo
*/
class Selfdocument extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $fillable = ['self_offerletter', 'self_joinletter', 'self_contract', 'self_id', 'self_photo'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Selfdocument::observe(new \App\Observers\UserActionsObserver);
    }
    
}
