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
    <aside :class="open ? 'w-72' : 'w-16'" class="fixed inset-y-0 left-0 z-40 bg-white shadow-md transition-all duration-300 flex flex-col">
        <!-- Logo + Swipe Everything (Toggle) -->
        <div class="h-20 px-4 flex flex-col justify-center gap-2 relative">
            <div class="flex items-center gap-3 mt-2">
                <img src="{{ asset('img/logo.jpg') }}" class="h-8 w-8 rounded-lg transition-all duration-300" alt="logo">
                <span class="text-lg font-bold text-gray-900 transition-all duration-300" x-show="open" x-transition.opacity>JJJ gallery</span>
            </div>
            <div class="w-full flex items-center mt-1">
                <button @click="open = !open" class="flex items-center gap-2 px-2 py-1 rounded bg-gray-100 text-xs text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 transition-transform duration-300" :class="open ? '' : 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span x-show="open" x-transition>Swipe Everything</span>
                </button>
            </div>
        </div>

        <!-- Sidebar Content -->
        <div class="flex-1 overflow-y-auto sidebar-scroll px-4 pb-4 flex flex-col justify-between">
            <div>
                <!-- Main -->
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 mb-3 mt-2" x-show="open">Main</p>
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <img src="{{ asset('img/icon_home.svg') }}" :class="open ? 'h-5 w-5' : 'h-7 w-7'" alt="Home">
                            <span x-show="open" x-transition>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <img src="{{ asset('img/icon_about.svg') }}" :class="open ? 'h-5 w-5' : 'h-7 w-7'" alt="About">
                            <span x-show="open" x-transition>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <img src="{{ asset('img/icon_blog.svg') }}" :class="open ? 'h-5 w-5' : 'h-7 w-7'" alt="Blog">
                            <span x-show="open" x-transition>Blog</span>
                        </a>
                    </li>
                </ul>

                <!-- Features -->
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider px-3 mb-3 mt-8" x-show="open">Features</p>
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium bg-blue-50 text-blue-700 border-r-2 border-blue-700">
                            <img src="{{ asset('img/icon_gallery.svg') }}" :class="open ? 'h-5 w-5' : 'h-7 w-7'" alt="Gallery">
                            <span x-show="open" x-transition>Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <img src="{{ asset('img/icon_favorite.svg') }}" :class="open ? 'h-5 w-5' : 'h-7 w-7'" alt="Favorite">
                            <span x-show="open" x-transition>Favorite</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Bottom Links -->
            <div class="flex flex-col gap-1 mt-8 mb-2">
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-gray-700 hover:bg-gray-50">
                    <img src="{{ asset('img/icon_settings.svg') }}" :class="open ? 'h-5 w-5' : 'h-7 w-7'" alt="Settings">
                    <span x-show="open" x-transition>Settings</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-gray-700 hover:bg-gray-50">
                    <img src="{{ asset('img/icon_help.svg') }}" :class="open ? 'h-5 w-5' : 'h-7 w-7'" alt="Help">
                    <span x-show="open" x-transition>Help</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg text-sm text-red-600 hover:bg-red-50">
                        <img src="{{ asset('img/icon_logout.svg') }}" :class="open ? 'h-5 w-5' : 'h-7 w-7'" alt="Log Out">
                        <span x-show="open" x-transition>Log Out</span>
                    </button>
                </form>
            </div>
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
            <h2 class="text-4xl font-extrabold mb-4">Key Features</h2>
            <p class="text-gray-400 text-lg mb-10 font-medium">Experience the best of ArtHub with our user-friendly features designed to enhance your artistic journey</p>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="flex flex-col items-center">
                    <span class="flex items-center justify-center h-16 w-16 rounded-full bg-gray-100 mb-4">
                        <img src="{{ asset('img/feature_upload.svg') }}" alt="Easy Uploads" class="h-8 w-8">
                    </span>
                    <h3 class="font-bold text-lg mb-2">Easy Uploads</h3>
                    <p class="text-gray-600 text-sm font-medium">Quickly upload your artwork with our intuitive interface. Share your creations with the world in just a few clicks.</p>
                </div>
                <div class="flex flex-col items-center">
                    <span class="flex items-center justify-center h-16 w-16 rounded-full bg-gray-100 mb-4">
                        <img src="{{ asset('img/feature_collections.svg') }}" alt="Curated Collections" class="h-8 w-8">
                    </span>
                    <h3 class="font-bold text-lg mb-2">Curated Collections</h3>
                    <p class="text-gray-600 text-sm font-medium">Browse through expertly curated collections featuring a wide range of artistic styles and themes.</p>
                </div>
                <div class="flex flex-col items-center">
                    <span class="flex items-center justify-center h-16 w-16 rounded-full bg-gray-100 mb-4">
                        <img src="{{ asset('img/feature_showcase.svg') }}" alt="Community Showcase" class="h-8 w-8">
                    </span>
                    <h3 class="font-bold text-lg mb-2">Community Showcase</h3>
                    <p class="text-gray-600 text-sm font-medium">Showcase your art to a global audience and connect with other artists. Get feedback, collaborate, and grow together.</p>
                </div>
            </div>
        </section>

        <!-- Blue Quote Section with Logo -->
        <section class="bg-[#2046C8] py-10 px-4">
            <div class="max-w-3xl mx-auto text-center flex flex-col items-center gap-4">
                
                <span class="block text-white text-2xl md:text-3xl font-semibold leading-snug">
                    <span class="font-bold">Photography</span>
                    <span class="font-normal"> is driven by a deep passion for </span>
                    <span class="font-bold">capturing life’s most precious moments</span>
                    <span class="font-normal"> with artistry and a touch of magic</span>
                </span>
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
