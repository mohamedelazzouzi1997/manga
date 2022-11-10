@extends('layouts.app')

@section('title')
    {{ $chapter->name.' - '.$manga->name.' manga online' }}
@endsection

@section('header')

@endsection

@section('links')
<!-- CSS only -->
@endsection

@section('styles')

@endsection

@section('content')
<header class="mx-auto mb-10">
    <h2 class="text-center text-5xl font-extrabold uppercase text-slate-900 dark:text-orange-100"><span class="border-b-8 border-gray-600 pb-1">{{ $chapter->name }}</span></h2>
</header>
<div class="container mb-20 h-full">
    <div class="my-5">

        @if ($previous != null)
        <a href="{{ route('client.show',['manga_name'=>$manga->slug,'slug' => $previous]) }}" class="inline-flex items-center py-2 px-4 text-sm font-medium border-r text-white bg-gray-800 rounded hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg aria-hidden="true" class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
            Prev
        </a>
        @endif
        @if ($next != null)
        @if ($previous == null)
            <span class="opacity-0">prev</span>
        @endif
        <!-- Buttons -->
        <a href="{{ route('client.show',['manga_name'=>$manga->slug,'slug' => $next]) }}" class=" float-right inline-flex items-center py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded border-0 border-l border-gray-700 hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            Next
            <svg aria-hidden="true" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
        @endif

    </div>
    <div class="dark:bg-slate-900 bg-white dark:text-gray-300 px-5 py-5 shadow-lg rounded">
            @foreach ($chapter->img as $chapter_image )
                <div class="mx-auto my-2">
                    <img class="mx-auto rounded" src="{{ asset('mangas/'.$manga->name.'/'.$chapter->slug.'/'.$chapter_image) }}" alt="">
                </div>
            @endforeach
    </div>
    <div class="my-5">

        @if ($previous != null)
        <a href="{{ route('client.show',['manga_name'=>$manga->slug,'slug' => $previous]) }}" class="inline-flex items-center py-2 px-4 text-sm font-medium border-r text-white bg-gray-800 rounded hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg aria-hidden="true" class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
            Prev
        </a>

        @endif
        @if ($next != null)
        <!-- Buttons -->
        <a href="{{ route('client.show',['manga_name'=>$manga->slug,'slug' => $next]) }}" class=" float-right inline-flex items-center py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded border-0 border-l border-gray-700 hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            Next
            <svg aria-hidden="true" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
        @endif

    </div>


</div>

@endsection

@section('scripts')

@endsection
