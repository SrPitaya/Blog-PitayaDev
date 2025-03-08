<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>{{__('Edit post')}}:{{ $post->title }}</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        @include('posts.compoposts.form-fields')
        <button type="submit">{{__('Create post')}}</button>
    </form>
    <a href="{{ route('posts.index') }}">{{__('Back')}}</a>
</x-layout>
