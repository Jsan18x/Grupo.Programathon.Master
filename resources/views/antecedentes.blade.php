@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Antecedentes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group row">
                        <label for="menor" class="col-md-4 col-form-label text-md-right">{{ __('Menor de Edad') }}</label>

                        <div class="col-md-6">
                            

                            <select id="menor" name="menor" class="form-control">
                                <option value="M">Menor 1</option>
                                {{--@foreach ($menores as $menor)
                                <option value={{$menor->id}}>{{$menor->nombre}}</option>
                                @endforeach--}}
                            </select>

                            @if ($errors->has('menor'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('menor') }}</strong>
                                </span>
                            @endif
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
