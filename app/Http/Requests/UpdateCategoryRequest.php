<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Http\Request as IlluminateRequest;

class UpdateCategoryRequest extends Request {

    protected $table;
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
    public function rules(IlluminateRequest $request)
    {
        return [
            'name'            => 'required|max:250',
            'alias'           => 'required|max:250|unique:'.$this->table.',alias,'.$request->get('id'),
            'statusId'        => 'required',
        ];
    }

}