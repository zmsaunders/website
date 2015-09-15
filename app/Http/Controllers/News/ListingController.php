<?php namespace Mandible\Http\Controllers\News;

use Mandible\Post;
use \Michelf\Markdown;
use Mandible\Http\Controllers\Controller;

class ListingController extends Controller {

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function entries()
    {
        $posts = $this->post->all();

        foreach ($posts as $post) {
            echo Markdown::defaultTransform($post->content);
        }
    }
}
