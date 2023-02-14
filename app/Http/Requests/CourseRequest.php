<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'course_id'  =>  'required|integer',
            'name' => 'required',
            'description' =>  'required',
            'start_date'  =>  'required|date_format:m/d/Y',
            'total_lesson' => 'required|integer',
            'course_duration'  =>  'required|integer',
            'teacher_id'  =>  'required',
        ];
    }

}
