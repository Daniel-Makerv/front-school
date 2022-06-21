@extends('layouts.app')

@section('content')
<div class="py-16 bg-white">
    <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-[#EC5252]">Alumnos Registrados</h3>
                    <div id="countAlumnos" name="countAlumnos">
                    <p class="mb-6">Actualmente tienes alumnos registrados</p>
                    </div>
                    <a href="#" class="block font-medium text-[#EC5252]">Mirar</a>
                </div>
                <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
            </div>
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-[#EC5252]">Maestros Registrados</h3>
                    <p class="mb-6">Actualmente tienes maestros registrados</p>
                    <a href="#" class="block font-medium text-[#EC5252]">Mirar</a>
                </div>
                <img src="https://tailus.io/sources/blocks/end-image/preview/images/ux-design.svg" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
            </div>
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-[#EC5252]">Clases registradas</h3>
                    <p class="mb-6">Actualmente tienes Clases registradas</p>
                    <a href="#" class="block font-medium text-[#EC5252]">Mirar</a>
                </div>
                <img src="https://tailus.io/sources/blocks/end-image/preview/images/ui-design.svg" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">

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
    // const options = {
    //     method: "GET"
    // };
    // getTotalAlumnos();
    // // Petición HTTP
    // function getTotalAlumnos() {
    //     fetch("/total-alumnos", options)
    //         .then(response => response.text())
    //         .then(data => {
    //             let valueTotalAlumnos = data.estudiantes;
    //             impriDatos += `
    //             <p class="mb-6">Actualmente tienes ${valueTotalAlumnos} alumnos registrados</p>
    //             `;
    //             let newDatos = document.getElementById('countAlumnos').innerHTML= impriDatos;
    //         });
    // }


    // $(document).ready(function() {
    //     getCountEstudiante();

    //     function getCountEstudiante() {
    //         $.ajax({
    //             type: "GET",
    //             url: "/total-alumnos",
    //             dataType: "json",
    //             success: function(response) {
    //                 $.each(response.estudiantes, function(key, item) {
    //                     $('#countAlumnos').append(`
    //                 <p class="mb-6">Actualmente tienes ` + item.estudiantes + ` alumnos registrados</p>
    //                     `);
    //                 });
    //             }
    //         });
    //     }

    // });
</script>