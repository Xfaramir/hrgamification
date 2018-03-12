<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCandidatesRequest extends FormRequest
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
            'candidate_vacancy_id' => 'required',
            'candidate_name' => 'required',
            'candidate_firstname' => 'required',
            'candidate_email' => 'required|email',
            'candidate_phone' => 'max:2147483647|nullable|numeric',
            'candidate_date' => 'required|date_format:'.config('app.date_format'),
        ];
    }
}
