<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLangaugeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->role_id == 1;
    }

    
    public function rules(): array
    {
        $actionMethod = $this->route()->getActionMethod();
        $rules = [];
        if ($actionMethod === 'store') {
            $rules = $this->storeNew();
        } else if($actionMethod === 'update'){
            $rules = $this->updateNew();
        }
        return $rules;
    }
    public function storeNew(): array
    {
        return [
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:languages,code',
        ];

    }

    public function updateNew(): array
    {
        return [
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'code' => ['required','string','max:10', 'unique:languages,code,'. $this->route('language')],
        ];
    }
}
