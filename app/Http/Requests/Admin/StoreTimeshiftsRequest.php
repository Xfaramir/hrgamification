<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTimeshiftsRequest extends FormRequest
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
            'time_shift' => 'required|unique:timeshifts,time_shift,'.$this->route('timeshift'),
            'time_from' => 'required|date_format:H:i:s',
            'time_to' => 'required|date_format:H:i:s',
            'time_hours' => 'required|date_format:H:i:s',
        ];
    }
}
