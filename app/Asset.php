<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Asset
 *
 * @package App
 * @property string $category
 * @property string $serial_number
 * @property string $title
 * @property string $photo1
 * @property string $photo2
 * @property string $photo3
 * @property string $status
 * @property string $location
 * @property text $notes
 * @property string $assigned_to
 * @property string $warranty
 * @property string $depreciacion
 * @property string $barcode
*/
class Asset extends Model
{
    protected $fillable = ['serial_number', 'title', 'photo1', 'photo2', 'photo3', 'notes', 'warranty', 'depreciacion', 'barcode', 'category_id', 'status_id', 'location_id', 'assigned_to_id'];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        Asset::observe(new \App\Observers\UserActionsObserver);

        Asset::observe(new \App\Observers\AssetsHistoryObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCategoryIdAttribute($input)
    {
        $this->attributes['category_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setStatusIdAttribute($input)
    {
        $this->attributes['status_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setLocationIdAttribute($input)
    {
        $this->attributes['location_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAssignedToIdAttribute($input)
    {
        $this->attributes['assigned_to_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setWarrantyAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['warranty'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['warranty'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getWarrantyAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
    public function category()
    {
        return $this->belongsTo(AssetsCategory::class, 'category_id');
    }
    
    public function status()
    {
        return $this->belongsTo(AssetsStatus::class, 'status_id');
    }
    
    public function location()
    {
        return $this->belongsTo(AssetsLocation::class, 'location_id');
    }
    
    public function assigned_to()
    {
        return $this->belongsTo(Employee::class, 'assigned_to_id')->withTrashed();
    }
    
}
