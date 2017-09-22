<!-- Show Slider or single image -->

<!-- Menu  -->

<div id="example1" data-chocolat-title="Set title">
    <a class="chocolat-image" href="{{$product->mainImage}}" title="{{$product->title}}">
        <img class="img-responsive img-thumbnail" src="{{$product->mainImage}}" alt="{{$product->title}}">
    </a>
</div>

<!--
<div class="chocolat-parent" data-chocolat-title="set title">
    <a class="chocolat-image" href="" title="caption...">
        <img wiidth='100' class="img-responsive img-thumbnail" src="" alt="...">
    </a>
</div> -->
@include('others.social-menu')