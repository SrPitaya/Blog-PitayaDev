<x-layout meta-title="Create new post" meta-description="Form to create a new post">
    <h1>{{ __('Create a new post') }}</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.compoposts.form-fields')
        <button type="submit">{{ __('Create post') }}</button>
    </form>
</x-layout>
