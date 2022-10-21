<x-forntend.master>
    <x-slot:title>
        HOME
        </x-slot>

        <x-forntend.partials.headerindex/>

        <!-- categpry -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                @foreach ($category as $categorys)
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                        <p class="text-right">15 Products</p>
                        <a href="{{ route('frontend.products.index', $categorys->id) }}" class="cat-img position-relative overflow-hidden mb-3">
                            @foreach( $categorys->images as $image)
                            <img class="img-fluid" src="{{ asset('storage/categories/'. $image->image) }}" alt="">
                            @endforeach
                        </a>
                        <a href="{{ route('frontend.products.index', $categorys->id) }}">
                            <h5 class="font-weight-semi-bold m-0">{{ $categorys->name }}</h5>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>




        <!-- Categories Section End -->

        <div class="container-fluid offer pt-5">
            <div class="row px-xl-5">
                <div class="col-md-6 pb-4">
                    <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                        <img src="img/offer-1.png" alt="">
                        <div class="position-relative" style="z-index: 1;">
                            <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                            <h1 class="mb-4 font-weight-semi-bold">Spring Collection</h1>
                            <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                        <img src="img/offer-2.png" alt="">
                        <div class="position-relative" style="z-index: 1;">
                            <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                            <h1 class="mb-4 font-weight-semi-bold">Winter Collection</h1>
                            <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid pt-5">
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
            </div>
            <div class="row px-xl-5 pb-3">
                @foreach ($productall as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            @foreach($product->images as $image)
                            @endforeach
                            <img class="img-fluid w-100" src="{{ asset('storage/products/'.$image->image) }}" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>৳{{ $product->price }}</h6>
                                <h6 class="text-muted ml-2"><del>৳{{ $product->price }}</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{ route('frontend.products.show', $product->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <span>{{ $productall->links() }}</span>

        </div>
        <!-- Featured Section Begin -->
        <div class="container-fluid bg-secondary my-5">
            <div class="row justify-content-md-center py-5 px-xl-5">
                <div class="col-md-6 col-12 py-5">
                    <div class="text-center mb-2 pb-2">
                        <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                        <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
                    </div>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5">
            <div class="row px-xl-5">
                <div class="col">
                    <div class="owl-carousel vendor-carousel">
                        <div class="vendor-item border p-4">
                            <img src="{{asset('assets/forntend/img/vendor-1.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{asset('assets/forntend/img/vendor-2.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{asset('assets/forntend/img/vendor-3.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{asset('assets/forntend/img/vendor-4.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{asset('assets/forntend/img/vendor-5.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{asset('assets/forntend/img/vendor-6.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{asset('assets/forntend/img/vendor-7.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{asset('assets/forntend/img/vendor-8.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push('script')
        <!-- script -->
        @endpush
        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
</x-forntend.master>