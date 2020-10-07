<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//
//        $rules = [
//            'name' => 'required|string|unique:games,title',
//            'email' => '',
//            'subject' => 'required|min:10|max:100',
//            'text' => 'required|min:50|max:500',
//        ];
//
//        switch ($this->getMethod())
//        {
//            case 'POST':
//                return $rules;
//            case 'PUT':
//                return [
//                        'id' => 'required|integer|exists:comtacts,id', //должен существовать. Можно вот так: unique:games,id,' . $this->route('game'),
//                        'email' => [
//                            'required',
//                            Rule::unique('contact')->ignore($this->title, 'email') //должен быть уникальным, за исключением себя же
//                        ]
//                    ] + $rules; // и берем все остальные правила
//            // case 'PATCH':
//            case 'DELETE':
//                return [
//                    'id' => 'required|integer|exists:contact,id'
//                ];
//        }


    }

    public function messages()
    {
        return [
            'date.required' => 'A date is required',
            'date.date_format'  => 'A date must be in format: Y-m-d',
            'date.unique'  => 'This date is already taken',
            'date.after_or_equal'  => 'A date must be after or equal today',
            'date.exists'  => 'This date doesn\'t exists',
        ];
    }

    public function all($keys = null)
    {
        // return $this->all();
        $data = parent::all($keys);
        switch ($this->getMethod())
        {
            // case 'PUT':
            // case 'PATCH':
            case 'DELETE':
                $data['date'] = $this->route('day');
        }
        return $data;
    }
}
