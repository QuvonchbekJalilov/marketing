<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSkillRequest extends FormRequest
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
        if ($actionMethod === 'store' || $actionMethod === 'update') {
            return [
                'service_id' => 'required|exists:service_sub_categories,id', // Validate the category ID
                'name' => 'required|string|max:255',
            ];
        }
        return [];
    }
}
