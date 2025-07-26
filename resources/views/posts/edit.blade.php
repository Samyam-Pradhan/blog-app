<x-app-layout>
    <div class="form-container">
        <h1 class="page-title">Edit Post</h1>

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')

            <label for="title">Title:</label>
            <textarea name="title" id="title" required>{{ $post->title}}</textarea>

            <label for="content">Content:</label>
            <textarea name="content" id="content" required>{{ $post->body}}</textarea>

            <button type="submit" class="button">Update</button>
        </form>
    </div>
</x-app-layout>
