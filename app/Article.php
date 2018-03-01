<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    

  	$articles = Article::where('id', '>', 10)->where('id', '<', 20)->orderBy('updated_at', 'desc')->get();

	foreach ($articles as $article) {

 	  	echo $article->title;

	}

}
