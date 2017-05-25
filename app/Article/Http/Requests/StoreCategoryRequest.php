<?php namespace App\Article\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Http\Request as IlluminateRequest;

class StoreCategoryRequest extends \App\Http\Requests\StoreCategoryRequest {
    /**
     * Used for unique validator
     * @var string
     */
    protected $table = 'articles_categories';
}