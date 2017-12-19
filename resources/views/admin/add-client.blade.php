@extends('layouts.master-normal-others')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="page-header"><h3>Agregar cliente</h3></div>

    <div class="container">
        <form class='form-horizontal' action="{{route('save-client')}}" method="post">

            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input name='name' type="text" class="form-control" id="inputName" placeholder="Nombre a mostrar..." required>
                </div>
            </div>
            <div class="form-group">
                <label>Foto del cliente</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Buscar... <input name='photo' type="file" id="imgInp" required>
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDes" class="col-sm-2 control-label">Testimonio del cliente</label>
                <div class="col-sm-10">
                    <textarea name='comment' class="form-control" rows="3" placeholder="Testimonio del cliente..." required></textarea>
                </div>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary" style="width:100%;">Agregar</button>

        </form>
    </div>
@stop

@section('myCode')
    $(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {

    var input = $(this).parents('.input-group').find(':text'),
    log = label;

    if( input.length ) {
    input.val(log);
    } else {
    if( log ) alert(log);
    }

    });
    function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
    $('#img-upload').attr('src', e.target.result);
    }

 /*   reader.readAsDataURL(input.files[0]);*/
    }
    }

    $("#imgInp").change(function(){
    readURL(this);
    });
    });

@endsection