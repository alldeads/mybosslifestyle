<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-0">
                    <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>

                    @if(count($carts->toArray()) > 0)
                    <form class="mt-12">
                        <section aria-labelledby="cart-heading">
                            <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

                            @foreach($carts as $cart)
                                <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
                                    <li class="flex py-6">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset($cart->product->image) }}"
                                                alt="Front side of mint cotton t-shirt with wavey lines pattern."
                                                class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
                                        </div>

                                        <div class="ml-4 flex flex-1 flex-col sm:ml-6">
                                            <div>
                                                <div class="flex justify-between">
                                                    <h4 class="text-sm">
                                                        <a href="#" class="font-medium text-gray-700 hover:text-gray-800">
                                                            {{ $cart->product->name }}
                                                        </a>
                                                    </h4>
                                                    <p class="ml-4 text-sm font-medium text-gray-900">₱{{ number_format($cart->total, '2', '.', ',', ) }}</p>
                                                </div>
                                                <p class="mt-1 text-sm text-gray-500">{{ $cart->product->price }}</p>
                                                <p class="mt-1 text-sm text-gray-500">{{ $cart->quantity }}</p>
                                            </div>

                                            <div class="mt-4 flex flex-1 items-end justify-between">
                                                <p class="flex items-center space-x-2 text-sm text-gray-700">
                                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span>In stock</span>
                                                </p>
                                                <div class="ml-4">
                                                    <button type="button"
                                                        class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                                        <span>Remove</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        </section>
                    </form>

                    <form method="POST" action="{{ route('cart.submit') }}">
                        @csrf
                        <!-- Order summary -->
                        <section aria-labelledby="summary-heading" class="mt-10">
                            <h2 id="summary-heading" class="sr-only">Order summary</h2>

                            <div>
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                                        <dd class="ml-4 text-base font-medium text-gray-900">₱{{ auth()->user()->cart_total() }}</dd>
                                    </div>
                                </dl>
                                <p class="mt-1 text-sm text-gray-500">Cash payment upon pick up.</p>
                            </div>

                            <div class="mt-10">
                                <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                    Checkout
                                </button>
                            </div>

                            <div class="mt-6 text-center text-sm">
                                <p>
                                    or
                                    <a href="{{ route('products') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        Continue Shopping
                                        <span aria-hidden="true"> &rarr;</span>
                                    </a>
                                </p>
                            </div>
                        </section>
                    </form>
                    @else
                        <div class="mt-4 border-l-4 border-yellow-400 bg-yellow-50 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">
                                        You have no items.
                                        <a href="{{ route('products') }}" class="font-medium text-yellow-700 underline hover:text-yellow-600">Continue Shopping.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
