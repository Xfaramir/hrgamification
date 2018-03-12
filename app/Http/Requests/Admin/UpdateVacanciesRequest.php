<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVacanciesRequest extends FormRequest
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
            
            'vacancy_title_id' => 'required',
            'vacancy_manager_id' => 'required',
            'vacancy_description' => 'required',
            'vacancy_date' => 'required|date_format:'.config('app.date_format'),
            'vacancy_available' => 'max:2147483647|required|numeric',
        ];
    }
}
