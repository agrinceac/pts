<?php
namespace App\Article\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleVariable
 * @package App\Directory\Models
 */

class ArticleVariable extends Model
{
    protected $table = 'articles_variables';

    const INDEX_TITLE_KEY = 'index_title';
    const VENDOR_TITLE_KEY = 'vendor_title';
    const CLIENT_TITLE_KEY = 'client_title';
    const CLIENT_AREA_AUTH_KEY = 'client_auth_title';
    const VENDOR_AREA_AUTH_KEY =  'vendor_auth_title';
}