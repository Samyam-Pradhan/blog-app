<x-app-layout>
    <div class="form-container">
        <h1 class="page-title" id="title">{{ $post->title }}</h1>
        <p>{{ $post->body}}</p>

        <a href="{{ route('posts.index') }}" class="button">Back</a>
    </div>
</x-app-layout>
