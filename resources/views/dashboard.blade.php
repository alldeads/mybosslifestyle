<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900">
                <div class="mx-auto max-w-7xl">
                    <div class="grid grid-cols-1 gap-px bg-white/5 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Points</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->points }}</span>
                            </p>
                        </div>
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Claimed Rewards</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->redeems()->count() }}</span>
                            </p>
                        </div>
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Downlines</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">30</span>
                            </p>
                        </div>
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Referral Code</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->referral }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
