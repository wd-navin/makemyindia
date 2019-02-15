@extends('layouts.app')

@section('content')

<!-- ..... SLIDER START .... -->
<div class="container-fluid">
    <div class="row justify-content-center">
    <div id="carouselExampleCaptions" class="carousel slide w-100" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="{{ asset('images/chicago.jpg') }}" data-holder-rendered="true">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="{{ asset('images/la.jpg') }}" data-holder-rendered="true">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="{{ asset('images/ny.jpg  ') }}" data-holder-rendered="true">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
        </div>
    </div>
</div>
<!-- ..... SLIDER END .... -->

<!-- ..... CARDS START .... -->
<div class="container">
 <!--  <h3 class="pb-3 mb-4 font-italic border-bottom">
      Card Styles
   </h3>-->
   <div class="row my-4 pt-4">
      <div class="col-md-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">World</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Health</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 11</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>
   <div class="row mb-4">
      <div class="col-md-6">
         <div class="card border-primary flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">World</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Health</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 11</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>
   </div>
   <!-- ..... CARDS END .... -->

  <!-- ..... CONTACT FORM START .... -->
  <div class="container" style="background-image:url('{{ asset('images/download.jpg') }}');">
    <div class="row mb-5">
      <div class="col-md-6 mx-auto">
      <form class="shadow-lg" style="padding: 60px 41px 80px 41px;" id="contact_form">
      <div>
        <h4>CONTACT FORM</h4>
      </div>
  <label>
    <p class="label-txt">Enter your email</p>
    <input type="text" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter your name</p>
    <input type="text" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter your password</p>
    <input type="text" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit" class="py-2">SUBMIT</button>
</form>
      </div>
    </div>
  </div>
<!-- ..... CONTACT FORM END .... -->

   <!-- ..... START .... -->
   <div class="container-fluid">  
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Punny headline</h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
 </div>


 

@endsection
