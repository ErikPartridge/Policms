<?php namespace app\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\Administrator;


class Post extends Model
{

    protected $fillable = ['title', 'content', 'author'];

    protected $table = 'posts';

    public static $name = 'post';
    
    //This is long, html
    private $content;

    //Foreign Key
    private $author;

    //List of tags
    private $tags;

    //the title of the article
    private $title;

    //if it is published
    private $published;

    private $slug;

}
