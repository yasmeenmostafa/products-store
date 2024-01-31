@extends('user.inc.layout')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('uploads/' . $product->image) }}"
                        alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">{{ $product->price }}</span>
                        <span>{{ $product->price - $product->discount }}</span>
                    </div>
                    <p class="lead">{{ $product->desc }}</p>
                    <div class="d-flex flex-wrap">
                        <div class="w-50 m-1 mb-3">
                            <form action="{{ url('/userhome/cart') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <span>color</span>
                                <select class="form-select " name="color" aria-label="Default select example">

                                    @foreach ($productcolors as $p)
                                        <option value="{{ $p->product_color }}">{{ $p->product_color }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="w-50 m-1 mb-3 ">
                            <span>size</span>

                            <select name="size" class="form-select" aria-label="Default select example">
                              
                                @foreach ($productsizes as $s)
                                    <option value="{{ $s->product_size }}">{{ $s->product_size }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <br>
                        <input name="quantity" class="form-control text-center me-3" id="inputQuantity" min="1"
                           value="1" type="number" style="max-width: 3rem" />

                        <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                            add
                            {{-- <i class="bi-cart-fill me-1"></i>
                        <a href="">Add to cart</a> --}}
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Related items section-->
@endsection
