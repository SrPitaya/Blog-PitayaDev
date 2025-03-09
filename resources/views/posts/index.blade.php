<x-blog-layout meta-title="{{ __('Blog') }}" meta-description="{{ __('Blog page') }}">
    <div class="mx-auto mt-4 max-w-6xl">
        <!-- Título principal -->
        <h1 class="my-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            {{ __('Blog') }}
        </h1>

        <!-- Botón para crear un nuevo post -->
        @auth {{-- Solo se muestra si el usuario está autenticado --}}
            <div class="flex items-center justify-center">
                <a href="{{ route('posts.create') }}"
                    class="group rounded-full bg-sky-600 p-2 text-sky-100 shadow-lg duration-300 hover:bg-sky-700 active:bg-sky-800">
                    <svg class="h-6 w-6 duration-300 group-hover:rotate-12" fill="none" stroke-width="1.5"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                    </svg>
                </a>
            </div>
            <h2 class="p-2 text-center font-semibold leading-tight text-slate-800 dark:text-slate-200">
                {{ __('Create a new post') }}
            </h2>
        @endauth
    </div>

    <!-- Contenedor de los posts -->
    <div class="mx-auto mt-8 grid max-w-6xl gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <article class="flex flex-col overflow-hidden rounded bg-white shadow dark:bg-slate-900">
                <!-- Imagen del post -->
                <div class="h-52">
                    <a class="duration-300 hover:opacity-75">
                        <img class="h-full w-full object-cover object-center" src="https://picsum.photos/seed/{{ $post->id }}/1080"
                            alt="#" />
                    </a>
                </div>

                <!-- Contenido del post -->
                <div class="flex-1 space-y-3 p-5">
                    {{-- Categoría del post (comentado por ahora) --}}
                    {{-- <h3 class="text-sm font-semibold text-sky-500">
                    Desk and Office
                    </h3> --}}

                    <h2 class="text-xl font-semibold leading-tight text-slate-800 dark:text-slate-200">
                        <a class="hover:underline" href="{{ route('posts.show', $post) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="hidden text-slate-500 dark:text-slate-400 md:block">
                        {{ $post->body }}
                    </p>
                </div>

                {{-- Información del autor y fecha (comentado por ahora) --}}
                {{-- <div class="flex space-x-2 p-5">
                <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api?name=Roel Aufderehar"
                    alt="Roel Aufderehar" />
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400">
                        Roel Aufderehar
                    </span>
                    <span class="text-sm text-slate-500">
                        Mar 16, 2023
                    </span>
                </div>
                </div> --}}

                <!-- Botones de editar y eliminar -->
                @auth
                    <div class="flex items-center justify-end space-x-4 p-5">
                        <!-- Botón para editar el post -->
                        <a class="rounded-full bg-sky-600 p-3 text-sky-100 shadow-lg hover:bg-sky-700 active:bg-sky-800"
                            href="{{ route('posts.edit', $post) }}">
                            <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125">
                                </path>
                            </svg>
                        </a>

                        <!-- Botón para eliminar el post -->
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="rounded-full bg-red-600 p-3 text-red-100 shadow-lg hover:bg-red-700 active:bg-red-800">
                                <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                                    </path>
                                </svg>
                            </button>
                        </form>

                        <!-- Botón para visualizar el post -->
                        <a class="rounded-full bg-green-600 p-3 text-green-100 shadow-lg hover:bg-green-700 active:bg-green-800"
                            href="{{ route('posts.show', $post) }}">
                            <svg class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2 12s3 7 10 7 10-7 10-7-3-7-10-7-10 7-10 7Z" />
                                <circle cx="12" cy="12" r="3" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                @endauth
            </article>
        @endforeach
    </div>
</x-blog-layout>
