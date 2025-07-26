<x-app-layout>
    <div class="form-container">
        <h1 class="page-title">Create Post</h1>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <label for="title">Title of your Post:</label>
            <input type="text" name="title" id="title" required>

            <label for="content">Content:</label>
            <textarea name="content" id="content" required></textarea>

            <button type="submit" class="button">Save</button>
            <button type="submit" class="button">Publish</button>
        </form>
    </div>
</x-app-layout>
