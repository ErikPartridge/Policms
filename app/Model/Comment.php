<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $table = 'comments';

	public static $name = 'comment';
	
	//This is long, html
	private $content;

	//Author's id, will update
	private $author;

	//the title of the comment
	private $title;

	//If the comment is approved
	private $approved;
}
