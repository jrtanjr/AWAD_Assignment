<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class CreateBidRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        /** 
         * A simple authorization: prevent the project owner from bidding on their own project.
         * In a more sophisticated app, you might also check prior bidding history.
         */
        $project = $this->route('project');
        return Auth::check() && ($project instanceof Project) 
    && (Auth::id() !== $project->owner_id);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'bid_amount' => 'required|numeric|min:0',
            'msg'        => 'nullable|string|max:500',
        ];
    
    }
}
