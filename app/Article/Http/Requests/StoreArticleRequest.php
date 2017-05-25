<?php namespace App\Article\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Http\Request as IlluminateRequest;

class StoreArticleRequest extends Request {

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
            'name'            => 'required|max:250',
            'alias'           => 'required|max:250|unique:articles',
            'statusId'        => 'required',
            'categoryId'      => 'required',
            'description'     => 'max:1000',
            'text'            => 'required',
            'metaTitle'       => 'max:250',
            'metaDescription' => 'max:250',
            'metaKeywords'    => 'max:250',
        ];
    }

}