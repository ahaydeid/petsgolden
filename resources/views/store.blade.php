@include('partials.customer.frametop')


@include('partials.customer.secondnav')


{{-- Tombol Back Start --}}
<div class="button mb-4" style="margin-top: 105px; margin-left: 80px;">
<h1 class="text-center mb-5 fw-bold">PETSGOLDEN STORE</h1>
    <a href="../">
        <button type="button" class="btn text-light fw-bold px-5" style="
            box-shadow: 4px 4px 14px -6px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 4px 4px 14px -6px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 4px 4px 14px -6px rgba(0, 0, 0, 0.75);
            font-size: 25px;
            background-color: #30a9ff;
            border-radius: 50px;">
        Back
    </button>
    </a>
</div>
{{-- Tombol Back End --}}

<div class="mb-5 px-5">
    <div class="booking row justify-content-center">
        @foreach ($products->reverse() as $item ) 
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="" style="width:100%;">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="..." style="height: 200px; overflow: hidden;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama_produk }}</h5>
                    <div style="height: 70px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                        <p class="card-text fs-6 mb-0">{{ $item->deskripsi }}</p>
                    </div>
                    <span class="card-title"><span class="fw-bold">{{ $item->jumlah }}</span> pcs</span>
                    <h6 class="card-title">Rp {{ $item->harga }}</h6>
                    <a href="wa.me/6282211187118" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>&nbsp;Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('partials.customer.footer')


@include('partials.customer.framedown')