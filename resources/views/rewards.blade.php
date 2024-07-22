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
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Rewards</h2>

                        <p class="text-sm font-medium text-rose-600">{{ auth()->user()->getAvailablePoints() }} points</p>
                    </div>

                    <div class="relative mt-8">
                        <div class="relative -mb-6 w-full overflow-x-auto pb-6">
                            <ul role="list"
                                class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                                @foreach ($items as $reward)
                                    <li class="mt-2 inline-flex w-64 flex-col text-center lg:w-auto" style="opacity: {{ auth()->user()->getAvailablePoints() < $reward->points ? '0.3' : '1' }}">
                                        <form method="POST" action="{{ route('rewards.claim') }}">
                                            @csrf
                                            <input type="hidden" name="reward" value="{{ $reward->id }}" />
                                            <div class="group relative">
                                                <div
                                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                                    <img src="{{ $reward->image }}" alt="{{ $reward->bio }}"
                                                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                                                </div>
                                                <div class="mt-6">
                                                    <p class="text-sm text-gray-500">New</p>
                                                    <h3 class="mt-1 font-semibold text-gray-900">
                                                        <a href="#">
                                                            <span class="absolute inset-0"></span>
                                                            {{ $reward->name }}
                                                        </a>
                                                    </h3>
                                                    <p class="mt-1 text-gray-900">{{ number_format($reward->points, 0) }} points</p>
                                                </div>

                                                @if(auth()->user()->getAvailablePoints() >= $reward->points)
                                                    <div class="mt-6">
                                                        <a onclick="event.preventDefault(); this.closest('form').submit();"
                                                            class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200 cursor-pointer">
                                                            Claim<span class="sr-only">, {{ $reward->name }}</span>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </form>
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
