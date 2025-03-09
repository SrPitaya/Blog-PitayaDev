<div class="flex justify-center items-center">
    <div class="bg-white dark:bg-slate-800 shadow-md rounded-lg p-6 w-full max-w-lg">
        <div class="space-y-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8">
                <div class="col-span-full">
                    <label for="title" class="block text-xl font-semibold leading-tight text-slate-800 dark:text-slate-200">
                        {{ __('Title') }}:
                    </label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white dark:bg-slate-800 pl-3 outline-1 -outline-offset-1 outline-gray-300 dark:outline-slate-600 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-sky-600">
                            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}"
                                class="block w-full py-1.5 pr-3 pl-1 text-base text-gray-900 dark:text-slate-200 placeholder:text-gray-400 dark:placeholder:text-slate-500 focus:outline-none sm:text-sm/6">
                        </div>
                        @error('title')
                            <small style="color:crimson">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="body" class="block text-xl font-semibold leading-tight text-slate-800 dark:text-slate-200">
                        {{ __('Body') }}:
                    </label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white dark:bg-slate-800 pl-3 outline-1 -outline-offset-1 outline-gray-300 dark:outline-slate-600 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-sky-600">
                            <textarea id="body" name="body" rows="3"
                                class="block w-full py-1.5 pr-3 pl-1 text-base text-gray-900 dark:text-slate-200 placeholder:text-gray-400 dark:placeholder:text-slate-500 focus:outline-none sm:text-sm/6">{{ old('body', $post->body) }}</textarea>
                        </div>
                        @error('body')
                            <small style="color:crimson">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
