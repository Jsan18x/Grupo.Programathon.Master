@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Menor</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cédula') }}</label>

                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" 
                                name="cedula" value="{{ old('cedula') }}" required autofocus>

                                @if ($errors->has('cedula'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="edad" type="text" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" 
                                name="edad" value="{{ old('edad') }}" required autofocus>

                                @if ($errors->has('edad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                                {{--< id="genero" type="text" class="form-control{{ $errors->has('genero') ? ' is-invalid' : '' }}" 
                                name="genero" value="{{ old('genero') }}" required autofocus>--}}

                                <select id="genero" name="genero" class="form-control">
                                    <Option disabled selected></Option>
                                    <Option value = "M">Masculino</Option>
                                    <Option value = "F">Femenino</Option>
                                </select>

                                @if ($errors->has('genero'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div id="agregar" class="form-group row">
                        <label for="medicinas" class="col-md-4 col-form-label text-md-right">{{ __('Medicinas recetadas') }}</label>

                        <div class="col-md-6">                           
                            <input id="medicinas" type="text" class="form-control"{{ $errors->has('medicinas') ? ' is-invalid' : '' }}
                            name="medicinas" required autofocus>

                            @if ($errors->has('medicinas'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('medicinas') }}</strong>
                            </span>
                            @endif                            
                        </div>

                            <label for="medicinasFecha" class="col-md-4 col-form-label text-md-right">{{ __('Fecha') }}</label>
                           
                            <div class="col-md-6">    
                                <input id="medicinasFecha" type="date" class="form-control{{ $errors->has('medicinasFecha') ? ' is-invalid' : '' }}" 
                                name="medicinasFecha" value="{{ old('medicinasFecha') }}" required autofocus>

                                 @if ($errors->has('medicinasFecha'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('medicinas') }}</strong>
                                    </span>
                                @endif
                            </div>    
                             
                            <label for="medicinasDuracion" class="col-md-4 col-form-label text-md-right">{{ __('Duración') }}</label>
                            
                            <div class="col-md-6">
                                <input id="medicinasDuracion" type="number" class="form-control{{ $errors->has('medicinasDuracion') ? ' is-invalid' : '' }}" 
                                name="medicinasDuracion" value="{{ old('medicinasDuracion') }}" required autofocus>
                                
                                @if ($errors->has('medicinasDuracion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('medicinas') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary" onclick="agregar()">
                            {{ __('Agregar más') }}
                            </button>
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="tratamiento" class="col-md-4 col-form-label text-md-right">{{ __('Tratamientos de índole física') }}</label>
                            
                            <div class="col-md-6">
                                {{--<input id="tratamiento" type="text" class="form-control{{ $errors->has('tratamiento') ? ' is-invalid' : '' }}" 
                                name="tratamiento" value="{{ old('tratamiento') }}" required autofocus>--}}

                                <textarea rows="4" cols="50" id="tratamiento" type="text" class="form-control{{ $errors->has('tratamiento') ? ' is-invalid' : '' }}" 
                                name="tratamiento" value="{{ old('tratamiento') }}" required autofocus>
                                </textarea>

                                @if ($errors->has('tratamiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tratamiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="enfermedades" class="col-md-4 col-form-label text-md-right">{{ __('Cuadros de enfermedades presentados en los últimos 6 meses') }}</label>

                            <div class="col-md-6">
                                {{--<input id="enfermedades" type="text" class="form-control{{ $errors->has('enfermedades') ? ' is-invalid' : '' }}" 
                                name="enfermedades" value="{{ old('enfermedades') }}" required autofocus>--}}

                            <textarea rows="4" cols="50" id="enfermedades" type="text" class="form-control{{ $errors->has('enfermedades') ? ' is-invalid' : '' }}" 
                                name="enfermedades" value="{{ old('enfermedades') }}" required autofocus>
                                    
                            </textarea>

                                @if ($errors->has('enfermedades'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('enfermedades') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="etnia" class="col-md-4 col-form-label text-md-right">{{ __('Etnia') }}</label>

                            <div class="col-md-6">
                                {{--<input id="etnia" type="text" class="form-control{{ $errors->has('etnia') ? ' is-invalid' : '' }}" 
                                name="etnia" value="{{ old('etnia') }}" required autofocus>--}}

                                <select id="etnia" name="etnia" class="form-control">
                                    <Option value = "AfroCostarricense">Afro costarricense</Option>
                                    <Option value = "asiatico">Asiático</Option>
                                    <Option value = "blanco">Blanco</Option>
                                    <Option value = "mestizo">Mestizo</Option>
                                    <Option value = "indigena">Indígena</Option>
                                </select>

                                @if ($errors->has('etnia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('etnia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var cont=0;
function agregar(){

  var parent = document.getElementById('agregar');
  var newChild = "<label for='medicinas' class='col-md-4 col-form-label text-md-right'>{{ __('Medicinas recetadas') }}</label>"+
                 "<div class='col-md-6'>"+                          
                    "<input id='medicinas' type='text' class='form-control'{{ $errors->has('medicinas') ? ' is-invalid' : '' }}"+
                    "name='medicinas"+cont+"' required autofocus>"+
                    "@if ($errors->has('medicinas'))"+
                        "<span class='invalid-feedback' role='alert'>"+
                            "<strong>{{ $errors->first('medicinas') }}</strong>"+
                        "</span>"+
                    "@endif"  +                          
                 "</div>"+
                 "<label for='medicinasFecha' class='col-md-4 col-form-label text-md-right'>{{ __('Fecha') }}</label>"+
                    "<div class='col-md-6'> " +  
                        "<input id='medicinasFecha' type='date' class='form-control{{ $errors->has('medicinasFecha') ? ' is-invalid' : '' }}'"+ 
                        "name='medicinasFecha"+cont+"' value='{{ old('medicinasFecha') }}' required autofocus>"+
                        "@if ($errors->has('medicinasFecha'))"+
                            "<span class='invalid-feedback' role='alert'>"+
                                "<strong>{{ $errors->first('medicinas') }}</strong>"+
                            "</span>"+
                        "@endif"+
                    "</div>  "+  
                 "<label for='medicinasDuracion' class='col-md-4 col-form-label text-md-right'>{{ __('Duración') }}</label>"+
                    "<div class='col-md-6'>"+
                        "<input id='medicinasDuracion"+cont+"' type='number' class='form-control{{ $errors->has('medicinasDuracion') ? ' is-invalid' : '' }}'"+ 
                        "name='medicinasDuracion"+cont+"' value='{{ old('medicinasDuracion') }}' required autofocus> "+
                        "@if ($errors->has('medicinasDuracion'))"+
                            "<span class='invalid-feedback' role='alert'>"+
                                "<strong>{{ $errors->first('medicinas') }}</strong>"+
                            "</span>"+
                        "@endif"+
                    "</div>";
  parent.insertAdjacentHTML('beforeend', newChild);
  cont++;
} 
</script>
@endsection