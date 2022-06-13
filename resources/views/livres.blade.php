@extends('layouts.app')



@section('main')
@if(session('success'))
                    <div class="alert alert-success">
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)">
                        <h1 class="bg-gray-200">
                       Vous avez bien été déconnecté</h1>
                        </div>
                    </div>
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-deleted">
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)">
                        <h1>
                        Echec de la connection</h1>
                        </div>
                    </div>
                    </div>
@endif
    <ul>


        <body class="h-screen text-gray-900 bg-left-bottom bg-no-repeat font-work-sans sm:bg-svg-bottom">
            <p class="m-5 text-lg font-bold text-center">Liste De Livres</p>
            <table class="w-5/6 m-5 mx-auto text-gray-100 rounded-t-lg bg-gradient-to-l from-indigo-500 to-indigo-800">
                <tr class="text-left border-b-2 border-indigo-300">

                    <th class="px-4 py-3">Livres</th>
                    <th class="px-4 py-3">Auteurs</th>
                    @if(session()->get('users'))
                    <th class="px-4 py-3">Action</th>
                    @endif
                </tr>




                @foreach ($livres as $livre)
                    <tr class="border-b border-indigo-400">

                        <td class="px-4 py-3">
                            <a href="/livre/{{ $livre->id }}"> {{ $livre->titre }} </a>
                        </td>

                        <td class="px-4 py-3">
                            <a href="/auteur/{{ $livre->auteur_id }}"> {{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}</a>
                        </td>
                        @if(session()->get('users'))
                        <td class="px-4 py-3">
                         <a  class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300" href="/update/{{ $livre->id }}"> Update</a> 
                        </td>
                      
                        <td class="px-4 py-3">
                            @include('components.delete')
                        </td>
  @endif
                    </tr>
                @endforeach

            </table>
    </ul>
    @if(session()->get('users'))
    
    @include('components.addLivre');

    @endif

@endsection


