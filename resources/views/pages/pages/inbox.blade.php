<?php
use function Laravel\Folio\name;
name('pages.inbox');
?>

<x-main title="Inbox">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('pages.index')" title="Pages"></x-breadcrumb-item>
        <x-breadcrumb-item title="Inbox" active></x-breadcrumb-item>
    </x-breadcrumb>

    <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-6">Inbox</h1>

    <!-- Inbox Layout -->
    <div
        class="card overflow-hidden"
        x-data="{
            selectedConv: 0,
            newMessage: '',
            conversations: [
                {
                    id: 0,
                    name: 'Alice Johnson',
                    avatar: 'https://ui-avatars.com/api/?name=Alice+Johnson&background=615fff&color=fff',
                    lastMessage: 'Sure, let me check that report and get back to you.',
                    time: '10:42 AM',
                    unread: 2,
                    online: true,
                    messages: [
                        { id: 1, text: 'Hey! Did you get a chance to review the Q3 report?', sent: false, time: '10:30 AM' },
                        { id: 2, text: 'Yes, I looked at it briefly. There are a few numbers I want to double-check.', sent: true, time: '10:35 AM' },
                        { id: 3, text: 'Sure, let me check that report and get back to you.', sent: false, time: '10:42 AM' },
                    ]
                },
                {
                    id: 1,
                    name: 'Bob Martinez',
                    avatar: 'https://ui-avatars.com/api/?name=Bob+Martinez&background=10b981&color=fff',
                    lastMessage: 'The deployment is scheduled for Friday at 2 PM.',
                    time: '9:15 AM',
                    unread: 0,
                    online: false,
                    messages: [
                        { id: 1, text: 'When is the next deployment window?', sent: true, time: '9:00 AM' },
                        { id: 2, text: 'The deployment is scheduled for Friday at 2 PM.', sent: false, time: '9:15 AM' },
                        { id: 3, text: 'Perfect, I will make sure the team is ready.', sent: true, time: '9:18 AM' },
                    ]
                },
                {
                    id: 2,
                    name: 'Clara Nguyen',
                    avatar: 'https://ui-avatars.com/api/?name=Clara+Nguyen&background=f59e0b&color=fff',
                    lastMessage: 'Can you join the standup at 9 AM tomorrow?',
                    time: 'Yesterday',
                    unread: 1,
                    online: true,
                    messages: [
                        { id: 1, text: 'Hi! Are you available for a quick call?', sent: false, time: 'Yesterday 3:00 PM' },
                        { id: 2, text: 'Sure, what time works for you?', sent: true, time: 'Yesterday 3:05 PM' },
                        { id: 3, text: 'Can you join the standup at 9 AM tomorrow?', sent: false, time: 'Yesterday 3:10 PM' },
                        { id: 4, text: 'Will do!', sent: true, time: 'Yesterday 3:12 PM' },
                    ]
                },
                {
                    id: 3,
                    name: 'David Kim',
                    avatar: 'https://ui-avatars.com/api/?name=David+Kim&background=ef4444&color=fff',
                    lastMessage: 'Invoice #1042 has been sent to the client.',
                    time: 'Mon',
                    unread: 0,
                    online: false,
                    messages: [
                        { id: 1, text: 'David, did you send the invoice yet?', sent: true, time: 'Mon 11:00 AM' },
                        { id: 2, text: 'Just finalizing it now.', sent: false, time: 'Mon 11:15 AM' },
                        { id: 3, text: 'Invoice #1042 has been sent to the client.', sent: false, time: 'Mon 11:30 AM' },
                    ]
                },
                {
                    id: 4,
                    name: 'Eva Chen',
                    avatar: 'https://ui-avatars.com/api/?name=Eva+Chen&background=8b5cf6&color=fff',
                    lastMessage: 'The new design mockups are ready for review.',
                    time: 'Sun',
                    unread: 0,
                    online: true,
                    messages: [
                        { id: 1, text: 'The new design mockups are ready for review.', sent: false, time: 'Sun 2:00 PM' },
                        { id: 2, text: 'Great! I will check them this evening.', sent: true, time: 'Sun 2:30 PM' },
                        { id: 3, text: 'No rush, let me know your thoughts when ready.', sent: false, time: 'Sun 2:45 PM' },
                    ]
                }
            ],
            sendMessage() {
                if (this.newMessage.trim() === '') return;
                const now = new Date();
                const time = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
                this.conversations[this.selectedConv].messages.push({
                    id: this.conversations[this.selectedConv].messages.length + 1,
                    text: this.newMessage,
                    sent: true,
                    time: time
                });
                this.conversations[this.selectedConv].lastMessage = this.newMessage;
                this.newMessage = '';
            }
        }"
    >
        <div class="flex h-[calc(100vh-12rem)] min-h-[500px]">
            <!-- Conversation List -->
            <div class="w-full md:w-80 flex-shrink-0 border-r border-slate-200 dark:border-slate-700 flex flex-col" :class="selectedConv !== null ? 'hidden md:flex' : 'flex'">
                <!-- Search -->
                <div class="p-4 border-b border-slate-200 dark:border-slate-700">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>
                        <input type="search" placeholder="Search conversations..." class="input w-full pl-9 text-sm" />
                    </div>
                </div>

                <!-- Conversation Items -->
                <div class="flex-1 overflow-y-auto">
                    <template x-for="(conv, index) in conversations" :key="conv.id">
                        <button
                            @click="selectedConv = index"
                            class="w-full flex items-start gap-3 p-4 text-left hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors border-b border-slate-100 dark:border-slate-700/50"
                            :class="selectedConv === index ? 'bg-primary/5 dark:bg-primary/10 border-l-2 border-l-primary' : ''"
                        >
                            <div class="relative flex-shrink-0">
                                <img :src="conv.avatar" :alt="conv.name" class="w-10 h-10 rounded-full" />
                                <span
                                    class="absolute bottom-0 right-0 w-3 h-3 rounded-full border-2 border-white dark:border-slate-800"
                                    :class="conv.online ? 'bg-success dark:bg-success-dark' : 'bg-slate-300 dark:bg-slate-600'"
                                ></span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="font-medium text-sm text-slate-900 dark:text-slate-100 truncate" x-text="conv.name"></span>
                                    <span class="text-xs text-slate-400 dark:text-slate-500 flex-shrink-0 ml-2" x-text="conv.time"></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="text-xs text-slate-500 dark:text-slate-400 truncate" x-text="conv.lastMessage"></p>
                                    <span
                                        x-show="conv.unread > 0"
                                        class="ml-2 flex-shrink-0 w-5 h-5 rounded-full bg-primary text-white text-xs flex items-center justify-center"
                                        x-text="conv.unread"
                                    ></span>
                                </div>
                            </div>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Message Thread -->
            <div class="flex-1 flex flex-col" :class="selectedConv !== null ? 'flex' : 'hidden md:flex'">
                <!-- Message Header -->
                <div class="flex items-center gap-3 px-4 py-3 border-b border-slate-200 dark:border-slate-700">
                    <button
                        @click="selectedConv = null"
                        class="md:hidden p-1 rounded hover:bg-slate-100 dark:hover:bg-slate-700"
                        aria-label="Back to conversations"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-500" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </button>
                    <div class="relative flex-shrink-0">
                        <img :src="conversations[selectedConv].avatar" :alt="conversations[selectedConv].name" class="w-9 h-9 rounded-full" />
                        <span
                            class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full border-2 border-white dark:border-slate-800"
                            :class="conversations[selectedConv].online ? 'bg-success dark:bg-success-dark' : 'bg-slate-300 dark:bg-slate-600'"
                        ></span>
                    </div>
                    <div>
                        <p class="font-semibold text-sm text-slate-900 dark:text-slate-100" x-text="conversations[selectedConv].name"></p>
                        <p class="text-xs" :class="conversations[selectedConv].online ? 'text-success dark:text-success-dark' : 'text-slate-400 dark:text-slate-500'" x-text="conversations[selectedConv].online ? 'Online' : 'Offline'"></p>
                    </div>
                    <div class="ml-auto flex items-center gap-2">
                        <button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-500 dark:text-slate-400" aria-label="Call">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg>
                        </button>
                        <button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-500 dark:text-slate-400" aria-label="More options">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Messages -->
                <div class="flex-1 overflow-y-auto p-4 space-y-4">
                    <template x-for="msg in conversations[selectedConv].messages" :key="msg.id">
                        <div :class="msg.sent ? 'flex justify-end' : 'flex justify-start'">
                            <div :class="msg.sent ? 'max-w-xs lg:max-w-md' : 'max-w-xs lg:max-w-md'">
                                <div
                                    class="px-4 py-2.5 rounded-2xl text-sm"
                                    :class="msg.sent
                                        ? 'bg-primary text-white rounded-br-sm'
                                        : 'bg-slate-100 dark:bg-slate-700 text-slate-800 dark:text-slate-200 rounded-bl-sm'"
                                    x-text="msg.text"
                                ></div>
                                <p class="mt-1 text-xs text-slate-400 dark:text-slate-500" :class="msg.sent ? 'text-right' : 'text-left'" x-text="msg.time"></p>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Message Input -->
                <div class="px-4 py-3 border-t border-slate-200 dark:border-slate-700">
                    <form @submit.prevent="sendMessage()" class="flex items-center gap-2">
                        <input
                            type="text"
                            x-model="newMessage"
                            placeholder="Type a message..."
                            class="input flex-1 text-sm"
                        />
                        <button
                            type="submit"
                            class="button button-primary flex-shrink-0 px-4 py-2"
                            aria-label="Send message"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 14l11 -11" />
                                <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                            </svg>
                            <span class="ml-1">Send</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main>
