<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestAdmin extends FormRequest
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
            
        'fullName'=>'required|max:30',	
        'email'	=>'required|email|max:30',
        'position'=>'required|max:30',
        ];
    }
    
    public function messages()
    {
        return [
            'fullName.required' => 'Bạn không được bỏ trống fullName',	
            'email.required' => 'Bạn không được bỏ trống email',	
            'position.required' => 'Bạn không được bỏ trống position',	

            'email.email' => 'Bạn nhập sai cấu trúc của email',	

            'fullName.max' => 'Bạn nhập quá số lượng từ fullName',	
            'email.max' => 'Bạn nhập quá số lượng từ email',	
            'position.max' => 'Bạn nhập quá số lượng position',	
        ];
    }
}
