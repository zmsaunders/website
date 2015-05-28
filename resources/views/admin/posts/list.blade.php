@if( ! $posts->isEmpty())
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
    @endforeach
@else
    <h2>No Posts</h2>
@endif

<a class="button" href="{{ URL::route('admin.post.create') }}">New Post</a>
