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
                            <p class="text-sm font-medium leading-6 text-gray-400">Personal Points</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->getPersonalPoints() }}</span>
                            </p>
                        </div>

                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Pass Up Points</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->getPassUpPoints() }}</span>
                            </p>
                        </div>

                        @if(auth()->user()->is_stockist)
                            <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                                <p class="text-sm font-medium leading-6 text-gray-400">Points Credit</p>
                                <p class="mt-2 flex items-baseline gap-x-2">
                                    <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->stockist_points }}</span>
                                </p>
                            </div>
                        @else
                            <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                                <p class="text-sm font-medium leading-6 text-gray-400">Claimed Rewards</p>
                                <p class="mt-2 flex items-baseline gap-x-2">
                                    <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->redeems()->count() }}</span>
                                </p>
                            </div>
                        @endif

                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Company Share Bonus</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ $setting->share_bonus }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900 mt-2">
                <div class="mx-auto max-w-7xl">
                    <div class="grid grid-cols-1 gap-px bg-white/5 sm:grid-cols-2 lg:grid-cols-4">

                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Builder Bonus</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <marquee><span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->getBuilderBonus() }}
                                        left</span></marquee>
                            </p>
                        </div>

                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Direct Referrals</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">
                                    {{ auth()->user()->direct_referrals()->count() }}
                                </span>
                            </p>
                        </div>

                        @if(auth()->user()->is_stockist)
                            <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                                <p class="text-sm font-medium leading-6 text-gray-400">Claimed Rewards</p>
                                <p class="mt-2 flex items-baseline gap-x-2">
                                    <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->redeems()->count() }}</span>
                                </p>
                            </div>
                        @endif

                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">3 Levels Partner</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">{{ auth()->user()->downlines() }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900 mt-2">
                <div class="mx-auto max-w-7xl">
                    <div class="grid grid-cols-1 gap-px bg-white/5 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="bg-gray-900 px-4 py-6 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Referral Link</p>
                            <p class="mt-2 flex flex-1 items-baseline gap-x-2">
                                <span class="text-xs font-semibold tracking-tight text-white referral">
                                    {{-- <button onclick="copyText()" type="button"
                                        class="rounded bg-white col-2 px-2 py-1 text-xs font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                        Copy Link
                                    </button> --}}
                                    {{ auth()->user()->referral_link }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input style="visibility: hidden;" id="referral-link" type="text" value="{{ auth()->user()->referral_link }}">
    </div>

    <script>
        function copyText() {
            // Get the text field
            var copyText = document.getElementById("referral-link");

            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Successfully copied.");
        }
    </script>
</x-app-layout>
