<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreDisciplinarycasesRequest extends FormRequest
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
            'discipline_employee_id' => 'required',
            'discipline_case' => 'required',
            'disciplinary_description' => 'required',
            'disciplinary_date' => 'required|date_format:'.config('app.date_format'),
            'disciplinary_actions_id' => 'required',
            'disciplinary_manager_id' => 'required',
        ];
    }
}
