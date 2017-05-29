<?php namespace App\Article\Repositories;
/**
 * Created by PhpStorm.
 * User: rainx_000
 * Date: 27.08.2016
 * Time: 12:19
 */

use \App\Article\Models\Article;

class ArticleRepo
{
    /**
     * @var Article
     */
    private $articles;
    /**
     * ArticleRepo constructor.
     */
    public function __construct()
    {
        $this->articles = Article::with('status', 'category');
    }

    /**
     * @return Article
     */
    public function get()
    {
        return $this->articles;
    }

    /**
     * @param int $statusId
     * @return ArticleRepo
     */
    public function filterByStatus( $statusId )
    {
        $this->articles->where('statusId', $statusId);
        return $this;
    }

    /**
     * @param int $statusId
     * @return ArticleRepo
     */
    public function filterByCategory( $categoryId )
    {
        $this->articles->where('categoryId', $categoryId);
        return $this;
    }

    /**
     * @param string $name
     * @return ArticleRepo
     */
    public function filterByName( $name )
    {
        $this->articles->where('name', 'LIKE', '%'.$name.'%');
        return $this;
    }

    /**
     * @param string $text
     * @return ArticleRepo
     */
    public function filterByText( $text )
    {
        $this->articles->where('text', 'LIKE', '%'.$text.'%');
        return $this;
    }

    /**
     * @param int $id
     * @return ArticleRepo
     */
    public function filterById($id) : self
    {
        $this->articles->where('id', $id);
        return $this;
    }
}