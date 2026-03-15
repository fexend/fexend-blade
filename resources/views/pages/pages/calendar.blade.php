<?php
use function Laravel\Folio\name;
name('pages.calendar');
?>

<x-main title="Calendar">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('pages.index')" title="Pages"></x-breadcrumb-item>
        <x-breadcrumb-item title="Calendar" active></x-breadcrumb-item>
    </x-breadcrumb>

    <div
        x-data="{
            currentDate: new Date(),
            view: 'month',
            selectedDate: null,
            showEventModal: false,
            events: [
                { date: '2026-03-03', title: 'Team Standup', color: 'primary' },
                { date: '2026-03-05', title: 'Product Launch', color: 'success' },
                { date: '2026-03-08', title: 'Design Review', color: 'warning' },
                { date: '2026-03-10', title: 'Board Meeting', color: 'danger' },
                { date: '2026-03-12', title: 'Sprint Planning', color: 'primary' },
                { date: '2026-03-15', title: 'Client Call', color: 'success' },
                { date: '2026-03-18', title: 'Code Freeze', color: 'warning' },
                { date: '2026-03-20', title: 'Release Day', color: 'success' },
                { date: '2026-03-22', title: 'Q1 Review', color: 'danger' },
                { date: '2026-03-25', title: 'Team Outing', color: 'primary' },
                { date: '2026-03-28', title: 'Budget Review', color: 'warning' },
            ],
            get monthName() {
                return this.currentDate.toLocaleString('default', { month: 'long' });
            },
            get year() {
                return this.currentDate.getFullYear();
            },
            prevMonth() {
                this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() - 1, 1);
            },
            nextMonth() {
                this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, 1);
            },
            goToday() {
                this.currentDate = new Date();
            },
            get calendarDays() {
                const year = this.currentDate.getFullYear();
                const month = this.currentDate.getMonth();
                const firstDay = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const daysInPrevMonth = new Date(year, month, 0).getDate();
                const days = [];

                for (let i = firstDay - 1; i >= 0; i--) {
                    days.push({ day: daysInPrevMonth - i, currentMonth: false, date: null });
                }
                for (let d = 1; d <= daysInMonth; d++) {
                    const dateStr = year + '-' + String(month + 1).padStart(2, '0') + '-' + String(d).padStart(2, '0');
                    days.push({ day: d, currentMonth: true, date: dateStr });
                }
                const remaining = 42 - days.length;
                for (let i = 1; i <= remaining; i++) {
                    days.push({ day: i, currentMonth: false, date: null });
                }
                return days;
            },
            getEventsForDate(dateStr) {
                if (!dateStr) return [];
                return this.events.filter(e => e.date === dateStr);
            },
            isToday(dateStr) {
                if (!dateStr) return false;
                const today = new Date();
                const todayStr = today.getFullYear() + '-' + String(today.getMonth() + 1).padStart(2, '0') + '-' + String(today.getDate()).padStart(2, '0');
                return dateStr === todayStr;
            }
        }"
    >
        <!-- Calendar Header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <div class="flex items-center gap-3">
                <button @click="prevMonth()" class="button button-sm p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300" aria-label="Previous month">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </button>
                <h1 class="text-xl font-bold text-slate-900 dark:text-slate-100" x-text="monthName + ' ' + year"></h1>
                <button @click="nextMonth()" class="button button-sm p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-600 dark:text-slate-300" aria-label="Next month">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 6l6 6l-6 6" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center gap-2">
                <button @click="goToday()" class="button border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700 px-3 py-1.5 text-sm rounded-lg">
                    Today
                </button>
                <div class="flex border border-slate-200 dark:border-slate-700 rounded-lg overflow-hidden">
                    <button @click="view = 'month'" :class="view === 'month' ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700'" class="px-3 py-1.5 text-sm font-medium transition-colors">Month</button>
                    <button @click="view = 'week'" :class="view === 'week' ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700'" class="px-3 py-1.5 text-sm font-medium transition-colors border-l border-slate-200 dark:border-slate-700">Week</button>
                    <button @click="view = 'day'" :class="view === 'day' ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700'" class="px-3 py-1.5 text-sm font-medium transition-colors border-l border-slate-200 dark:border-slate-700">Day</button>
                </div>
                <button class="button button-primary flex items-center gap-1.5 px-3 py-1.5 text-sm rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                    Add Event
                </button>
            </div>
        </div>

        <!-- Calendar Grid -->
        <div class="card overflow-hidden">
            <!-- Day Headers -->
            <div class="grid grid-cols-7 border-b border-slate-200 dark:border-slate-700">
                <template x-for="day in ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']" :key="day">
                    <div class="py-2 text-center text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wide" x-text="day"></div>
                </template>
            </div>

            <!-- Calendar Days Grid -->
            <div class="grid grid-cols-7">
                <template x-for="(dayObj, index) in calendarDays" :key="index">
                    <div
                        class="min-h-[90px] sm:min-h-[110px] p-1.5 border-b border-r border-slate-100 dark:border-slate-700/50 relative"
                        :class="{
                            'bg-slate-50 dark:bg-slate-800/50': !dayObj.currentMonth,
                            'hover:bg-slate-50 dark:hover:bg-slate-700/20 cursor-pointer': dayObj.currentMonth
                        }"
                    >
                        <span
                            class="inline-flex w-7 h-7 items-center justify-center rounded-full text-sm font-medium"
                            :class="{
                                'text-slate-300 dark:text-slate-600': !dayObj.currentMonth,
                                'bg-primary text-white': isToday(dayObj.date),
                                'text-slate-700 dark:text-slate-200': dayObj.currentMonth && !isToday(dayObj.date)
                            }"
                            x-text="dayObj.day"
                        ></span>

                        <div class="mt-1 space-y-0.5">
                            <template x-for="event in getEventsForDate(dayObj.date)" :key="event.title">
                                <div
                                    class="px-1.5 py-0.5 rounded text-xs font-medium truncate"
                                    :class="{
                                        'bg-primary/10 text-primary dark:bg-primary/20 dark:text-primary-dark': event.color === 'primary',
                                        'bg-success/10 text-success dark:bg-success/20 dark:text-success-dark': event.color === 'success',
                                        'bg-warning/10 text-warning dark:bg-warning/20 dark:text-warning-dark': event.color === 'warning',
                                        'bg-danger/10 text-danger dark:bg-danger/20 dark:text-danger-dark': event.color === 'danger'
                                    }"
                                    x-text="event.title"
                                ></div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Event Legend -->
        <div class="flex flex-wrap items-center gap-4 mt-4">
            <span class="flex items-center gap-1.5 text-sm text-slate-600 dark:text-slate-400">
                <span class="w-3 h-3 rounded-full bg-primary"></span> General
            </span>
            <span class="flex items-center gap-1.5 text-sm text-slate-600 dark:text-slate-400">
                <span class="w-3 h-3 rounded-full bg-success dark:bg-success-dark"></span> Milestones
            </span>
            <span class="flex items-center gap-1.5 text-sm text-slate-600 dark:text-slate-400">
                <span class="w-3 h-3 rounded-full bg-warning dark:bg-warning-dark"></span> Deadlines
            </span>
            <span class="flex items-center gap-1.5 text-sm text-slate-600 dark:text-slate-400">
                <span class="w-3 h-3 rounded-full bg-danger dark:bg-danger-dark"></span> Meetings
            </span>
        </div>
    </div>
</x-main>
