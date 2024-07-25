<!-- resources/views/posts/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="body">Body:</label>
        <textarea id="body" name="body" required></textarea>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
