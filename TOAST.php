
$this->dispatch('toast', title: 'Loan Created', message: 'Loan created successfully!', type: 'success');



<div x-data="{
    show: false,
    title: '',
    message: '',
    {{-- type: '', --}}
    timeout: null,

    showToast(title, message, type) {
        clearTimeout(this.timeout);
        this.title = title;
        this.message = message;

        this.show = true;

        this.timeout = setTimeout(() => this.show = false, 3000);
    }
}" x-init="$wire.on('toast', (event) => { showToast(event.title, event.message); })" class="relative">

********************
********************
********************

CREATE

<div x-show="show" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300 transform"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
        class="fixed bottom-4 right-4 bg-gray-800 text-white px-6 py-3 rounded-md shadow-lg z-50 flex items-center justify-between"
        style="display: none;">
        <div class="flex items-center">
            <div class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-3 h-3 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div>
                <strong class="block text-sm font-semibold" x-text="title"></strong>
                <span class="block text-xs" x-text="message"></span>
            </div>
        </div>
        <button x-on:click="show = false" class="text-gray-400 hover:text-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>


UPDATE TOAST


<!-- Toast -->
    <div x-show="show" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300 transform"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
        class="fixed bottom-4 right-4 bg-gray-800 text-white px-6 py-3 rounded-md shadow-lg z-50 flex items-center justify-between"
        style="display: none;">
        <div class="flex items-center">
            <div class="w-5 h-5 rounded-full bg-blue-500 flex items-center justify-center mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-3 h-3 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div>
                <strong class="block text-sm font-semibold" x-text="title"></strong>
                <span class="block text-xs" x-text="message"></span>
            </div>
        </div>
        <button x-on:click="show = false" class="text-gray-400 hover:text-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>


DELETE TOAST


<!-- Toast -->
    <div x-show="show"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300 transform"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-2"
        class="fixed bottom-4 right-4 bg-red-600 text-white px-6 py-3 rounded-md shadow-lg z-50 flex items-center justify-between"
        style="display: none;">
        <div class="flex items-center">
            <div class="w-5 h-5 rounded-full bg-white flex items-center justify-center mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-3 h-3 text-red-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <div>
                <strong class="block text-sm font-semibold" x-text="title"></strong>
                <span class="block text-xs" x-text="message"></span>
            </div>
        </div>
        <button x-on:click="show = false" class="text-white hover:text-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
