<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminServiceRequest extends FormRequest
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
        if ($actionMethod === 'store') {
            return [
                'service_category_id' => 'required|exists:service_categories,id', // Validate the category ID
                'name_uz' => 'required|string|max:255',
                'name_ru' => 'required|string|max:255',
                'name_en' => 'required|string|max:255',
            ];
        } elseif ($actionMethod === 'update') {
            return [
                'service_category_id' => 'required|exists:service_categories,id', // Validate the category ID
                'name_uz' => 'required|string|max:255',
                'name_ru' => 'required|string|max:255',
                'name_en' => 'required|string|max:255',
            ];
        }
        return [];
    
    }
}
