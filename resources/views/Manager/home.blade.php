@extends('Manager.app')

@section('content')
<style>
  	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
		width: 100%;
	  	margin: auto;
	}
  	.item{
		height: 550px;
  	}	

  	.verticalLine {
    	border-left: thick solid #7D858A;
	}
</style>
<!-- image slider make carousel -->	  
<br><br>
<div id="homeCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	  <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
	  <li data-target="#homeCarousel" data-slide-to="1"></li>
	  <li data-target="#homeCarousel" data-slide-to="2"></li>
	  <li data-target="#homeCarousel" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
	  <div class="item active">
		<img src="{{ URL::asset('img/makanan-1.jpg') }}" alt="First-slide">
		<div class="container">
			<div class="carousel-caption">
				<h1>Ikan dan Ayam Ala Indonesia</h1>
			</div>
		</div>
	  </div>

	  <div class="item">
		<img src="{{ URL::asset('img/makanan-2.jpg') }}" alt="Second-slide">
		<div class="container">
			<div class="carousel-caption">
				<h1>Masakan Padang</h1>
			</div>
		</div>
	  </div>
	
	  <div class="item">
		<img src="{{ URL::asset('img/makanan-3.jpg') }}" alt="Third-slide">
		<div class="container">
			<div class="carousel-caption">
				<h1>Nasi Goreng</h1>
			</div>
		</div>
	  </div>

	  <div class="item">
		<img src="{{ URL::asset('img/makanan-4.jpg') }}" alt="Forth-slide">
		<div class="container">
			<div class="carousel-caption">
				<h1>Sate</h1>
			</div>
		</div>
	  </div>
	</div>	
	
	<!-- Left and right controls -->
	<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
	  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
	  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
</div>

<!-- selesai image slider -->

<div class="jumbotron">
	<div class="container">
		<blockquote class="blockquote-reverse">
	    <p>
	    	Sistem ini berfungsi untuk membantu menangani segala macam transaksi yang terjadi di dalam Warung Makan Pondok Rempah
	    	, sistem ini juga berfungsi untuk melakukan kontroling terhadap semua transaksi yang ada dan dengan adanya sistem ini
	    	data transaksi akan terjamin dan tidak akan hilang. Fungsi lain dari sistem ini juga dapat mengeluarkan laporan berdasarkan
	    	tanggal yang diminta manager.
	    </p>
	    <footer>Teknik Informatika</footer>
  		</blockquote>
	</div>
</div>

@endsection