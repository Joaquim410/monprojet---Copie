
    <form action="/delete/{{$livre->id}}" method="POST">
        @csrf
        @method('delete')


        <button type="submit"
            class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">

            Delete
        </button>


    </form>
