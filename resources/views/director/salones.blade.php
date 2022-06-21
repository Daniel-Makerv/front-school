@extends('layouts.app')
@section('content')
<div class="container">
    <!-- Table -->
    <h class="text-2xl font-semibold">Salones</h1>
    <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-semibold text-gray-800">Registros de salones de clases</h2>
        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Id</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nombre del salón</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Grado</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Acciones</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                      @foreach ($salones as $salon)
                      <tr>
                          <td class="p-2 whitespace-nowrap">
                              <div class="flex items-center">
                                  <div class="font-medium text-gray-800">{{$salon->id}}</div>
                              </div>
                          </td>
                          <td class="p-2 whitespace-nowrap">
                              <div class="text-left">{{$salon->nombre_salon}}</div>
                          </td>
                          <td class="p-2 whitespace-nowrap">
                              <div class="text-left font-medium text-green-500">{{$salon->grado}}</div>
                          </td>
                          <td class="p-2 whitespace-nowrap">
                              <div x-data="{ modelOpen: false }">
                                  <center>
                                    <button @click="modelOpen =!modelOpen" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Editar</button>
                                  </center>
                                  <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                      <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                          <div x-cloak @click="modelOpen = false" x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                                          <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                              <div class="flex items-center justify-between space-x-4">
                                                  <h2 class="text-xl font-medium text-gray-800">Editar la información de salones</h2>
                                                  <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                      </svg>
                                                  </button>
                                              </div>

                                              <p class="mt-2 text-sm text-gray-500 ">
                                              Datos
                                              </p>

                                              <form class="mt-5" action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{ method_field('PUT') }}
                                              <h1 class="text-xs font-medium text-gray-400 uppercase">Grados escolares</h1>
                                                  <div>
                                                      <label for="user name" class="block text-sm text-black capitalize dark:text-gray-200">Id</label>
                                                      <input placeholder="Apellido" value="{{$salon->id}}" disabled type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                  </div>
                                                  <div>
                                                      <label for="user name" class="block text-sm text-black capitalize dark:text-gray-200">Nombre del salón</label>
                                                      <input placeholder="Nombre" value="{{$salon->nombre_salon}}" id="inicio_ciclo" name="inicio_ciclo" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                  </div>
                                                  <div>
                                                      <label for="user name" class="block text-sm text-black capitalize dark:text-gray-200">Grado</label>
                                                      <input placeholder="Apellido" value="{{$salon->grado}}" id="fin_ciclo" name="fin_vigencia" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                  </div>
                                                  <div class="flex justify-end mt-6">
                                                    <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-[#EC5252] rounded-md dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                      Editar Salon
                                                    </button>
                                                  </div>
                                            </div>

                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <center>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Eliminar</button>
                              </center>
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
<script>
// $(document).ready(function() {
//     getRolesUsuario();
//
//     function getRolesUsuario() {
//       let inicio_ciclo = document.getElementById('inicio_ciclo').value;
//       let fin_ciclo = document.getElementById('fin_ciclo').value;
//         $.ajax({
//             type: "PUT",
//             url: "/ciclo-escolar",
//             dataType: "json",
//             success: function(response) {
//                 $.each(response.rolesUsuario, function(key, item) {
//                     $('ul').append(`
//                 <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
//                 ` + item.svg_icono + `
//                     <a class="font-semibold" href="{{ url('` + item.route + `') }}">
//                     ` + item.nombre + `
//                 </a>
//                 </li>
//                     `);
//                 });
//             }
//         });
//     }
//
// });
</script>
