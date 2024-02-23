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
                    <h4 class="mb-1 pt-2 text-center">Hola! 👋</h4>
                    <p class="mb-4 text-center">Gestión de Calificaciones de Servicios a través de chatbot WhatsApp</p>

                    <div class="feedback">
                        <x-jet-validation-errors class="mb-2 text-center text-danger small"/>
                    </div>

                    <form id="formAuthentication" class="mb-3" action="{{route('login')}}" method="POST">
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
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href="{{route('password.request')}}">
                                    <small>¿Olvidó la contraseña?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    required
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
