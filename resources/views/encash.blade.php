<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Encash') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-0">
                    <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Available Rebates: {{ $rebates }}
                    </h1>

                    <section aria-labelledby="summary-heading" class="mt-10">
                        <h2 id="summary-heading" class="sr-only">Encashment </h2>
                        <div>
                            <dl class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <dt class="text-base font-medium text-gray-900">Total</dt>
                                    <dd class="ml-4 text-base font-medium text-gray-900">
                                        ₱{{ $transaction->total }}
                                    </dd>
                                </div>
                            </dl>
                            <p class="mt-1 text-sm text-gray-500">
                                Pick-up Location: <span class="font-medium">Nearest Stockist Depot</span>
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                                Method of Payment: <span class="font-medium">Cash</span>
                            </p>
                        </div>

                        <div class="mt-10">
                            <button disabled type="submit"
                                class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                {{ ucfirst($transaction->status) }}
                            </button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
