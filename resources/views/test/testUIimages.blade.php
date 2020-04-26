@extends('base.base') 


@section('content')


<!--Main Navigation-->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
        
          <!-- Navbar brand -->
          <a class="navbar-brand" href="#">Navbar</a>
        
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
              aria-expanded="false" aria-label="Toggle navigation">
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
                      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
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
        
        </nav>
        <!--/.Navbar-->
    </header>
    <!--Main Navigation-->
    
    <!--Main layout-->
    <main>
        <!--Main container-->
        <div class="container">
        
            <!--Grid row-->
            <div class="row">
        
                <!--Grid column-->
                <div class="col-md-7">

                    <!--Featured image -->
                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="card-img-top" alt="">
                        <div class="mask rgba-white-light"></div>
                      </div>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-md-5">
        
                    <h2>Some awesome heading</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque quam dolorem
                        voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint mollitia, perferendis
                        natus quaerat!</p>
                    <a href="https://mdbootstrap.com/" class="btn btn-primary">Get it now!</a>
                  
        
                </div>
                <!--Grid column-->
        
            </div>
            <!--Grid row-->
        
            <!--Grid row-->
            <div class="row">
        
                <!--Grid column-->
                <div class="col-lg-4 col-md-12">
        
                    <!--Grid row-->
                    <div class="row">
                    
                      <!--Grid column-->
                      <div class="col-lg-4 col-md-12">
                    
                        <!--Card-->
                        <div class="card">
                    
                          <!--Card image-->
                          <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top" alt="">
                            <a href="#">
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                    
                          <!--Card content-->
                          <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
                            <a href="#!" class="btn btn-primary">Button</a>
                          </div>
                    
                        </div>
                        <!--/.Card-->
                    
                      </div>
                      <!--Grid column-->
                    
                      <!--Grid column-->
                      <div class="col-md-6 col-lg-4">
                    
                        <!--Card-->
                        <div class="card">
                    
                          <!--Card image-->
                          <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(74).jpg" class="card-img-top" alt="">
                            <a href="#">
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                    
                          <!--Card content-->
                          <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                          </div>
                    
                        </div>
                        <!--/.Card-->
                    
                      </div>
                      <!--Grid column-->
                    
                      <!--Grid column-->
                      <div class="col-lg-4 col-md-6">
                    
                        <!--Card-->
                        <div class="card">
                    
                          <!--Card image-->
                          <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(75).jpg" class="card-img-top" alt="">
                            <a href="#">
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                    
                          <!--Card content-->
                          <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                          </div>
                    
                        </div>
                        <!--/.Card-->
                    
                      </div>
                      <!--Grid column-->
                    
                    </div>
                    <!--Grid row-->
        </div>
        <!--Main container-->
    </main>
    <!--Main layout-->
    

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 mt-4">
    
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
    
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">
    
            <!-- Content -->
            <h5 class="text-uppercase">Footer Content</h5>
            <p>Here you can use rows and columns here to organize your footer content.</p>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none pb-3">
    
          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
    
              <!-- Links -->
              <h5 class="text-uppercase">Links</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
    
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
    
              <!-- Links -->
              <h5 class="text-uppercase">Links</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
    
            </div>
            <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
    
      </div>
      <!-- Footer Links -->
      


        
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    
    </footer>
    <!-- Footer -->








@endsection