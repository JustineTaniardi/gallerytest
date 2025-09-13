{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
<style>
/* Hilangkan navbar bawaan Jetstream/Breeze */
body > div > nav:first-of-type,
body > header:first-of-type,
body > div > header:first-of-type { display:none !important; }

main > div.py-12 { padding:0 !important; }
main > div.py-12 > div.max-w-7xl { max-width:100% !important; padding:0 !important; margin:0 !important; }
main > div.py-12 > div.max-w-7xl > div { background:transparent !important; box-shadow:none !important; border:0 !important; }

.sidebar-scroll::-webkit-scrollbar { width: 4px; }
.sidebar-scroll::-webkit-scrollbar-track { background: #f1f5f9; }
.sidebar-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }

html { scroll-behavior: smooth; }
</style>

<div x-data="{ open: true }" class="min-h-screen flex bg-gray-50">
    <!-- Sidebar -->
    <aside :class="open ? 'w-72' : 'w-16'"
           class="fixed inset-y-0 left-0 z-40 bg-white shadow-md transition-all duration-300 flex flex-col">
        <!-- Logo + Toggle -->
        <div class="h-16 px-4 flex items-center justify-between">
            <div class="flex items-center gap-3" x-show="open" x-transition.opacity>
                <img src="{{ asset('img/logo.jpg') }}" class="h-8 w-8 rounded-lg" alt="logo">
                <span class="text-lg font-bold text-gray-900">JJJ gallery</span>
            </div>
            <button @click="open = !open"
                    class="h-10 w-10 rounded-lg hover:bg-gray-100 flex items-center justify-center transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 transition-transform duration-300"
                     :class="open ? '' : 'rotate-180'" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L4.414 10l3.293 3.293a1 1 0 010 1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
        </div>

        <!-- Scrollable Sidebar Content -->
        <div class="flex-1 overflow-y-auto sidebar-scroll px-4 pb-4 space-y-8">
            <!-- Main -->
            <div>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 mb-3" x-show="open">Main</p>
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/>
                            </svg>
                            <span x-show="open" x-transition>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 16v.01M12 8v4"/>
                            </svg>
                            <span x-show="open" x-transition>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="3" y="3" width="7" height="7" rx="1"/>
                                <rect x="14" y="3" width="7" height="7" rx="1"/>
                                <rect x="14" y="14" width="7" height="7" rx="1"/>
                                <rect x="3" y="14" width="7" height="7" rx="1"/>
                            </svg>
                            <span x-show="open" x-transition>Blog</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Features -->
            <div>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 mb-3" x-show="open">Features</p>
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium bg-blue-50 text-blue-700 border-r-2 border-blue-700">
                            <svg class="h-5 w-5 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14"/>
                                <path d="M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span x-show="open" x-transition>Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <span x-show="open" x-transition>Favorite</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Profile -->
        <div class="p-4 border-t border-gray-200 space-y-2">
            <div class="rounded-lg bg-gray-50 p-3 flex items-center gap-3">
                <img class="h-10 w-10 rounded-full object-cover ring-2 ring-gray-200"
                     src="{{ asset('img/profile.jpg') }}" alt="profile">
                <div class="text-sm leading-tight flex-1 min-w-0" x-show="open" x-transition>
                    <div class="font-semibold text-gray-900 truncate">{{ auth()->user()->name ?? 'Yoo Dami' }}</div>
                    <div class="text-gray-500 truncate text-xs">{{ auth()->user()->email ?? 'yookestroo@gmail.com' }}</div>
                </div>
            </div>
            <a href="{{ url('/profile') }}" class="block px-3 py-2.5 rounded-lg text-sm text-gray-700 hover:bg-gray-50">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2.5 rounded-lg text-sm text-red-600 hover:bg-red-50">
                    Log Out
                </button>
            </form>
        </div>
    </aside>

    <!-- Main -->
    <main :class="open ? 'ml-72' : 'ml-16'" class="transition-all duration-300 flex-1">
        <!-- Topbar -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 sticky top-0 z-30">
            <span class="text-gray-600 text-sm">Keep Learning</span>
            <div class="flex-1 max-w-md mx-8">
                <input class="w-full rounded-full bg-gray-50 border border-gray-200 pl-10 pr-4 py-2 text-sm outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Search for anything...">
            </div>
            <img class="h-8 w-8 rounded-full object-cover ring-2 ring-gray-200" src="{{ asset('img/profile.jpg') }}" alt="profile">
        </header>

        <!-- Hero -->
        <section class="relative w-full min-h-screen flex items-center justify-center">
            <img src="{{ asset('img/landing_background.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="Background">
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="relative z-10 text-center text-white px-6">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">One place for all your<br class="hidden md:block"> school memories.</h1>
                <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto mb-8">Find, store, and share every captured moment in one simple gallery.</p>
                <div class="flex justify-center gap-4">
                    <a href="#features" class="rounded-lg bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 font-semibold shadow-lg">View Gallery</a>
                    <a href="#" class="rounded-lg bg-white/10 hover:bg-white/20 text-white px-6 py-3 font-semibold border border-white/30 backdrop-blur-sm">Learn More →</a>
                </div>
            </div>
        </section>

        <!-- Key Features -->
        <section id="features" class="bg-gray-50 py-16 px-6 text-center">
            <h2 class="text-3xl font-bold mb-10">Key Features</h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div><h3 class="font-semibold mb-2">Easy Uploads</h3><p>Quickly upload your artwork with our intuitive interface.</p></div>
                <div><h3 class="font-semibold mb-2">Curated Collections</h3><p>Browse expertly curated collections with a wide range of themes.</p></div>
                <div><h3 class="font-semibold mb-2">Community Showcase</h3><p>Connect with a global audience and share your art journey.</p></div>
            </div>
        </section>

        <!-- Blog -->
        <section class="bg-white py-16 px-6">
            <h2 class="text-3xl font-bold text-center mb-10">From Our Blog</h2>
            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <div class="rounded-lg shadow-md overflow-hidden bg-white">
                    <img src="{{ asset('img/sample_blog_1.jpg') }}" alt="Blog 1">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">The Rise of Digital Art</h3>
                        <p class="text-gray-600 text-sm">Explore how digital art is reshaping creativity.</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-md overflow-hidden bg-white">
                    <img src="{{ asset('img/sample_blog_2.jpg') }}" alt="Blog 2">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">The Future of Galleries</h3>
                        <p class="text-gray-600 text-sm">Discover how online galleries bring art to everyone.</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-md overflow-hidden bg-white">
                    <img src="{{ asset('img/sample_blog_3.jpg') }}" alt="Blog 3">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Creative Collaboration</h3>
                        <p class="text-gray-600 text-sm">Learn tips to share, get feedback, and grow together.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</x-app-layout>
