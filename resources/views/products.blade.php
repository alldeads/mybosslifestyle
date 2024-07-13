<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                        @foreach ($products as $product)
                            <form method="POST" action="{{ route('cart.store') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                <div>
                                    <div class="relative">
                                        <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                            <img src="{{ asset($product->image) }}"
                                                alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="relative mt-4">
                                            <h3 class="text-sm font-medium text-gray-900">{{ $product->name }}</h3>
                                            <p class="mt-1 text-sm text-gray-500">{{ \Str::limit($product->bio, 40) }}</p>
                                        </div>
                                        <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                            <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                            </div>
                                            <p class="relative text-lg font-semibold text-white">₱{{ $product->dprice }}</p>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <div class="mb-2">
                                            <label for="quantity" class="sr-only">Quantity</label>
                                            <input type="number" name="quantity" id="quantity"
                                                class="block w-full text-right rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                placeholder="Enter quantity" value="1">
                                        </div>
                                        <a onclick="event.preventDefault(); this.closest('form').submit();" class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200 cursor-pointer">
                                            Add to bag<span class="sr-only">, {{ $product->name }}</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
