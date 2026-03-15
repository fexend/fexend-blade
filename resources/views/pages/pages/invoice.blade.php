<?php
use function Laravel\Folio\name;
name('pages.invoice');
?>

<x-main title="Invoice">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('pages.index')" title="Pages"></x-breadcrumb-item>
        <x-breadcrumb-item title="Invoice" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Invoice Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
        <div class="flex items-center gap-3">
            <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100">INV-2024-001</h1>
            <span class="badge badge-success-soft">Paid</span>
        </div>
        <div class="flex items-center gap-2">
            <button class="button flex items-center gap-1.5 text-sm px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"/><path d="M7 11l5 5l5 -5"/><path d="M12 4l0 12"/></svg>
                Download PDF
            </button>
            <button class="button flex items-center gap-1.5 text-sm px-3 py-2 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"/><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"/><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"/></svg>
                Print
            </button>
            <button class="button button-primary flex items-center gap-1.5 text-sm px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"/><path d="M3 7l9 6l9 -6"/></svg>
                Send Invoice
            </button>
        </div>
    </div>

    <!-- Invoice Card -->
    <div class="card p-6 sm:p-8">
        <!-- From / To Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- From -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"/><path d="M3 7l9 6l9 -6"/></svg>
                    </div>
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-slate-500">From</span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-1">Fexend Inc.</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400">123 Design Street</p>
                <p class="text-sm text-slate-500 dark:text-slate-400">San Francisco, CA 94105</p>
                <p class="text-sm text-slate-500 dark:text-slate-400">United States</p>
                <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">billing@fexend.io</p>
                <p class="text-sm text-slate-500 dark:text-slate-400">+1 (555) 000-1234</p>
            </div>

            <!-- To -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-500 dark:text-slate-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0"/><path d="M9 8l1 0"/><path d="M9 12l1 0"/><path d="M9 16l1 0"/><path d="M14 8l1 0"/><path d="M14 12l1 0"/><path d="M14 16l1 0"/><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"/></svg>
                    </div>
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-slate-500">Bill To</span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-1">Acme Corporation</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400">Attn: Alice Johnson, CFO</p>
                <p class="text-sm text-slate-500 dark:text-slate-400">456 Business Ave, Suite 200</p>
                <p class="text-sm text-slate-500 dark:text-slate-400">New York, NY 10001</p>
                <p class="text-sm text-slate-500 dark:text-slate-400">United States</p>
                <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">alice@acmecorp.com</p>
            </div>
        </div>

        <!-- Invoice Meta -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8 p-4 bg-slate-50 dark:bg-slate-700/30 rounded-lg">
            <div>
                <p class="text-xs text-slate-400 dark:text-slate-500 mb-1">Invoice Number</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-slate-200">INV-2024-001</p>
            </div>
            <div>
                <p class="text-xs text-slate-400 dark:text-slate-500 mb-1">Invoice Date</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-slate-200">Jan 15, 2024</p>
            </div>
            <div>
                <p class="text-xs text-slate-400 dark:text-slate-500 mb-1">Due Date</p>
                <p class="text-sm font-semibold text-slate-800 dark:text-slate-200">Feb 15, 2024</p>
            </div>
            <div>
                <p class="text-xs text-slate-400 dark:text-slate-500 mb-1">Status</p>
                <span class="badge badge-success-soft text-xs">Paid</span>
            </div>
        </div>

        <!-- Line Items Table -->
        <div class="overflow-x-auto mb-6">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th class="text-left py-3 px-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700">#</th>
                        <th class="text-left py-3 px-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700">Item &amp; Description</th>
                        <th class="text-right py-3 px-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700">Qty</th>
                        <th class="text-right py-3 px-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700">Unit Price</th>
                        <th class="text-right py-3 px-4 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-slate-100 dark:border-slate-700/50">
                        <td class="py-4 px-4 text-sm text-slate-500 dark:text-slate-400">1</td>
                        <td class="py-4 px-4">
                            <p class="text-sm font-medium text-slate-800 dark:text-slate-200">UI/UX Design Services</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Dashboard redesign and component library</p>
                        </td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">40</td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">$150.00</td>
                        <td class="py-4 px-4 text-sm font-medium text-slate-800 dark:text-slate-200 text-right">$6,000.00</td>
                    </tr>
                    <tr class="border-b border-slate-100 dark:border-slate-700/50">
                        <td class="py-4 px-4 text-sm text-slate-500 dark:text-slate-400">2</td>
                        <td class="py-4 px-4">
                            <p class="text-sm font-medium text-slate-800 dark:text-slate-200">Frontend Development</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">React + Tailwind CSS implementation</p>
                        </td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">60</td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">$120.00</td>
                        <td class="py-4 px-4 text-sm font-medium text-slate-800 dark:text-slate-200 text-right">$7,200.00</td>
                    </tr>
                    <tr class="border-b border-slate-100 dark:border-slate-700/50">
                        <td class="py-4 px-4 text-sm text-slate-500 dark:text-slate-400">3</td>
                        <td class="py-4 px-4">
                            <p class="text-sm font-medium text-slate-800 dark:text-slate-200">Backend API Development</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">RESTful API with Node.js + PostgreSQL</p>
                        </td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">50</td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">$130.00</td>
                        <td class="py-4 px-4 text-sm font-medium text-slate-800 dark:text-slate-200 text-right">$6,500.00</td>
                    </tr>
                    <tr class="border-b border-slate-100 dark:border-slate-700/50">
                        <td class="py-4 px-4 text-sm text-slate-500 dark:text-slate-400">4</td>
                        <td class="py-4 px-4">
                            <p class="text-sm font-medium text-slate-800 dark:text-slate-200">QA &amp; Testing</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Manual and automated test suite</p>
                        </td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">20</td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">$100.00</td>
                        <td class="py-4 px-4 text-sm font-medium text-slate-800 dark:text-slate-200 text-right">$2,000.00</td>
                    </tr>
                    <tr class="border-b border-slate-100 dark:border-slate-700/50">
                        <td class="py-4 px-4 text-sm text-slate-500 dark:text-slate-400">5</td>
                        <td class="py-4 px-4">
                            <p class="text-sm font-medium text-slate-800 dark:text-slate-200">Project Management</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Sprint planning, client calls, and reporting</p>
                        </td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">15</td>
                        <td class="py-4 px-4 text-sm text-slate-700 dark:text-slate-300 text-right">$110.00</td>
                        <td class="py-4 px-4 text-sm font-medium text-slate-800 dark:text-slate-200 text-right">$1,650.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Totals -->
        <div class="flex justify-end mb-8">
            <div class="w-full sm:w-80">
                <div class="flex justify-between py-2 text-sm text-slate-600 dark:text-slate-400">
                    <span>Subtotal</span>
                    <span class="font-medium text-slate-800 dark:text-slate-200">$23,350.00</span>
                </div>
                <div class="flex justify-between py-2 text-sm text-slate-600 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700">
                    <span>Tax (10%)</span>
                    <span class="font-medium text-slate-800 dark:text-slate-200">$2,335.00</span>
                </div>
                <div class="flex justify-between py-3 text-base font-bold text-slate-900 dark:text-slate-100">
                    <span>Total</span>
                    <span class="text-primary dark:text-primary-dark">$25,685.00</span>
                </div>
            </div>
        </div>

        <!-- Payment Info & Notes -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-slate-200 dark:border-slate-700">
            <!-- Payment Info -->
            <div>
                <h4 class="text-sm font-semibold text-slate-800 dark:text-slate-200 mb-3">Payment Information</h4>
                <div class="space-y-1.5">
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500 dark:text-slate-400 w-28">Method:</span>
                        <span class="text-slate-700 dark:text-slate-300">Bank Transfer</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500 dark:text-slate-400 w-28">Account Name:</span>
                        <span class="text-slate-700 dark:text-slate-300">Fexend Inc.</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500 dark:text-slate-400 w-28">Account No:</span>
                        <span class="text-slate-700 dark:text-slate-300">****4892</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500 dark:text-slate-400 w-28">Routing No:</span>
                        <span class="text-slate-700 dark:text-slate-300">021000021</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="text-slate-500 dark:text-slate-400 w-28">Paid On:</span>
                        <span class="text-success dark:text-success-dark font-medium">Feb 10, 2024</span>
                    </div>
                </div>
            </div>

            <!-- Notes -->
            <div>
                <h4 class="text-sm font-semibold text-slate-800 dark:text-slate-200 mb-3">Notes</h4>
                <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">
                    Thank you for your business! Payment is due within 30 days of invoice date. Please include the invoice number in your payment reference. For any billing inquiries, contact billing@fexend.io.
                </p>
                <div class="mt-4 p-3 rounded-lg bg-success/5 dark:bg-success/10 border border-success/20">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-success dark:text-success-dark" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"/><path d="M9 12l2 2l4 -4"/></svg>
                        <span class="text-xs font-medium text-success dark:text-success-dark">Payment received in full on Feb 10, 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>
