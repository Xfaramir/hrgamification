<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCalendarsRequest extends FormRequest
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
            'calendar_event' => 'required',
            'calendar_time' => 'required|date_format:'.config('app.date_format').' H:i:s|unique:calendars,calendar_time',
            'calendar_description' => 'required',
        ];
    }
}
