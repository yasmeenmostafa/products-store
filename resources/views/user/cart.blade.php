@extends('user.inc.layoutt')
@section('content')


<section class="shopping-cart spad py-5 my-5  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach($cart as $c)
                           
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        {{-- <img src="{{asset('uploads/'.$c['image'])}}" alt=""> --}}
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6> {{$c['name']}}</h6>
                                        <h6 class="lead"> {{$c['price']}}</h6>
                                       
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <span> {{$c['quantity']}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price"> {{$c['price']*$c['quantity']}}</td>
                                {{-- <td class="cart__price"> {{$c['discount']}}</td> --}}

                                <td class="cart__close"><a href="{{url('/userhome/item/delete/'.$c['id'])}}"><i class="fa fa-close border border-1 p-1 border-dark rounded-1"></i></td></a>
                            </tr>
                            @endforeach
                           
                           
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{url('/userhome')}}" class="btn btn-secondary">Continue Shopping</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" class="form-control w-75" placeholder="Coupon code">
                        <button type="submit" class="btn btn-outline-dark mt-1">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul class="list-unstyled">
                        <li>Subtotal : <span>{{$total}}</span></li>
                        <li>Total <span>{{$total}}</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection