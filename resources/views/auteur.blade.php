@extends('layouts.app')



@section('main')
<ul>


    <body class="h-screen text-gray-900 bg-left-bottom bg-no-repeat font-work-sans sm:bg-svg-bottom">
        <p class="m-5 text-lg font-bold text-center">Liste Des Livres de l'auteur</p>
        <table class="w-5/6 m-5 mx-auto text-gray-100 rounded-t-lg bg-gradient-to-l from-indigo-500 to-indigo-800">
            <tr class="text-left border-b-2 border-indigo-300">

                <th class="px-4 py-3">Livres</th>
              
                <th class="px-4 py-3">Action</th>
            </tr>




            @foreach ($livre as $livre)
                <tr class="border-b border-indigo-400">

                    <td class="px-4 py-3">
                        <a href="/livre/{{ $livre->auteur_id }}"> {{ $livre->titre }} </a>
                    </td>

                   
                    <td class="px-4 py-3">
                        @include('components.delete')
                    </td>

                </tr>
            @endforeach

        </table>
@endsection
