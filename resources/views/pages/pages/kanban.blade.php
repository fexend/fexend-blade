<?php
use function Laravel\Folio\name;
name('pages.kanban');
?>

<x-main title="Kanban">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('pages.index')" title="Pages"></x-breadcrumb-item>
        <x-breadcrumb-item title="Kanban" active></x-breadcrumb-item>
    </x-breadcrumb>

    <div
        x-data="{
            addCardColumn: null,
            newCardTitle: '',
            newCardDesc: '',
            columns: [
                {
                    id: 'backlog',
                    title: 'Backlog',
                    color: 'bg-slate-500',
                    cards: [
                        { id: 1, title: 'Research competitor pricing', desc: 'Analyze pricing models from top 5 competitors', priority: 'low', tags: ['Research', 'Marketing'], assignee: 'https://ui-avatars.com/api/?name=Alice+J&background=615fff&color=fff' },
                        { id: 2, title: 'Set up CI/CD pipeline', desc: 'Configure GitHub Actions for automated testing and deployment', priority: 'high', tags: ['DevOps'], assignee: 'https://ui-avatars.com/api/?name=Bob+M&background=10b981&color=fff' },
                        { id: 3, title: 'Design onboarding flow', desc: 'Create wireframes and prototype for new user onboarding', priority: 'medium', tags: ['Design', 'UX'], assignee: 'https://ui-avatars.com/api/?name=Clara+N&background=f59e0b&color=fff' },
                        { id: 4, title: 'API rate limiting', desc: 'Implement rate limiting for all public endpoints', priority: 'medium', tags: ['Backend'], assignee: 'https://ui-avatars.com/api/?name=David+K&background=ef4444&color=fff' },
                    ]
                },
                {
                    id: 'inprogress',
                    title: 'In Progress',
                    color: 'bg-primary',
                    cards: [
                        { id: 5, title: 'User authentication refactor', desc: 'Migrate to JWT-based auth with refresh tokens', priority: 'high', tags: ['Backend', 'Security'], assignee: 'https://ui-avatars.com/api/?name=Eva+C&background=8b5cf6&color=fff' },
                        { id: 6, title: 'Dashboard analytics widgets', desc: 'Build revenue, user, and conversion rate widgets', priority: 'medium', tags: ['Frontend'], assignee: 'https://ui-avatars.com/api/?name=Alice+J&background=615fff&color=fff' },
                        { id: 7, title: 'Mobile responsive navbar', desc: 'Fix navigation issues on small screens', priority: 'low', tags: ['Frontend', 'CSS'], assignee: 'https://ui-avatars.com/api/?name=Bob+M&background=10b981&color=fff' },
                    ]
                },
                {
                    id: 'review',
                    title: 'In Review',
                    color: 'bg-warning',
                    cards: [
                        { id: 8, title: 'Payment gateway integration', desc: 'Stripe integration for subscription billing', priority: 'high', tags: ['Backend', 'Payments'], assignee: 'https://ui-avatars.com/api/?name=Clara+N&background=f59e0b&color=fff' },
                        { id: 9, title: 'Email notification system', desc: 'Transactional email templates using Resend', priority: 'medium', tags: ['Backend'], assignee: 'https://ui-avatars.com/api/?name=David+K&background=ef4444&color=fff' },
                        { id: 10, title: 'Unit test coverage', desc: 'Improve test coverage to 80% across all services', priority: 'low', tags: ['Testing'], assignee: 'https://ui-avatars.com/api/?name=Eva+C&background=8b5cf6&color=fff' },
                    ]
                },
                {
                    id: 'done',
                    title: 'Done',
                    color: 'bg-success',
                    cards: [
                        { id: 11, title: 'Project scaffolding', desc: 'Initial project setup with Vite + React', priority: 'high', tags: ['DevOps'], assignee: 'https://ui-avatars.com/api/?name=Alice+J&background=615fff&color=fff' },
                        { id: 12, title: 'Database schema design', desc: 'PostgreSQL schema with migrations', priority: 'high', tags: ['Backend', 'DB'], assignee: 'https://ui-avatars.com/api/?name=Bob+M&background=10b981&color=fff' },
                        { id: 13, title: 'Design system tokens', desc: 'Color, typography, and spacing token setup', priority: 'medium', tags: ['Design'], assignee: 'https://ui-avatars.com/api/?name=Clara+N&background=f59e0b&color=fff' },
                    ]
                }
            ],
            moveCard(cardId, fromColId, toColId) {
                const fromCol = this.columns.find(c => c.id === fromColId);
                const toCol = this.columns.find(c => c.id === toColId);
                const cardIndex = fromCol.cards.findIndex(c => c.id === cardId);
                if (cardIndex > -1 && fromCol && toCol) {
                    const card = fromCol.cards.splice(cardIndex, 1)[0];
                    toCol.cards.push(card);
                }
            },
            addCard(colId) {
                if (!this.newCardTitle.trim()) return;
                const col = this.columns.find(c => c.id === colId);
                if (col) {
                    col.cards.push({
                        id: Date.now(),
                        title: this.newCardTitle,
                        desc: this.newCardDesc,
                        priority: 'medium',
                        tags: [],
                        assignee: 'https://ui-avatars.com/api/?name=New+User&background=94a3b8&color=fff'
                    });
                }
                this.newCardTitle = '';
                this.newCardDesc = '';
                this.addCardColumn = null;
            }
        }"
    >
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100">Kanban Board</h1>
            <button class="button button-primary flex items-center gap-1.5 text-sm px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14"/><path d="M5 12l14 0"/></svg>
                Add Task
            </button>
        </div>

        <!-- Kanban Board -->
        <div class="flex gap-4 overflow-x-auto pb-4">
            <template x-for="col in columns" :key="col.id">
                <div class="flex-shrink-0 w-72">
                    <!-- Column Header -->
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full" :class="col.color"></span>
                            <h3 class="font-semibold text-slate-800 dark:text-slate-100 text-sm" x-text="col.title"></h3>
                            <span class="badge badge-secondary-soft text-xs" x-text="col.cards.length"></span>
                        </div>
                        <button
                            @click="addCardColumn = col.id"
                            class="p-1 rounded hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300"
                            :aria-label="'Add card to ' + col.title"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14"/><path d="M5 12l14 0"/></svg>
                        </button>
                    </div>

                    <!-- Cards List -->
                    <div class="space-y-3 min-h-[200px]">
                        <template x-for="card in col.cards" :key="card.id">
                            <div class="card p-4 cursor-pointer hover:shadow-md transition-shadow">
                                <!-- Priority -->
                                <div class="flex items-center justify-between mb-2">
                                    <span
                                        class="badge text-xs"
                                        :class="{
                                            'badge-danger-soft': card.priority === 'high',
                                            'badge-warning-soft': card.priority === 'medium',
                                            'badge-success-soft': card.priority === 'low'
                                        }"
                                        x-text="card.priority.charAt(0).toUpperCase() + card.priority.slice(1)"
                                    ></span>
                                    <!-- Move to next column button -->
                                    <div class="relative" x-data="{ moveOpen: false }">
                                        <button
                                            @click="moveOpen = !moveOpen"
                                            class="p-1 rounded hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-400"
                                            aria-label="Move card"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/></svg>
                                        </button>
                                        <div x-show="moveOpen" @click.away="moveOpen = false" class="absolute right-0 top-6 w-40 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg shadow-lg z-20 py-1">
                                            <template x-for="targetCol in columns.filter(c => c.id !== col.id)" :key="targetCol.id">
                                                <button
                                                    @click="moveCard(card.id, col.id, targetCol.id); moveOpen = false"
                                                    class="w-full text-left px-3 py-1.5 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700"
                                                    x-text="'Move to ' + targetCol.title"
                                                ></button>
                                            </template>
                                        </div>
                                    </div>
                                </div>

                                <!-- Title & Description -->
                                <h4 class="font-medium text-sm text-slate-900 dark:text-slate-100 mb-1" x-text="card.title"></h4>
                                <p class="text-xs text-slate-500 dark:text-slate-400 mb-3 line-clamp-2" x-text="card.desc"></p>

                                <!-- Tags -->
                                <div class="flex flex-wrap gap-1 mb-3">
                                    <template x-for="tag in card.tags" :key="tag">
                                        <span class="badge badge-secondary-soft text-xs" x-text="tag"></span>
                                    </template>
                                </div>

                                <!-- Assignee -->
                                <div class="flex items-center justify-between">
                                    <img :src="card.assignee" alt="Assignee" class="w-6 h-6 rounded-full" />
                                </div>
                            </div>
                        </template>

                        <!-- Add Card Form -->
                        <div x-show="addCardColumn === col.id" x-transition class="card p-3 border-2 border-dashed border-primary/30">
                            <input
                                type="text"
                                x-model="newCardTitle"
                                placeholder="Card title..."
                                class="input w-full text-sm mb-2"
                                @keydown.enter="addCard(col.id)"
                                @keydown.escape="addCardColumn = null"
                            />
                            <textarea
                                x-model="newCardDesc"
                                placeholder="Description (optional)"
                                rows="2"
                                class="textarea w-full text-sm mb-2"
                            ></textarea>
                            <div class="flex items-center gap-2">
                                <button @click="addCard(col.id)" class="button button-primary text-xs px-3 py-1.5 rounded">Add</button>
                                <button @click="addCardColumn = null" class="button text-xs px-3 py-1.5 rounded border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">Cancel</button>
                            </div>
                        </div>

                        <!-- Empty state -->
                        <div
                            x-show="col.cards.length === 0 && addCardColumn !== col.id"
                            class="flex flex-col items-center justify-center py-8 text-slate-400 dark:text-slate-500"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-2 opacity-50" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"/><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"/></svg>
                            <p class="text-xs">No cards</p>
                        </div>
                    </div>

                    <!-- Add Card Button -->
                    <button
                        x-show="addCardColumn !== col.id"
                        @click="addCardColumn = col.id"
                        class="mt-3 w-full flex items-center justify-center gap-1.5 py-2 rounded-lg border border-dashed border-slate-300 dark:border-slate-600 text-slate-500 dark:text-slate-400 hover:border-primary hover:text-primary dark:hover:text-primary-dark transition-colors text-sm"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14"/><path d="M5 12l14 0"/></svg>
                        Add card
                    </button>
                </div>
            </template>
        </div>
    </div>
</x-main>
