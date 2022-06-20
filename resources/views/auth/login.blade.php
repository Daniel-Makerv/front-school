<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-white">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://images.pexels.com/photos/10646607/pexels-photo-10646607.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">Admin School</h2>

                        <p class="max-w-xl mt-3 text-white">Sistema administrador de escuelas para manejar los expedientes.</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-[#EC5252] ">Bienvenido</h2>

                        <p class="mt-3 text-[#EC5252] ">Inicia sesión para acceder al sistema administrador de escuelas.</p>
                    </div>

                    <div class="mt-8">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm text-[#EC5252] ">Correo Electronico</label>
                                <input type="email" name="email" id="email" placeholder="email@gmail.com" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror block w-full px-4 py-2 mt-2 text-black border border-[#EC5252] rounded-md  focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" required />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                            
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-[#EC5252]">Contraseña</label>
                                </div>
                                <input type="password" name="password" id="password" placeholder="contraseña" class="form-control @error('password') is-invalid @enderror block w-full px-4 py-2 mt-2 text-black border border-[#EC5252] rounded-md  focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-[#EC5252] rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50" id="buttonPostLogin">
                                {{ __('Login') }}
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
                <div id="respuesta">
                </div>
            </div>
        </div>
    </div>

