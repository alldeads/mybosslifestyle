<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genealogy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
                    <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Products</h2>
                    </div>

                    <div class="relative mt-8">
                        <div class="relative -mb-6 w-full overflow-x-auto pb-6">
                            <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                                @foreach ($products as $product)
                                    <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                        <div class="group relative">
                                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                                <img src="{{ $product->image }}"
                                                    alt="{{ $product->bio }}"
                                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                            <div class="mt-6">
                                                <p class="text-sm text-gray-500">New</p>
                                                <h3 class="mt-1 font-semibold text-gray-900">
                                                    <a href="#">
                                                        <span class="absolute inset-0"></span>
                                                        {{ $product->name }}
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-gray-900">₱{{ $product->price }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
