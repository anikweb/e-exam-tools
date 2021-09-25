<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionnaireDetailRequest extends FormRequest
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
            'institute_name'=>"required",
            'institute_address'=>"required",
            'exam_name'=>"required",
            'questionnaire_subject'=>"required",
            'department'=>"required",
            'semester'=>"required",
            'date'=>"required",
            'start_time'=>"required",
            'end_time'=>"required",
            'quote'=>"required",
        ];
    }
}
