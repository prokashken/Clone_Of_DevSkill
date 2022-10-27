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
            'title' => 'required',
            'batch' => 'required',
            'prerequisite'  => 'required',
            // 'banner_image' => 'required|image',
            // 'dbanner_image' => 'required|image',
            'course_for' => 'required',
            'summary' => 'required',
            'fee' => 'required',
            'discount'=>'nullable',
            'schedule' => 'required',
            'strt_date' => 'required',
            'count' => 'required',
        ];
    }
}
