@extends('layouts.master-normal-others')
@section('content')

    <div class="page-header"><h3>Agregar producto</h3></div>

    <div class="container">
        <form class='form-horizontal' action="{{route('save-product')}}" method="post">

            <div class="form-group">
                <label for="inputTitle" class="col-sm-2 control-label">Título</label>
                <div class="col-sm-10">
                    <input name='title' type="text" class="form-control" id="inputTitle" placeholder="Título representativo...">
                </div>
            </div>
            <div class="form-group">
                <label>Subir imagen</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Buscar... <input name='mainImage' type="file" id="imgInp" required>
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img id='img-upload'/>
            </div>
            <div class="form-group">
                <label for="inputCategory" class="col-sm-2 control-label">Categoría</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category">
                        <option>Bizcocho</option>
                        <option>Dulce de mesa</option>
                        <option>Otra</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDeco" class="col-sm-2 control-label">Decoración</label>
                <div class="col-sm-10">
                    <input name='decoration' type="text" class="form-control" id="inputDeco" placeholder="Decoración...">
                </div>
            </div>
            <div class="form-group">
                <label for="inputColors" class="col-sm-2 control-label">Color(es)</label>
                <div class="col-sm-10">
                    <input name='colors' type="text" class="form-control" id="inputColors" placeholder="Separados por una coma (,)">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPounds" class="col-sm-2 control-label">Libras</label>
                <div class="col-sm-10">
                    <input name='pounds' type="text" class="form-control" id="inputPounds" placeholder="Libras">
                </div>
            </div>
            <div class="form-group">
                <label for="inputFill" class="col-sm-2 control-label">Relleno</label>
                <div class="col-sm-10">
                    <input name='fill' type="text" class="form-control" id="inputFill" placeholder="Relleno...">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDes" class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-10">
                    <textarea name='description' class="form-control" rows="3" placeholder="Breve descripción del producto..."></textarea>
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