<x-app-layout>
    <div class="page-container">
        <div class="content-wrapper">

            <!-- Create Post Button -->
            <div class="create-button-container">
                <a href="{{ route('posts.create') }}" class="create-button">Create New Post</a>
            </div>

            <div class="post-list">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="post-item">
                            <h3 class="post-title">{{ $post->title }}</h3>
                            <p class="post-date">{{ $post->created_at->format('d M Y') }}</p>
                            <p class="post-content">{{ Str::limit($post->content, 150) }}</p>

                            <div class="post-actions">
                                <a href="{{ route('posts.show', $post->id) }}" class="action-link view-link">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="action-link edit-link">Edit</a>

                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-link delete-link">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                  
                    </div>
                @else
                    <p>No posts found.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
