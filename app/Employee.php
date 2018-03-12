<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 *
 * @package App
 * @property string $employee_name
 * @property string $employee_middlename
 * @property string $employee_lastname
 * @property string $employee_salary
 * @property string $employee_photo
 * @property string $employee_username
 * @property string $employee_id
 * @property string $employee_title
 * @property string $employee_timeshift
 * @property string $employee_costcenter
 * @property string $employee_skills
 * @property string $employee_education
 * @property string $employee_nationality
 * @property string $employee_phone
 * @property string $employee_address
 * @property string $employee_bankaccount
 * @property string $employee_email
*/
class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = ['employee_name', 'employee_middlename', 'employee_lastname', 'employee_photo', 'employee_id', 'employee_phone', 'employee_address', 'employee_bankaccount', 'employee_email', 'employee_salary_id', 'employee_username_id', 'employee_title_id', 'employee_timeshift_id', 'employee_costcenter_id', 'employee_skills_id', 'employee_education_id', 'employee_nationality_id'];
    public static $searchable = [
        'employee_lastname',
        'employee_id',
        'employee_phone',
        'employee_email',
    ];
    
    public static function boot()
    {
        parent::boot();

        Employee::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeSalaryIdAttribute($input)
    {
        $this->attributes['employee_salary_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeUsernameIdAttribute($input)
    {
        $this->attributes['employee_username_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeTitleIdAttribute($input)
    {
        $this->attributes['employee_title_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeTimeshiftIdAttribute($input)
    {
        $this->attributes['employee_timeshift_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeCostcenterIdAttribute($input)
    {
        $this->attributes['employee_costcenter_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeSkillsIdAttribute($input)
    {
        $this->attributes['employee_skills_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeEducationIdAttribute($input)
    {
        $this->attributes['employee_education_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeNationalityIdAttribute($input)
    {
        $this->attributes['employee_nationality_id'] = $input ? $input : null;
    }
    
    public function employee_salary()
    {
        return $this->belongsTo(Salary::class, 'employee_salary_id')->withTrashed();
    }
    
    public function employee_username()
    {
        return $this->belongsTo(User::class, 'employee_username_id');
    }
    
    public function employee_title()
    {
        return $this->belongsTo(Job::class, 'employee_title_id')->withTrashed();
    }
    
    public function employee_timeshift()
    {
        return $this->belongsTo(Timeshift::class, 'employee_timeshift_id')->withTrashed();
    }
    
    public function employee_costcenter()
    {
        return $this->belongsTo(Costcenter::class, 'employee_costcenter_id')->withTrashed();
    }
    
    public function employee_skills()
    {
        return $this->belongsTo(Skill::class, 'employee_skills_id')->withTrashed();
    }
    
    public function employee_education()
    {
        return $this->belongsTo(Education::class, 'employee_education_id')->withTrashed();
    }
    
    public function employee_nationality()
    {
        return $this->belongsTo(Nationality::class, 'employee_nationality_id')->withTrashed();
    }
    
}
