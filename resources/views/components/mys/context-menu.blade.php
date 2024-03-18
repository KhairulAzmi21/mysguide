<div x-data="{
    contextMenuOpen: false,
    contextMenuToggle: function(event) {
        this.contextMenuOpen = true;
        event.preventDefault();
        this.$refs.contextmenu.classList.add('opacity-0');
        let that = this;
        $nextTick(function() {
            that.calculateContextMenuPosition(event);
            that.calculateSubMenuPosition(event);
            that.$refs.contextmenu.classList.remove('opacity-0');
        });
    },
    calculateContextMenuPosition(clickEvent) {
        if (window.innerHeight < clickEvent.clientY + this.$refs.contextmenu.offsetHeight) {
            this.$refs.contextmenu.style.top = (window.innerHeight - this.$refs.contextmenu.offsetHeight) + 'px';
        } else {
            this.$refs.contextmenu.style.top = clickEvent.clientY + 'px';
        }
        if (window.innerWidth < clickEvent.clientX + this.$refs.contextmenu.offsetWidth) {
            this.$refs.contextmenu.style.left = (clickEvent.clientX - this.$refs.contextmenu.offsetWidth) + 'px';
        } else {
            this.$refs.contextmenu.style.left = clickEvent.clientX + 'px';
        }
    },
    calculateSubMenuPosition(clickEvent) {
        let submenus = document.querySelectorAll('[data-submenu]');
        let contextMenuWidth = this.$refs.contextmenu.offsetWidth;
        for (let i = 0; i < submenus.length; i++) {
            if (window.innerWidth < (clickEvent.clientX + contextMenuWidth + submenus[i].offsetWidth)) {
                submenus[i].classList.add('left-0', '-translate-x-full');
                submenus[i].classList.remove('right-0', 'translate-x-full');
            } else {
                submenus[i].classList.remove('left-0', '-translate-x-full');
                submenus[i].classList.add('right-0', 'translate-x-full');
            }
            if (window.innerHeight < (submenus[i].previousElementSibling.getBoundingClientRect().top + submenus[i].offsetHeight)) {
                let heightDifference = (window.innerHeight - submenus[i].previousElementSibling.getBoundingClientRect().top) - submenus[i].offsetHeight;
                submenus[i].style.top = heightDifference + 'px';
            } else {
                submenus[i].style.top = '';
            }
        }
    }
}" x-init="$watch('contextMenuOpen', function(value) {
    if (value === true) { document.body.classList.add('overflow-hidden') } else { document.body.classList.remove('overflow-hidden') }
});
window.addEventListener('resize', function(event) { contextMenuOpen = false; });" @contextmenu="contextMenuToggle(event)"
    class="relative z-50 flex h-[150px] w-[300px] items-center justify-center rounded-md border border-dashed border-neutral-300 text-sm text-neutral-800">

    <span class="cursor-default text-neutral-400">Right click here</span>

    <template x-teleport="body">
        <div x-show="contextMenuOpen" @click.away="contextMenuOpen=false" x-ref="contextmenu"
            class="fixed z-50 w-64 min-w-[8rem] rounded-md border border-neutral-200/70 bg-white p-1 text-sm text-neutral-800 shadow-md"
            x-cloak>
            <div @click="contextMenuOpen=false"
                class="group relative flex cursor-default select-none items-center rounded px-2 py-1.5 pl-8 outline-none hover:bg-neutral-100 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                <span>Back</span>
                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘[</span>
            </div>
            <div @click="contextMenuOpen=false"
                class="group relative flex cursor-default select-none items-center rounded px-2 py-1.5 pl-8 outline-none hover:bg-neutral-100 data-[disabled]:pointer-events-none data-[disabled]:opacity-50"
                data-disabled>
                <span>Forward</span>
                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘]</span>
            </div>
            <div @click="contextMenuOpen=false"
                class="group relative flex cursor-default select-none items-center rounded px-2 py-1.5 pl-8 outline-none hover:bg-neutral-100 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                <span>Reload</span>
                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘R</span>
            </div>
            <div class="group relative">
                <div
                    class="flex cursor-default select-none items-center rounded px-2 py-1.5 pl-8 outline-none hover:bg-neutral-100">
                    <span>More Tools</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="ml-auto h-4 w-4">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
                <div data-submenu
                    class="invisible absolute right-0 top-0 mr-1 translate-x-full opacity-0 duration-200 ease-out group-hover:visible group-hover:mr-0 group-hover:opacity-100">
                    <div
                        class="animate-in slide-in-from-left-1 z-50 w-48 min-w-[8rem] overflow-hidden rounded-md border bg-white p-1 shadow-md">
                        <div @click="contextMenuOpen=false"
                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 text-sm outline-none hover:bg-neutral-100 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            Save Page As...<span
                                class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘S</span></div>
                        <div @click="contextMenuOpen=false"
                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 text-sm outline-none hover:bg-neutral-100 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            Create Shortcut...</div>
                        <div @click="contextMenuOpen=false"
                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 text-sm outline-none hover:bg-neutral-100 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            Name Window...</div>
                        <div class="-mx-1 my-1 h-px bg-neutral-200"></div>
                        <div @click="contextMenuOpen=false"
                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 text-sm outline-none hover:bg-neutral-100 data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            Developer Tools</div>
                    </div>
                </div>
            </div>
            <div class="-mx-1 my-1 h-px bg-neutral-200"></div>
            <div x-data="{ showBookmarks: true }" @click="showBookmarks=!showBookmarks; contextMenuOpen=false"
                class="relative flex cursor-default select-none items-center rounded py-1.5 pl-8 pr-2 outline-none hover:bg-neutral-100 data-[disabled]:opacity-50">
                <span x-show="showBookmarks" class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="h-4 w-4">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg></span>
                <span>Show Bookmarks Bar</span>
                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘⇧B</span>
            </div>
            <div x-data="{ showFullUrl: false }" @click="showFullUrl=!showFullUrl; contextMenuOpen=false"
                class="relative flex cursor-default select-none items-center rounded py-1.5 pl-8 pr-2 outline-none hover:bg-neutral-100 data-[disabled]:opacity-50">
                <span x-show="showFullUrl" class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="h-4 w-4">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg></span>
                <span>Show Full URLs</span>
            </div>
            <div class="-mx-1 my-1 h-px bg-neutral-200"></div>
            <div>
                <div class="text-foreground px-2 py-1.5 pl-8 text-sm font-semibold">People</div>
            </div>
            <div class="-mx-1 my-1 h-px bg-neutral-200"></div>
            <div x-data="{ contextMenuPeople: 'adam' }" class="relative">
                <div @click="contextMenuPeople='adam'; contextMenuOpen=false"
                    class="relative flex cursor-default select-none items-center rounded py-1.5 pl-8 pr-2 outline-none hover:bg-neutral-100 data-[disabled]:opacity-50">
                    <span x-show="contextMenuPeople=='adam'"
                        class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-2 w-2 fill-current">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg></span>
                    <span>Adam Wathan</span>
                </div>
                <div @click="contextMenuPeople='caleb'; contextMenuOpen=false"
                    class="relative flex cursor-default select-none items-center rounded py-1.5 pl-8 pr-2 outline-none hover:bg-neutral-100 data-[disabled]:opacity-50">
                    <span x-show="contextMenuPeople=='caleb'"
                        class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-2 w-2 fill-current">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg></span>
                    <span>Caleb Porzio</span>
                </div>
            </div>
        </div>
    </template>
</div>
