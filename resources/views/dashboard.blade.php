<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="grid gap-3 p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <x-mys.button icon="download">Export</x-mys.button>

                    </div>
                    <div class="flex items-center justify-center">

                        <x-mys.modal></x-mys.modal>
                        {{-- <x-mys.integration></x-mys.integration> --}}
                    </div>
                    <div class="flex items-center justify-center">
                        <x-mys.context-menu></x-mys.context-menu>
                    </div>
                    <div class="flex items-center justify-center">
                        <x-mys.slide-over></x-mys.slide-over>
                    </div>
                    <div class="flex items-center justify-center">
                        <x-mys.typing-effects></x-mys.typing-effects>
                    </div>
                    {{ __("You're logged in!") }}
                    <input type="text"
                        class="block w-full rounded bg-white/0 py-1.5 pe-3 ps-3 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-1 focus:ring-slate-600 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6">
                    <button
                        class="fi-btn fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md bg-custom-600 hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action focus relative inline-grid grid-flow-col items-center justify-center gap-1.5 rounded-lg bg-primary-600 px-3 py-2 text-sm font-semibold text-white shadow-sm outline-none transition duration-75 hover:bg-primary-500 focus-visible:ring-2">New
                        Order</button>
                    <input type="checkbox" class="cursor-pointer text-pink-700 focus:ring-0" checked>
                    <select
                        class="form-select rounded-lg border border-pink-500 px-4 py-3 ring-0 focus:border-pink-700 focus:ring-pink-700">
                        <option value="1">2</option>
                        <option value="1">2</option>
                        <option value="1">2</option>
                    </select>
                    <livewire:cubaan />
                    <section class="mx-auto max-w-lg px-4 py-12">
                        <img class="mx-auto sm:w-1/4" src="https://laravel.com/images/laracon.png" />
                        <h2 class="mt-2 text-center text-lg font-medium text-gray-800">This is where you’ll manage your
                            products</h2>
                        <p class="mt-1 text-center text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod maxime maiores consectetur
                            necessitatibus animi ea veniam optio eos! Id animi et excepturi earum aliquid deleniti.
                        </p>
                        <div
                            class="mt-4 flex flex-col items-center justify-center space-y-1 md:flex-row md:space-x-1 md:space-y-0">
                            <a href="#"
                                class="w-full rounded bg-purple-600 px-2 py-3 text-center font-medium text-white hover:bg-purple-500 md:w-auto">Request
                                access</a>
                            <a href="#"
                                class="w-full rounded bg-primary-600 px-2 py-3 text-center font-semibold text-white hover:bg-primary-500 md:w-auto">Import
                                products</a>
                        </div>

                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
