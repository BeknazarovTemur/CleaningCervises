<div>
    <h1>Name:{{ $post->user->name }}</h1>
    <h5>You created post - {{ $post->created_at }}</h5>
    <p>Post id: {{ $post->id }}</p>
    <div>{{ $post->title }}</div>
    <div>{{ $post->short_content }}</div>
    <div>{{ $post->content }}</div>
    <strong>Thanks.</strong>
</div>
