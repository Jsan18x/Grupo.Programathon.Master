@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Antecedentes</div>
                    
                    <div class="card-body">
                        <form method="post" class="dropzone" id="dropzone" action="{{url('image/upload/store')}}" enctype="multipart/form-data">
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
                         @csrf                         
                        </form>
                    </div>                    
                </div>
                </div>
            </div>
        </div>
    </div> 
</div>

<script type="text/javascript">
        Dropzone.prototype.defaultOptions.dictDefaultMessage = 'Arrastar su archivo aqui!, O Presione aqui para elegir un archivo!';
        Dropzone.options.dropzone =
         {
            maxFilesize: 1,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpg,.png,.tif,.tiff,.pdf,.docx,.txt",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
</script>
<style>
    .dz-default {
 
    padding:10%;
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
</style>
@endsection
