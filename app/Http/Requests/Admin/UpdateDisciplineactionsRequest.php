<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDisciplineactionsRequest extends FormRequest
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
            
            'disciplineactions' => 'required|unique:disciplineactions,disciplineactions,'.$this->route('disciplineaction'),
            'discipline_status_id' => 'required',
        ];
    }
}
