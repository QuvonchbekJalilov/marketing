<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        $actionMethod = $this->route()->getActionMethod();
        if ($actionMethod === 'store') {
            return [
                'provider_id' => 'required|exists:users,id',
                'service_sub_category_id' => 'required|exists:service_sub_categories,id',
                'work_title' => 'required|string|max:255',
                'multi_image_video.*' => 'nullable|file|max:2048',
                'budget' => 'nullable|numeric',
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date',
                'introduction' => 'nullable|string',
                'challenges' => 'nullable|string',
                'solution' => 'nullable|string',
                'impact' => 'nullable|string',
                'source_link' => 'nullable|string|max:255',
                'skills' => 'nullable|array',
                // Client info validation
                'company_name' => 'required|string|max:255',
                'company_location' => 'required|string|max:255',
                'sector_id' => 'required|string|max:255',
                'geographic_scope' => 'required|string|max:255',
                'audience' => 'required|string|max:255',
            ];
        } elseif ($actionMethod === 'update') {
            return [
                'provider_id' => 'required|exists:users,id',
                'service_sub_category_id' => 'required|exists:service_sub_categories,id',
                'work_title' => 'required|string|max:255',
                'multi_image_video.*' => 'nullable|file|max:2048',
                'budget' => 'nullable|numeric',
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date',
                'introduction' => 'nullable|string',
                'challenges' => 'nullable|string',
                'solution' => 'nullable|string',
                'impact' => 'nullable|string',
                'source_link' => 'nullable|string|max:255',
                'skills' => 'nullable|array',
                // Client info validation
                'company_name' => 'required|string|max:255',
                'company_location' => 'required|string|max:255',
                'sector_id' => 'required|string|max:255',
                'geographic_scope' => 'required|string|max:255',
                'audience' => 'required|string|max:255',
            ];
        }
        return [];
    }
}
