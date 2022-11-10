@extends('layouts.admin')

@section('title')

@endsection

@section('links')

@endsection

@section('content')
<div class="container px-38 mx-auto pb-20">
    <h1 class="text-3xl text-center font-bold text-gray-900 mb-10">{{ $manga->name }} Chapters</h1>

    <div class="overflow-x-auto relative sm:rounded-lg shadow-2xl">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        chapter name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i= $chapters->count();
                @endphp
                @foreach ($chapters as $chapter )

                    <tr class="bg-white border-b text-center dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $i-- }}
                        </th>

                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           <a class="bg-orange-500 hover:bg-orange-700 py-1 rounded px-2" href="{{ route('chapter.show',$chapter->slug) }}"> {{ $chapter->slug }}</a>
                        </th>

                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a class="bg-orange-500 hover:bg-orange-700 py-1 rounded px-2" href="{{ route('chapter.show',$chapter->slug) }}"><i class="fa-solid fa-eye"></i></a>
                            <a class="bg-blue-500 hover:bg-blue-700 py-1 rounded px-2" href="{{ route('chapter.edit',['id'=>$chapter->id,'manga_id'=> $manga->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="bg-red-500 hover:bg-red-700 py-1 rounded px-2" id="{{ $chapter->id }}" onclick="deleteconfirm({{ $chapter->id }})" href="{{ route('chapter.delete',['id'=>$chapter->id,'manga_id'=> $manga->id]) }}"><i class="fa-sharp fa-solid fa-trash"></i></a>
                        </th>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

@section('scripts')
<script>
    function deleteconfirm(id){
        event.preventDefault();
        var self = $('#'+id);

        console.log(self.attr('href') );
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                location.replace(self.attr('href'));
                // Swal.fire(
                // 'Deleted!',
                // 'Your file has been deleted.',
                // 'success'
                // )
            }
            })
    }
</script>
@if (session()->has('status'))
    <script>
        const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })

    Toast.fire({
    icon: 'success',
    title: '{{ session("status") }}'
    })
    </script>
@endif
@endsection
