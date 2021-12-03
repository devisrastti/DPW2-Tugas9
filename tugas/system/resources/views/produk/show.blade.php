@extends ('admin.template.base')

@section('content')

<!-- start coding -->

   
    <div class="container">
        <div class="row">
   		    <div class="card mt-12 pt-5">
   		    	<div class="card">
   		    		<div class="card-header">
						<div class="container-fluid">
							Detail Data Produk
		   				</div>
                    	<div class="card-body">
                  			<h3>{{$produk->nama}}</h3>
                  			<hr>
                  			<p>
                  				{{ $produk->Harga_String }} |
                                Stok {{ $produk->stok }} |
                                Berat {{ $produk->berat }} gr |
                                Seller {{$produk->seller->nama}} |
                                Tanggal Produksi {{$produk->created_at->format("d F Y")}}
                  			</p>
                  			<p>
                  				{!! nl2br ($produk->deskripsi) !!}
                  			</p>
                    	</div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection