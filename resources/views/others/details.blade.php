<!-- Details of Single Product -->
<!-- Nav tabs -->
<ul class="nav nav-pills nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Detalles</a></li>
    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Ordenar ahora</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="details">
        <br>

        <div class="single-product-title container-fluid" align="center"> <!-- Title -->
            <h2>{{$product->title}}</h2>
        </div>
        <hr>
        <div class="single-product-des container-fluid" align="center"><!-- Description -->
            <p>{{$product->description}}</p>
        </div>
        <hr>
        <div class="container-fluid"><!-- Details -->
            <table class="table">
                <tr>
                    <th>Relleno</th>
                    <td>{{$product->fill}}</td>
                </tr>
                <tr>
                    <th>Decoración</th>
                    <td>{{$product->decoration}}</td>
                </tr>
                <tr>
                    <th>Colore(s)</th>
                    <td>{{$product->colors}}</td>
                </tr>
            </table>
        </div>
        <br>
    </div>
    <div role="tabpanel" class="tab-pane" id="contact"><br>
        <div class="single-product-title container-fluid" align="center"> <!-- Title -->
            <h2>¡Ordena ahora!</h2>
        </div>

        <div class="container-fluid"> <!-- Formulario de contacto -->
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Nombre...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname" placeholder="Apellido...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="col-sm-2 control-label">Asunto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="subject" placeholder="Asunto...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="body" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="body" placeholder="Nombre..."></textarea>
                    </div>
                </div>

                    <button type="submit" class="send btn btn-primary">Enviar</button>

            </form>
        </div>
    </div>
</div>
