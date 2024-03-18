<x-app-layout>
    <x-slot:header>Dah makan nasi</x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-2xl px-6 lg:px-8">
            <div
                class="overflow-hidden bg-slate-300 p-6 text-gray-900 shadow-sm dark:bg-gray-800 dark:text-gray-100 sm:rounded-lg">

                <div class="flex flex-col gap-9 rounded-xl border border-neutral-300 bg-white px-4 py-4">
                    <div class="flex justify-between gap-3">
                        <div class="flex gap-3">
                            <span
                                class="inline-block bg-gradient-to-r from-[#1BBABC] to-primary-500 bg-clip-text font-semibold text-transparent">
                                Approval
                            </span>
                            <div
                                class="inline-flex h-6 w-6 items-center justify-center rounded-md bg-green-600 text-xs font-semibold text-white ring-1 ring-inset ring-gray-500/10">
                                25
                            </div>
                        </div>
                        <div class="md-auto">
                            <div class="relative" x-data="{
                                dropdownOpen: false,
                                sortBy: 'Todays',
                            }">
                                <div class="flex flex-row items-center gap-1 rounded-md border border-primary-500 px-2 py-1 text-primary-500 caret-primary-300 hover:bg-neutral-200"
                                    @click="dropdownOpen=true">
                                    <span class="text-xs font-semibold" x-text="sortBy"></span>
                                    @svg('arrow-down')
                                </div>
                                <div x-cloak x-show="dropdownOpen" @click.away="dropdownOpen=false"
                                    x-transition:enter="ease-out duration-100" x-transition:enter-start="-translate-y-2"
                                    x-transition:enter-end="translate-y-0"
                                    class="w-30 absolute -top-0.5 left-10 z-50 mt-6 -translate-x-1/2">
                                    <div
                                        class="mt-1 rounded-md border border-neutral-200/70 bg-white p-1 text-neutral-700 shadow-md">
                                        <a @click="sortBy = 'Todays';dropdownOpen=false"
                                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 text-sm outline-none transition-colors hover:bg-neutral-200 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            <span>Today</span>
                                        </a>
                                        <a @click="sortBy = 'Weekly';dropdownOpen=false"
                                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 text-sm outline-none transition-colors hover:bg-neutral-200 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            <span>Weekly</span>
                                        </a>
                                        <a @click="sortBy = 'Monthly';dropdownOpen=false"
                                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 text-sm outline-none transition-colors hover:bg-neutral-200 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            <span>Monthly</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid gap-3">
                        <div
                            class="relative flex items-center gap-3 rounded-lg border border-neutral-300 px-3 py-4 text-sm font-semibold text-primary-500">
                            @svg('leave', 'w-7 h-7')
                            Leave
                            <div
                                class="absolute -right-[0.07rem] -top-[0.07rem] inline-flex h-7 w-7 items-center justify-center rounded-bl rounded-tr-lg bg-neutral-300 text-sm font-semibold text-green-500">
                                23
                            </div>
                        </div>
                        <div class="relative h-14 rounded-lg border border-neutral-200 bg-white">
                            <div class="absolute left-[12px] top-[12px] inline-flex items-center justify-start gap-3">
                                <div class="flex items-start justify-start gap-2.5">
                                    @svg('payroll', 'h-6 w-6')
                                </div>
                                <div class="text-sm font-semibold text-blue-950">Leave</div>
                            </div>
                            <div
                                class="absolute right-[-1px] top-[-1px] h-6 w-6 rounded-bl rounded-tr-lg bg-neutral-200">
                                <div class="absolute left-[5px] top-[6px] text-xs font-semibold text-green-600">
                                    23</div>
                            </div>
                        </div>
                        <div
                            class="relative flex items-center gap-3 rounded-lg border border-neutral-300 px-3 py-4 text-sm font-semibold text-primary-500">
                            @svg('claim', 'w-7 h-7')
                            Financial Claim
                            <div
                                class="absolute -right-[0.07rem] -top-[0.07rem] inline-flex h-7 w-7 items-center justify-center rounded-bl rounded-tr-lg bg-neutral-300 text-sm font-semibold text-green-500">
                                23
                            </div>
                        </div>
                        <div
                            class="relative flex items-center gap-3 rounded-lg border border-neutral-300 px-3 py-4 text-sm font-semibold text-primary-500">
                            @svg('overtime', 'w-7 h-7')
                            Overtime
                            <div
                                class="absolute -right-[0.07rem] -top-[0.07rem] inline-flex h-7 w-7 items-center justify-center rounded-bl rounded-tr-lg bg-neutral-300 text-sm font-semibold text-green-500">
                                6
                            </div>
                        </div>
                        <div
                            class="relative flex items-center gap-3 rounded-lg border border-neutral-300 px-3 py-4 text-sm font-semibold text-primary-500">
                            @svg('payroll', 'w-7 h-7')
                            Payroll
                            <div
                                class="absolute -right-[0.07rem] -top-[0.07rem] inline-flex h-7 w-7 items-center justify-center rounded-bl rounded-tr-lg bg-neutral-300 text-xs font-semibold text-red-500">
                                12
                            </div>
                        </div>
                        <div
                            class="relative flex items-center gap-3 rounded-lg border border-neutral-300 px-3 py-4 font-semibold text-primary-500">
                            @svg('voucher', 'w-7 h-7')
                            Payment Voucher
                            <div
                                class="absolute -right-[0.07rem] -top-[0.07rem] inline-flex h-7 w-7 items-center justify-center rounded-bl rounded-tr-lg bg-neutral-300 text-xs font-semibold text-green-500">
                                100
                            </div>
                        </div>
                        <div
                            class="relative flex items-center gap-3 rounded-lg border border-neutral-300 px-3 py-4 font-semibold text-primary-500">
                            @svg('timeoff', 'w-7 h-7')
                            Time Off
                            <div
                                class="absolute -right-[0.07rem] -top-[0.07rem] inline-flex h-7 w-7 items-center justify-center rounded-bl rounded-tr-lg bg-neutral-300 text-xs font-semibold text-red-500">
                                23
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
