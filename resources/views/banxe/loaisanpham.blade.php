@extends('banxe.layout.master')
@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="{{route('banxe.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Loại sản phẩm</a></li>
                    
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories
                </div>
                <ul class="list-group category_block">
                	@foreach ($loai as $loai)                                     
                        <li class="list-group-item"><a href="{{route('banxe.loaisp',$loai->id)}}">{{$loai->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            
        </div>
        <div class="col">
            <div class="row">
            	 @foreach ($sptheoloai as $sp)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="/image/{{ $sp -> image}}" alt="Card image cap" width="200px" height="200px">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">{{$sp->name}}</a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">{{$sp->unit_price}}</p>
                                </div>
                                <div class="col">
                                    <a href="{{ route('banxe.addtocart',$sp->id) }}" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 @endforeach
                
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection