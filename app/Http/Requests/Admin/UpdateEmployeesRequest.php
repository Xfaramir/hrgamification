<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'employee_name' => 'required',
            'employee_lastname' => 'required',
            'employee_photo' => 'nullable|mimes:png,jpg,jpeg,gif',
            'employee_id' => 'required',
            'employee_phone' => 'required',
            'employee_address' => 'required',
            'employee_bankaccount' => 'required',
            'employee_email' => 'required|email',
        ];
    }
}
