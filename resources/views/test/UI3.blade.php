@extends('base.base') 

<style>
    html,
body,
header,
#intro {
    height: 100%;
}

#intro {
    background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%283%29.jpg")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

</style>

@section('content')


<!--Main Navigation-->
<header>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">

  <div class="container">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Navbar</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

      </ul>
      <!-- Links -->

      <form class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->

  </div>

</nav>
<!--/.Navbar-->
<!--Mask-->
<div id="intro" class="view">

    <!--Mask-->
    <div id="intro" class="view">
    
        <div class="mask rgba-white-slight">
    
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
    
                <div class="row d-flex justify-content-center text-center">
    
                    <div class="col-md-10">
    
                        <!-- Heading -->
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Travel</h2>
    
                        <!-- Divider -->
                        <hr class="hr-light">
    
                        <!-- Description -->
                        <h4 class="white-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consequuntur.</h4>
                        <button type="button" class="btn btn-outline-white">Read more<i class="fas fa-book ml-2"></i></button>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
    </div>
    <!--/.Mask-->
</div>
<!--/.Mask-->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
    
            <!--Section: Best Features-->
            <section id="best-features">
                <!--Section: Best Features-->
                <section id="best-features" class="text-center">
                
                  <!-- Heading -->
                  <h2 class="mb-5 font-weight-bold">Best Features</h2>
                
                  <!--Grid row-->
                  <div class="row d-flex justify-content-center mb-4">
                
                      <!--Grid column-->
                      <div class="col-md-8">
                
                          <!-- Description -->
                          <p class="grey-text font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate hic provident nulla repellat
                              facere esse molestiae ipsa labore porro minima quam quaerat rem, natus repudiandae debitis est
                              sit pariatur.</p>
                
                      </div>
                      <!--Grid column-->
                
                  </div>
                  <!--Grid row-->
                
                  <!--Grid row-->
                  <div class="row">
                
                      <!--Grid column-->
                      <div class="col-md-4 mb-1">
                          <i class="fas fa-camera-retro fa-4x green-text"></i>
                          <h4 class="my-4">Experience</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                              assumenda deleniti hic.</p>
                      </div>
                      <!--Grid column-->
                
                      <!--Grid column-->
                      <div class="col-md-4 mb-1">
                          <i class="fas fa-heart fa-3x pink-text"></i>
                          <h4 class="my-4">Happiness</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                              assumenda deleniti hic.</p>
                      </div>
                      <!--Grid column-->
                
                      <!--Grid column-->
                      <div class="col-md-4 mb-1">
                          <i class="fas fa-bicycle fa-2x orange-text"></i>
                          <h4 class="my-4">Adventure</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                              assumenda deleniti hic.</p>
                      </div>
                      <!--Grid column-->
                
                  </div>
                  <!--Grid row-->
                
                </section>
                <!--Section: Best Features-->
    
    
            </section>
            <!--Section: Best Features-->
    
            <hr class="my-5">
    
            <!--Section: Examples-->
            <section id="examples">
                <h2 class="mb-5 font-weight-bold text-center">Examples heading</h2>
    
                <!--Section: Examples-->
                <section id="examples" class="text-center">
                
                    <!--Grid row-->
                    <div class="row">
                
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="view overlay z-depth-1-half">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                                    <a href="#">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                              </div>
                        
                              <h4 class="my-4 font-weight-bold">Heading</h4>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                                aperiam minima
                                assumenda deleniti hic.</p>
                        </div>
                        <!--Grid column-->
          
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="view overlay z-depth-1-half">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                                    <a href="#">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                              </div>
                        
                              <h4 class="my-4 font-weight-bold">Heading</h4>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                                aperiam minima
                                assumenda deleniti hic.</p>
                        </div>
                        <!--Grid column-->
                
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="view overlay z-depth-1-half">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                                    <a href="#">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                              </div>
                        
                              <h4 class="my-4 font-weight-bold">Heading</h4>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                                aperiam minima
                                assumenda deleniti hic.</p>
                        </div>
                        <!--Grid column-->
                
                    </div>
                    <!--Grid row-->
                
                    <!--Grid row-->
                    <div class="row">
                
                        <!--Grid column-->
                     
                        <!--Grid column-->
                
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="view overlay z-depth-1-half">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                                    <a href="#">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                              </div>
                        
                              <h4 class="my-4 font-weight-bold">Heading</h4>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                                aperiam minima
                                assumenda deleniti hic.</p>
                        </div>
                        <!--Grid column-->
                
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="view overlay z-depth-1-half">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                                    <a href="#">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                              </div>
                        
                              <h4 class="my-4 font-weight-bold">Heading</h4>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                                aperiam minima
                                assumenda deleniti hic.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 ">
                            <div class="view overlay z-depth-1-half">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                                    <a href="#">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                              </div>
                        
                              <h4 class="my-4 font-weight-bold">Heading</h4>
                              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam,
                                aperiam minima
                                assumenda deleniti hic.</p>
                        </div>
                        <!--Grid column-->
                
                    </div>
                    <!--Grid row-->
                
                </section>
                <!--Section: Examples-->
    
            </section>
            <!--Section: Examples-->
    
            <hr class="my-5">
    
            <!--Section: Gallery-->
            <section id="gallery">
    
                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Gallery heading</h2>
            
                <!--Grid row-->
                <div class="row">
            
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
            
                        <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->>
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

            
                    </div>
                    <!--Grid column-->
            
                    <!--Grid column-->
                    <div class="col-md-6">
            
            
    <!--Excerpt-->
    <a href="" class="teal-text">
        <h6 class="pb-1"><i class="fas fa-heart"></i><strong> Lifestyle </strong></h6>
    </a>
    <h4 class="mb-3"><strong>This is title of the news</strong></h4>
    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
        debitis aut rerum.</p>

    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
        debitis aut rerum.</p>
    <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p>
    <a class="btn btn-primary btn-md">Read more</a>

            
                    </div>
                    <!--Grid column-->
            
                </div>
                <!--Grid row-->
            
    
            </section>
            <!--Section: Gallery-->
    
            <hr class="my-5">
    
            <!--Section: Contact-->
            <section id="contact">
                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>
            
                <!--Grid row-->
                <div class="row">
            
                <!--Grid column-->
                <div class="col-lg-5 col-md-12">
            
            
            
                </div>
                <!--Grid column-->
            
                <!--Grid column-->
                <div class="col-lg-7 col-md-12">
            
            
            
                </div>
                <!--Grid column-->
            
                </div>
                <!--Grid row-->
            
    
    
            </section>
            <!--Section: Contact-->
    
        </div>
    </main>
    <!--Main layout-->
</main>
<!--Main layout-->

<!--Footer-->
<footer>

</footer>
<!--Footer-->


<script>
    $('.carousel').carousel({
      interval: 3000,
    })
</script>
@endsection