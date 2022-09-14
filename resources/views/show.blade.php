@extends('layouts.main')

@section('content')

    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/parasite.jpeg" alt="parasite" class="w-64 md:w-96">
           <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2> 
                <div class="div flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl pretium fusce. Eget mi proin sed libero enim sed faucibus turpis in. Pulvinar mattis nunc sed blandit.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>

                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>

           </div>
        </div>   
    </div><!-- end movie-info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

        <div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

            <div class="div mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray:300">parasite</a>
            </div>

            <div class="div flex items-center text-gray-400 text-sm mt-1">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Feb 20, 2020</span>
            </div>

            <div class="text-gray-400 text-sm">
                Action, Thriller, Comedy
            </div>
        </div>

        <div class="mt-8">
            <a href="#">
                <img src="/img/joker.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>

        <div class="div mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray:300">parasite</a>
        </div>

        <div class="div flex items-center text-gray-400 text-sm mt-1">
            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
            <span class="ml-1">85%</span>
            <span class="mx-2">|</span>
            <span>Feb 20, 2020</span>
        </div>

        <div class="text-gray-400 text-sm">
            Action, Thriller, Comedy
        </div>
    </div>

    <div class="mt-8">
        <a href="#">
            <img src="/img/sonic.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>

    <div class="div mt-2">
        <a href="#" class="text-lg mt-2 hover:text-gray:300">parasite</a>
    </div>

    <div class="div flex items-center text-gray-400 text-sm mt-1">
        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
        <span class="ml-1">85%</span>
        <span class="mx-2">|</span>
        <span>Feb 20, 2020</span>
    </div>

    <div class="text-gray-400 text-sm">
        Action, Thriller, Comedy
    </div>
    </div>

    <div class="mt-8">
                <a href="#">
                    <img src="/img/frozen2.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

            <div class="div mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray:300">parasite</a>
            </div>

            <div class="div flex items-center text-gray-400 text-sm mt-1">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Feb 20, 2020</span>
            </div>

            <div class="text-gray-400 text-sm">
                Action, Thriller, Comedy
            </div>
        </div>
        <div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

            <div class="div mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray:300">parasite</a>
            </div>

            <div class="div flex items-center text-gray-400 text-sm mt-1">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Feb 20, 2020</span>
            </div>

            <div class="text-gray-400 text-sm">
                Action, Thriller, Comedy
            </div>
        </div>              
    </div> 
</div> <!-- End of Popular Movies Section -->

@endsection