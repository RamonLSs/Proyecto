@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-5">
                <div class="card">
                    <div class="card-body bg-dark text-white">
                        <form method="POST" action="{{route('usuario.guardar', auth()->user()->id)}}">
                            @csrf
                            <div class="form-group row">
                                <label for="contraseñaactual" class="col-md-4 col-form-label text-md-right">Contraseña Actual</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" placeholder="Contraseña actual" name="contraseña" required>
                                    </div>
                              </div>

                              <div class="form-group row">
                                <label for="nuevacontraseña" class="col-md-4 col-form-label text-md-right">Nueva Contraseña</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control"  placeholder="Nueva Contraseña" name="password" required>
                                    </div>
                              </div>

                              <div class="form-group row">
                                <label for="confiramarcontraseña" class="col-md-4 col-form-label text-md-right">Confirma Contraseña</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control"  placeholder="Confirma Contraseña" name="password_confirmation" required>
                                    </div>
                              </div>

                              <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <input type="submit" value="Cambiar Contraseña" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
