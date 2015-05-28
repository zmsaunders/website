<?php namespace Mandible\Http\Requests;

use Mandible\Http\Requests\Request;

class StorePostRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO: Auth the user
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
            'title'   => 'required|unique:posts|max:220',
            'content' => 'required'
        ];
    }

}
