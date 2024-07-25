<!-- resources/views/posts/create.blade.php -->
<x-app-layout>
    <div class="container mt-5">
        <h1 class="mb-4" style="color: white">Create Post</h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label" style="color: white">Title:</label>
                <input type="text" class="form-control" id="title" name="title"  required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label" style="color: white">Body:</label>
                <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="color: white">Submit</button>
        </form>
    </div>
</x-app-layout>
