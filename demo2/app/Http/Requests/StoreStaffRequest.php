<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
            'name' => 'required|regex:"/^[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]+$"',
            'date_of_birth' => 'required',
            'address' => 'required',
            'phone' => 'required|regex:"/^0[0-9]{9}$/"',
            'email' => 'required|regex:"/^[A-Za-z]+[A-Za-z._0-9]*@[a-z]{3,7}
            .[a-z]{3,6}[a-z.]*/"',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ten khong duoc bo trong',
            'name.regex' => 'Ten khong dung dinh dang',
            'date_of_birth.required' => 'Ngay sinh khong duoc bo trong',
            'address.required' => 'Dia chi khong duoc bo trong',
            'phone.required' => 'So dien thoai khong duoc bo trong',
            'phone.regex' => 'So dien thoai khong dung dinh dang',
            'email.required' => 'Email khong duoc bo trong',
            'email.regex' => 'Email khong dung dinh dang',
            'password.required' => 'Password khong duoc bo trong',
            'password.regex' => 'Password khong dung dinh dang',
        ];
    }
}
