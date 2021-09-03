@auth
    <x-panel>
        <form method="POST" action="/post/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img class="rounded-full" src="https://i.pravatar.cc/100?u={{auth()->id()}}" width="40"
                     height="40" alt=""/>
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <x-form.textarea name="body" />

            <div class="flex justify-end mt-6 border-gray-200 pt-6">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">log in</a> to leave a comment.
    </p>
@endauth
