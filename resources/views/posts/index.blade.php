<!-- resources/views/posts/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    @forelse ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <small>By {{ $post->user->name }}</small>
        </div>
    @empty
        <p>No posts found.</p>
    @endforelse

    <a href="{{ route('posts.create') }}">Create New Post</a>
</body>
</html>
