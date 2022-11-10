

@extends('layouts.admin')

@section('title')

@endsection

@section('links')

@endsection

@section('content')
<div class="mb-5 mt-5">
       <h1 class="text-3xl text-center font-bold text-gray-900 mb-10">Create chapter</h1>
</div>

<div class="block p-6 rounded-lg shadow-lg bg-white mx-auto mb-20">

@if ($errors->any())
<div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Danger</span>
  <div>
    <span class="font-medium">Ensure that these requirements are met:</span>
      <ul class="mt-1.5 ml-4 text-red-700 list-disc list-inside">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
</div>
@endif
  <form action="{{ route('chapter.store') }} " method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-6">
      <label for="description" class="text-slate-900 text-xl font-bold">Name :</label>
      <input name="name" type="text" value="{{ old('name') }}" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
        placeholder="Name">
    </div>
    <div class="form-group mb-6">
      <label for="title" class="text-slate-900 text-xl font-bold">title :</label>
      <input name="title" type="text" value="{{ old('title') }}" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
        placeholder="title">
    </div>
    <div class="form-group mb-6">
<label for="rate" class="text-slate-900 my-10 font-bold">Select manga :</label>
    <div class="form-group mb-6">
    <select name="manga_id"
            class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
    >
    @foreach ($mangas as $manga)
        <option value="{{ $manga->id }}">{{ $manga->name }}</option>
    @endforeach
    </select>
    </div>
    <label for="chapters" class="text-slate-900 font-bold">chapters</label>
    {{-- <div class="form-control block relative hover:bg-slate-200
        w-full
        py-2 pl-2
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        text-center
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">Upload chapters<input name='img[]' multiple type="file" class="opacity-0 w-full cursor-pointer  absolute bottom-0 top-0 right-0 left-0" id="exampleInput8"
       ></div>

    </div> --}}
    <div class="form-group mb-6">

    <input type="file" multiple name="images[]" id="">
    </div>
    <button type="submit" class="
      w-full
      px-6
      py-2.5
      bg-slate-700
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-slate-800 hover:shadow-lg
      focus:bg-slate-900 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-slate-900 active:shadow-lg
      transition
      duration-150
      ease-in-out">add chapter</button>
  </form>

</div>
@endsection

@section('scripts')

@endsection
