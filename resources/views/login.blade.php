@extends('layouts.app')


@section('main')
@if(session('success'))
                    <div class="alert alert-success">
                        <h1 class="bg-gray-200">
                       Vous avez bien été déconnecté</h1>
                        </div>
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-deleted">
                        <h1>
                        Echec de la connection</h1>
                        </div>
                    </div>
@endif
<!-- Container -->
<div class="flex flex-col h-screen bg-gray-100">
  <!-- Auth Card Container -->
  <div class="grid mx-2 my-20 place-items-center sm:my-auto">
      
  
      <!-- Auth Card -->
      <div class="w-11/12 p-12 px-6 py-10 bg-white rounded-lg shadow-md sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 sm:px-10 sm:py-6 lg:shadow-lg">

          <!-- Card Title -->
          <h2 class="text-3xl font-semibold text-center text-gray-800 lg:text-4xl">
             Login
          </h2>

          <form class="mt-10" method="POST" action="/login">
            @csrf
              <!-- Email Input -->
             

              <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
              <input id="email" type="email" name="email" placeholder="e-mail address" autocomplete="email"
                  class="block w-full px-1 py-3 mt-2 text-gray-800 border-b-2 border-gray-100 appearance-none focus:text-gray-500 focus:outline-none focus:border-gray-200"
                  required />

              <!-- Password Input -->
              <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
              <input id="password" type="password" name="password" placeholder="password" autocomplete="current-password"
                  class="block w-full px-1 py-3 mt-2 mb-4 text-gray-800 border-b-2 border-gray-100 appearance-none focus:text-gray-500 focus:outline-none focus:border-gray-200"
                  required />

              <!-- Auth Buttton -->
              <button type="submit"
                  class="w-full py-3 mt-10 font-medium text-white uppercase bg-gray-800 rounded-sm focus:outline-none hover:bg-gray-700 hover:shadow-none">
                 Login
              </button>

             
          </form>
      </div>
  </div>
</div>

  @endsection