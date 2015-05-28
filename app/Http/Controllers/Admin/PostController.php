<?php namespace Mandible\Http\Controllers\Admin;

use Mandible\Post;
use Input;
use Mandible\Http\Requests\StorePostRequest;
use Mandible\Http\Controllers\Controller;

class PostController extends Controller {

    private $post;

    public function __construct(Post $post) {
        $this->post = $post;
    }

    public function getIndex() {
        return view('admin.posts.list')
            ->with('posts', $this->post->all());
    }

    public function getModify() {
        return view('admin.posts.editForm');
    }

    public function postSave(StorePostRequest $request) {
        $this->post->title = Input::get('title');
        $this->post->content = Input::get('content');
        $this->post->slug = str_slug($this->post->title);
        $this->post->user_id = 0;
        $this->post->save();
    }

    public function getDelete($id) {

    }
}
