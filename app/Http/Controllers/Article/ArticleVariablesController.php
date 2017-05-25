<?php
namespace App\Http\Controllers\Article;

use App\Article\Models\ArticleVariable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ArticleVariablesController extends Controller
{
    /**
     * ArticleVariablesController constructor
     */
    function  __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->showAll();
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function showAll()
    {
        $articleVariables = ArticleVariable::all();

        return response()->json($articleVariables);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function save()
    {
        $variables = Input::all();
        $lastResult = false;

        foreach ($variables as $variable) {
            $_variable = ArticleVariable::findOrFail($variable['id']);
            $_variable->value = $variable['value'];
            $lastResult = $_variable->save();
        }

        return response()->json($lastResult);
    }
}