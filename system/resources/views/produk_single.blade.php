@extends('user.template.baseUser')

@section('content')

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
            <a href="{{url("public/$produk->foto")}}" class="image-popup"><img src="{{url("public/$produk->foto")}}" class="img-fluid"></a>
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3>{{$produk->nama_produk}}</h3>
            <div class="rating d-flex">
              
              <p class="text-left mr-4">
                <a href="#" class="mr-2" style="color: #000;">Harga : <span style="color: #000;"> {{$produk->harga}}</span></a>
                <a href="#" class="mr-2" style="color: #000;">Stok : <span style="color: #000;"> {{$produk->stok}}</span></a>
              </p>
              <p class="text-left">
                <a href="#" class="mr-2" style="color: #000;">Berat : <span style="color: #000;">{{$produk->berat}} mg</span></a>
              </p>
            </div>
            
            <p>{!! nl2br($produk->deskripsi) !!}
            </p>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="form-group d-flex">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control">
                      <option value="">Small</option>
                      <option value="">Medium</option>
                      <option value="">Large</option>
                      <option value="">Extra Large</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="w-100"></div>
              <div class="input-group col-md-6 d-flex mb-3">
                <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                     <i class="ion-ios-remove"></i>
                    </button>
                  </span>
                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                       <i class="ion-ios-add"></i>
                   </button>
                </span>
              </div>
              <div class="w-100"></div>
             </div>
            <p><a href="{{url('cart')}}" class="btn btn-black py-3 px-5">Add to Cart</a></p>



          </div>
        </div>
      </div>
    </section>

@endsection