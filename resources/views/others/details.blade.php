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
            
        </div>
        <br>
    </div>
    <div role="tabpanel" class="tab-pane" id="contact">
        Contact form here...
    </div>
</div>
