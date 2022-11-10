@extends('layouts.app')

@section('title')
    hell’s Paradise manga online
@endsection

@section('header')

@endsection

@section('links')
<!-- CSS only -->
@endsection

@section('styles')

@endsection

@section('content')
<div class="container mb-20 px-5 md:px-28 h-full">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
        <div class="md:col-span-3 dark:bg-slate-900 bg-white dark:text-gray-300 px-5 py-5 shadow-lg rounded">
            <header class="mx-auto">
                <h2 class="text-center text-3xl font-extrabold text-orange-500 uppercase hover:underline"><a href="{{ url('/') }}">{{ App\Models\Manga::first()->name; }} manga online</a></h2>
            </header>
            <div class="my-10">
                <div class="dark:text-orange-200 text-sky-900 text-lg">Manga Info :</div>
                <p class="font-sans my-2 dark:text-gray-50">Broke young man + chainsaw dog demon = Chainsaw Man.Broke young man + chainsaw dog demon = Chainsaw Man.</p>

                <div id="showmore" class="my-5 hidden">
                    <div class="dark:text-orange-200 text-sky-900 text-lg"> Synopsis :</div>
                    <div class="font-sans my-2 dark:text-gray-50">Broke young man + chainsaw dog demon = Chainsaw Man.Broke young man + chainsaw dog demon = Chainsaw Man.</div>
                    <div class="dark:text-orange-200 text-sky-900 text-lg">Type :  <span class="my-2 dark:text-green-500 text-md">manga</span></div>
                    <div class="dark:text-orange-200 text-sky-900 text-lg">Author : <span class="font-sans my-2 dark:text-gray-50">{{ $manga->author }}</span></div>

                    <div class="dark:text-orange-200 text-sky-900 text-lg">Realised in : <span class="font-sans my-2 dark:text-gray-50">{{ $manga->release_date }}</span></div>

                    <div class="dark:text-orange-200 text-sky-900 text-lg">Status : <span class="font-sans my-2 dark:text-green-500">Ongoing</span></div>
                    <div class="dark:text-orange-200 text-sky-900 text-lg mt-5">Serie Genre(s) :</div>
                    <div class="font-sans my-2 dark:text-gray-50">
                        <span class=" underline text-orange-500">Action-</span>
                        <span class=" underline text-blue-500">Adult-</span>
                        <span class=" underline text-red-500">Adventure-</span>
                        <span class=" underline text-indigo-500">Comedy-</span>
                        <span class=" underline text-rose-500">Drama-</span>
                        <span class=" underline text-cyan-500">Ecchi-</span>
                        <span class=" underline text-green-500">Horror -</span>
                        <span class=" underline text-yellow-500">Mature -</span>
                        <span class=" underline text-purple-500">Mystery-</span>
                        <span class=" underline text-pink-500">Psychological-</span>
                        <span class=" underline text-teal-500">Shounen-</span>
                        <span class=" underline text-lime-500">Supernatural-</span>
                        <span class=" underline text-stone-500">Tragedy</span>
                    </div>


                    <div class="dark:text-orange-200 text-sky-900 text-lg mt-5">Associated Names :</div>
                    <div class="font-sans my-2 dark:text-gray-50">
                        <span class="block ">Chain Saw Man</span>
                        <span class="block ">Chainsawman</span>
                        <span class="block ">Людина-бензопила</span>
                        <span class="block ">Человек-бензопила</span>
                        <span class="block ">رجل المنشار</span>
                        <span class="block ">មនុស្សរណា</span>
                        <span class="block ">チェンソーマン </span>
                        <span class="block ">电锯人 </span>
                        <span class="block ">鏈鋸人</span>
                        <span class="block ">電鋸人</span>
                        <span class="block ">체인쏘맨</span>
                    </div>
                </div>
                <div class="mx-auto text-center my-5">
                    <a href="javascript:;" onclick="showmore()" class="text-blue-500 hover:text-orange-900">show more <i id="arrowup" class="fa-solid fa-chevron-up fa-xs hidden"></i> <i id="arrowdown" class="fa-solid fa-chevron-down fa-xs"></i></a>
                </div>
            </div>
            <div class="dark:text-orange-200 text-sky-900 text-2xl my-10">All Chainsaw Man Chapters</div>
            <ul>
                @foreach ($chapters as $chapter )
                    <li class="border dark:border-gray-800 px-2 border-gray-100 py-2">
                        <i class="fa-solid fa-check"></i><a href="{{ route('client.show',['manga_name'=>$manga->slug,'slug'=>$chapter->slug]) }}" class="hover:text-orange-500 font-extrabold"> {{ $chapter->name }}</a>
                        <span class="ml-5 text-sm float-right text-gray-400">{{ $chapter->title }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="">
            <div class="flex-col space-y-5">
                <div class="px-5 py-5 dark:bg-slate-900 bg-white dark:text-gray-300 shadow-lg rounded">
                    <form method="get" action="{{ route('search') }}">

                        <h5 class="dark:text-orange-200 text-sky-900 text-xl mb-2">Chapters search</h5>
                            <div class="relative w-full">
                                <input type="search" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-orange-500" placeholder="Search...">
                                <button type="submit" class="absolute top-0 bottom-0 right-0 p-2.5 text-sm font-medium text-white bg-orange-700 rounded-r-lg border border-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                    </form>
                </div>
                <div class="px-5 py-5 dark:bg-slate-900 bg-white dark:text-gray-300 shadow-lg rounded">

                    <div class="w-full mx-auto">
                        <h4 class="dark:text-orange-200 text-sky-900 text-xl mb-2">Latest Chapters</h4>
                        <ul>
                            @foreach ($last_tree_chapters as $last_tree_chapter )
                            <li class="border dark:border-gray-800 px-2 border-gray-100 py-2 text-sm">
                                <i class="fa-solid fa-check"></i><a href="{{ route('client.show',['manga_name'=>$manga->slug,'slug'=>$last_tree_chapter->slug]) }}" class="hover:text-orange-500 font-extrabold"> {{ $last_tree_chapter->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:col-span-3 dark:bg-slate-900 bg-white dark:text-gray-300 px-5 py-5 shadow-lg rounded">
            <div class="mx-auto text-center">
                <h3 class="dark:text-orange-200 text-sky-900 text-2xl border-b pb-2">About</h3>
                <div class="mx-auto text-center">
                    <p class="text-center my-5">
                        Chainsaw Man is a Manga in (English/Raw) language, Japanese manga series written and illustrated by Tatsuki Fujimoto, english chapters have been translated and you can read them here. You are reading Chainsaw Man chapters on www.readchainsaw.online, fastest updating comic site. The Summary is
                    </p>
                    <p class="text-center">
                        Denji’s parents died and left behind a huge debt on Denji, because of that he spent his life in poverty. He works as a Devil hunter to earn daily wages and bread of the day. He has a demon dog and with his help, he hunts down the devil.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function showmore() {
        var element = document.getElementById("showmore");
        var arrowup = document.getElementById("arrowup");
        var arrowdown = document.getElementById("arrowdown");
        element.classList.toggle("hidden");
        arrowup.classList.toggle("hidden");
        arrowdown.classList.toggle("hidden");
    }
</script>
@endsection
