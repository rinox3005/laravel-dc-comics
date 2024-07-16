<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $comicId = $this->comic->id;

        return [
            'title' => 'required|string|min:5|max:255|unique:comics,title,' . $comicId,
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required.',
            'title.min' => 'Title must be at least 5 characters.',
            'title.unique' => 'Title must be unique.',
            'description.required' => 'Description is required.',
            'thumb.required' => 'Thumbnail URL is required.',
            'thumb.url' => 'Thumbnail URL is not valid.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a number.',
            'price.min' => 'Price must be at least 0.',
            'series.required' => 'Series is required.',
            'sale_date.required' => 'Sale date is required.',
            'sale_date.date' => 'Sale date is not valid.',
            'type.required' => 'Type is required.',
            'artists.required' => 'Artists are required.',
            'writers.required' => 'Writers are required.',
        ];
    }
}
