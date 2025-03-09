<x-layout meta-title="Create new post" meta-description="Form to create a new post">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            {{ __('Create a new post') }}
        </h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            @include('posts.compoposts.form-fields')
            <div class="mt-6 flex items-center justify-center gap-x-6">
                <button type="submit"
                    class="rounded-full bg-green-600 p-4 text-sky-100 shadow-lg hover:bg-green-700 active:bg-green-800">
                    <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </button>

                <!-- Botón para volver a la lista de posts -->
                <a class="rounded-full bg-red-600 p-4 text-sky-100 shadow-lg hover:bg-red-700 active:bg-red-800"
                    href="{{ route('posts.index') }}">
                    <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </form>
    </div>
</x-layout>
