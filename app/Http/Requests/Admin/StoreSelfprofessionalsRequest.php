<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSelfprofessionalsRequest extends FormRequest
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
            'self_start' => 'required|date_format:'.config('app.date_format'),
            'self_end' => 'nullable|date_format:'.config('app.date_format'),
            'self_protitle' => 'required',
            'self_title_id' => 'required',
        ];
    }
}
