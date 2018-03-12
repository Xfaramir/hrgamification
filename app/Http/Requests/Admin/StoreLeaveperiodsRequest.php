<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeaveperiodsRequest extends FormRequest
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
            'leave_type' => 'required',
            'leave_from' => 'required|date_format:'.config('app.date_format').' H:i:s',
            'leave_until' => 'required|date_format:'.config('app.date_format').' H:i:s',
        ];
    }
}
