<div class="p-6 sm:px-20 bg-gray-700 border-b border-gray-200">

    <div class=" text-white mt-2 text-2xl">
        ¡HOLA, {{ Auth::user()->name }}!
    </div>

    <div class="mt-6 text-white">
        ¿Qué deseas hacer el dia de hoy?
    </div>
</div>

<div class=" bg-opacity-25 grid grid-cols-1 md:grid-cols-2 mx-3 my-2">
    <div class=" bg-blue-600 max-w-none rounded overflow-hidden duration-300 hover:scale-105 shadow-md my-2 mx-2 hover:shadow-xl">
        <div class="px-6 py-4 ">
          <div class="font-bold text-xl mb-2">
            <svg class="h-6 w-7 inline-block" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            EMPADRONAR</div>
          <p class="text-grey-darker text-base">
            Podras añadir nuevos socios y añadirlos a un stand :)
          </p>
        </div>
        <div class="px-6 pt-5 py-4">
            <button type="button" class="text-gray-900 bg-gradient-to-r from-blue-200 via-blue-400 to-blue-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <a href="{{ route('menuemp') }}" class="nav-link px-3 text-white">Empezar!!!</a>
            </button>
        </div>
    </div>
    <div class="bg-amber-600 max-w-none rounded duration-300 hover:scale-105 overflow-hidden shadow-md my-2 mx-2 hover:shadow-xl hover:scale- ">
        <div class="px-6 py-4  ">
          <div class="font-bold text-xl mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>

            GESTIONAR ACTIVIDADES</div>
          <p class="text-grey-darker text-base">
            Puedes ver la lista de Actividades, crear nuevas y editar las que ya existen.
          </p>
        </div>
        <div class="px-6 py-4">
            <button type="button" href="{{ route('activity') }}" class=" text-gray-900 bg-gradient-to-r from-amber-200 via-amber-400 to-amber-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-amber-300 dark:focus:ring-amber-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <a href="{{ route('activity') }}" class="nav-link px-3">Vamos!!!</a>
            </button>
        </div>
    </div>
    <div class="bg-green-600 max-w-none duration-300 hover:scale-105 rounded overflow-hidden shadow-md my-2 mx-2 hover:shadow-xl">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            MANEJO DE FINANZAS</div>
          <p class="text-grey-darker text-base">
            Manejar recolecciones y pagos en un solo click.</p>
        </div>
        <div class="px-6 py-4">
            <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <a href="{{ route('menufina')}}" class="nav-link px-3">Click Aqui!!!</a>
            </button>
        </div>
    </div>
    <div class="bg-red-600 duration-300 hover:scale-105 max-w-none rounded overflow-hidden shadow-md my-2 mx-2 hover:shadow-xl ">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">REPORTAR PROBLEMA</div>
          <p class="text-grey-darker text-base">
          ¿Tienes algún problema?, No dudes en reportarlo
          </p>
        </div>
        <div class="px-6 py-4">
            <button type="button"  class="text-white bg-gradient-to-r from-red-200 via-red-400 to-red-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <a href="https://github.com/Andrepaolo" class="nav-link px-3">Reportar</a>
            </button>
        </div>
    </div>
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="MIRA NUESTRO CÓDIGO" href="https://github.com/ZzOwO/SisAcomita2022" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"/>
            </a>
        </div>
    </div>


</div>
