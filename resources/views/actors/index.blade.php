@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="popular-actors">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Actors</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularActors as $actor)                
                
                <div class="actor mt-8">
                    <a href="/actors/actor{{$actor['id']}}">
                        <img src="{{ $actor['profile_path'] }}" alt="Profile Image" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                    <div class="mt-2">
                        <a href="/actors/actor{{$actor['id']}}" class="text-lg hover:text-grey-300">{{ $actor['name'] }}</a>
                        <div class="text-sm truncate text-gray-400">{{$actor['known_for']}}
                        </div>
                    </div>
                </div>                
            @endforeach
        </div> 
    </div> <!-- End of Popular Actors Section -->

    <div class="page-load-status my-8">
        <div class="justify-center">
            <div class="infinite-scroll-request spinner my-8 text-4xl"></div>
        </div>
    </div>

    {{-- <div class="flex justify-between mt-16">
        @if($previous)
            <a href="/actors/page/{{$previous}}">Previous</a>
        @else 
            <div></div>
        @endif

        @if($next)
            <a href="/actors/page/{{$next}}">Next</a>
         @else 
            <div></div>
        @endif
        
    </div> --}}

</div>
@endsection

@section('scripts')
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    let elem = document.querySelector('.grid');
    let infScroll = new InfiniteScroll( elem, {
    // options
    path: '/actors/page/@{{#}}',
    append: '.actor',
    status: '.page-load-status',
    history: false,
});
</script>
@endsection