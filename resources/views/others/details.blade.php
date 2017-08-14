<!-- Details of Single Product -->
<!-- Nav tabs -->
<ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-expanded="true">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-expanded="true">Profile</a>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <br>
        <div class="single-product-title container-fluid" align="center"> <!-- Title -->
            <h2>{{$product->title}}</h2>
        </div>
        <hr>
        <div class="single-product-des container-fluid" align="center"><!-- Description -->
            <p>{{$product->description}}</p>
        </div>
        <hr>

        <dl class="row">
            <dt class="col-sm-3">Relleno</dt>
            <dd class="col-sm-9">{{$product->fill}}</dd>

            <dt class="col-sm-3">Color(es)</dt>
            <dd class="col-sm-9">{{$product->colors}}</dd>

            <dt class="col-sm-3">Decoración</dt>
            <dd class="col-sm-9">{{$product->decoration}}</dd>
        </dl>
        <br>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="single-product-title container-fluid" align="center"> <!-- Title -->
            <h2>¡Ordena ahora!</h2>
        </div>
        <div class="container-fluid"> <!-- Formulario de contacto -->
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="control-label">Nombre</label>
                    <div>
                        <input type="text" class="form-control" id="name" placeholder="Nombre...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="control-label">Apellido</label>
                    <div>
                        <input type="text" class="form-control" id="lastname" placeholder="Apellido...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="control-label">Asunto</label>
                    <div>
                        <input type="text" class="form-control" id="subject" placeholder="Asunto...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="body" class="control-label">Mensaje</label>
                    <div>
                        <textarea class="form-control" id="body" placeholder="Nombre..."></textarea>
                    </div>
                </div>
                <button type="submit" class="send btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>