<x-auth-layout>
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <div class="card">
                <div class="card-body">
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="{{route('inicio')}}" class="app-brand-link gap-2">
                            <img src="{{asset('assets/img/logo/logocecar2.png')}}" width="150" alt="Logo CECAR">
                        </a>
                    </div>
                    {{--<h4 class="mb-1 pt-2 text-center">Hola! 👋</h4>--}}
                    <p class="mb-4 text-center">¿Olvidaste tu contraseña? ¡No te preocupes! Solo indícanos tu dirección de correo electrónico registrado en el nuestro sistema y te enviaremos un enlace para restablecer tu contraseña. Con este enlace podrás elegir una nueva contraseña fácilmente.</p>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-primary text-center">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="feedback">
                        <x-jet-validation-errors class="mb-2 text-center text-danger small"/>
                    </div>

                    <form id="formAuthentication" class="mb-3" action="{{route('password.email')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                value="{{old('email')}}"
                                placeholder="ejemplo@cecar.edu.co"
                                required
                                autocomplete="off"
                                autofocus />
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Solicitar enlace</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
