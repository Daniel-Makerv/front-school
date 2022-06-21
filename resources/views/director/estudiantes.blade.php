@extends('layouts.app')
@section('content')
<div class="container">
    <!-- Table -->
    <h1 class="text-2xl font-semibold">Estudiantes Registrados</h1>
    <div class="w-full  mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-semibold text-gray-800">Estudiantes</h2>
        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nombre</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Matricula</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Salon</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Ciclo Escolar</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Acciones</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                        @foreach ($usuarioRolEstudiante as $estudiantes)
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://api.lorem.space/image/face?w=150&h=150" width="40" height="40" alt="Alex Shatov"></div>
                                    <div class="font-medium text-gray-800">{{$estudiantes->nombre_completo}}</div>
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{$estudiantes->matricula}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left font-medium text-green-500">{{$estudiantes->grado}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-center">{{$estudiantes->telefono}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                              <center><button class="bg-green-600 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Mirar</button></center>  
                                <div x-data="{ modelOpen: false }">
                                <center><button @click="modelOpen =!modelOpen" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Editar</button></center>  
                                    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                            <div x-cloak @click="modelOpen = false" x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                                            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                                <div class="flex items-center justify-between space-x-4">
                                                    <h2 class="text-xl font-medium text-gray-800">Editar la información del estudiante {{$estudiantes->nombre}}</h2>
                                                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <p class="mt-2 text-sm text-gray-500 ">
                                                Datos
                                                </p>

                                                <form class="mt-5">
                                                <h1 class="text-xs font-medium text-gray-400 uppercase">Personales</h1>
                                                    <div>
                                                        <label for="user name" class="block text-sm text-black capitalize dark:text-gray-200">Matricula</label>
                                                        <input placeholder="Apellido" value="{{$estudiantes->matricula}}" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div>
                                                        <label for="user name" class="block text-sm text-black capitalize dark:text-gray-200">Nombre</label>
                                                        <input placeholder="Nombre" value="{{$estudiantes->nombre}}" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div>
                                                        <label for="user name" class="block text-sm text-black capitalize dark:text-gray-200">Apellido Paterno</label>
                                                        <input placeholder="Apellido" value="{{$estudiantes->apellido_paterno}}" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div>
                                                        <label for="user name" class="block text-sm text-black capitalize dark:text-gray-200">Apellido Materno</label>
                                                        <input placeholder="Apellido" value="{{$estudiantes->apellido_materno}}" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    </div>
                                                    <div class="mt-4">
                                                        <h1 class="text-xs font-medium text-gray-400 uppercase">Contacto</h1>

                                                        <div class="mt-4">
                                                            <label for="email" class="block text-sm text-black capitalize dark:text-gray-200">Correo Electronico</label>
                                                            <input placeholder="arthurmelo@example.app" value="{{$estudiantes->email}}" type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                        <div class="mt-4">
                                                            <label for="email" class="block text-sm text-black capitalize dark:text-gray-200">Telefono</label>
                                                            <input placeholder="arthurmelo@example.app" value="{{$estudiantes->telefono}}" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <h1 class="text-xs font-medium text-gray-400 uppercase">Status</h1>

                                                        <div class="mt-4 space-y-5">
                                                            <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                                                <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full" :class="[show ? 'bg-[#EC5252]' : 'bg-gray-300']">
                                                                    <label for="show" @click="show =!show" class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer" :class="[show ? 'translate-x-full border-[#EC5252]' : 'translate-x-0 border-gray-300']"></label>
                                                                    <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none" />
                                                                </div>

                                                                <p class="text-black">Activo</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="flex justify-end mt-6">
                                                        <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-[#EC5252] rounded-md dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                            Editar Estudiante
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Eliminar</button></center>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<footer class="text-center py-6 mt-4">
    Copyright &copy; 2022 Admin school
</footer>
@endsection