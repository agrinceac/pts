<?php namespace App\Article\Http\Requests;

use Illuminate\Http\Request as IlluminateRequest;

class UpdateCategoryRequest extends \App\Http\Requests\UpdateCategoryRequest {
    /**
     * Used for unique validator
     * @var string
     */
    protected $table = 'articles_categories';
}