<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-0">
                    <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        View Order # {{ $transaction->reference_id }}
                    </h1>

                    @if(count($items->toArray()) > 0)
                        <section class="mt-2" aria-labelledby="cart-heading">
                            <h2 id="cart-heading" class="sr-only">Order Items</h2>

                            @foreach($items as $item)
                            <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
                                <li class="flex py-6">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset($item->product->image) }}"
                                            alt="Front side of mint cotton t-shirt with wavey lines pattern."
                                            class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
                                    </div>

                                    <div class="ml-4 flex flex-1 flex-col sm:ml-6">
                                        <div>
                                            <div class="flex justify-between">
                                                <h4 class="text-sm">
                                                    <a href="#" class="font-medium text-gray-700 hover:text-gray-800">
                                                        {{ $item->product->name }}
                                                    </a>
                                                </h4>
                                                <p class="ml-4 text-sm font-medium text-gray-900">₱{{
                                                    number_format($item->price * $item->quantity, '2', '.', ',', ) }}</p>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-500">{{ $item->price }}</p>
                                            <p class="mt-1 text-sm text-gray-500">{{ $item->quantity }}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                        </section>

                        <section aria-labelledby="summary-heading" class="mt-10">
                            <h2 id="summary-heading" class="sr-only">Order summary</h2>
                            <div>
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-base font-medium text-gray-900">Total</dt>
                                        <dd class="ml-4 text-base font-medium text-gray-900">
                                            ₱{{ $transaction->total }}
                                        </dd>
                                    </div>
                                </dl>
                                <p class="mt-1 text-sm text-gray-500">Cash payment upon pick up.</p>
                            </div>

                            <div class="mt-10">
                                <button disabled type="submit"
                                    class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                    {{ ucfirst($transaction->status) }}
                                </button>
                            </div>
                        </section>
                    @endif
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
