<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset( "/css/app.css") }}">
    <title>Document</title>
</head>
<body>
    <div id="app">
      <home></home>
    </div>
      {{-- <li class="nav-item"> --}}
        {{-- <router-link to="/" class="nav-link">home</router-link> --}}
      {{-- </li> --}}

      {{-- <li class="nav-item">
       <a href="./js/views/Home.vue">ok</a>
      </li> --}}





          <!-- <div id="carouselExampleControls" class="carousel slide mx-80" data-ride="carousel"> -->
            <!-- <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img10.jpg" class="img-fluid" alt="Responsive image">
              </div>
              <div class="carousel-item">
                <img src="img/img4.jpg" class="img-fluid" alt="Responsive image">
              </div>
              <div class="carousel-item">
                <img src="img/img5.jpg" class="img-fluid" alt="Responsive image">
              </div>
              <div class="carousel-item">
                <img src="img/img6.jpg" class="img-fluid" alt="Responsive image">
              </div>
              <div class="carousel-item">
                <img src="img/img7.jpg" class="img-fluid" alt="Responsive image">
              </div>
              <div class="carousel-item">
                <img src="img/img8.jpg" class="img-fluid" alt="Responsive image">
              </div>
              <div class="carousel-item">
                <img src="img/img9.jpg" class="img-fluid" alt="Responsive image">
              </div>
              <div class="carousel-item">
                <img src="img/img10.jpg" class="img-fluid" alt="Responsive image">
              </div>
            </div> -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="navbar navbar-expand-lg navbar-light " style="background-color: #E3F2FD;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, maiores.</div>
          <div class="container-fluid">
          <div class="row">
          <!-- <div class="">
            {{-- <h5 class="dropdown-header text-bold">left-menu</h5>
            <a class="dropdown-item my-3"  style="background-color: lightblue; " href="#">Action</a>
            <a class="dropdown-item my-3" style="background-color: lightblue;" href="#">Action</a>
            <a class="dropdown-item my-3" style="background-color: lightblue;" href="#">Action</a>
            <a class="dropdown-item my-3" style="background-color: lightblue;" href="#">Action</a> --}}
          </div> -->
          <div class="col-md-9 sm-12 pt-1" style="padding-left:100px ">
            <router-view></router-view>
        
            
            {{-- <div class="container justify-content-center "><font-awesome-icon icon="spinner" spin size="4x"/></div> --}}
          </div>
          
          <!-- <div class="col-md-2 pt-5 mx-3 border-primary">
            <img src="img/img34.jpg" class="" style="width:100%; height:auto;" alt="...">
            <img src="img/img31.jpg" class="" style="width:90%; height:auto; padding-top:50px;" alt="...">
          </div> -->
        </div>
        {{-- footer --}}
        <div class="row" style="background-color: lightblue;">
            <div class="container-fluid">
                <div class="row p-5">
            <div class="col-md-3">Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Hic consequuntur omnis dignissimos placeat
                voluptas at, quasi explicabo tempore dolores optio, minus possimus
                 doloremque enim numquam in labore error, itaque vel!
            </div>
            <div class="col-md-7">
                <form>
                  <div class="container">
                    <h5 class="font-weight-bold mb-1 small" style="font-size: 25px;">Contact</h5>
                    <div class="row">
                      <div class="col-md-6">
                       <div class=""> <input type="text" class="form-control " placeholder="First name"></div>
                        <div class="pt-3"><input type="text" class="form-control " placeholder="Last name"></div>
                      </div>
                      <div class="col-md-6">
                        <textarea class="form-control" placeholder="Message" name="" id="" cols="30" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="pt-2">
                        <button type="submit"  style="font-size: 10px;" class="btn btn-outline-dark justify-content-center">Envoyer</button>
                    </div>
                  </div>
                  </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    {{-- <home></home> --}}
    </div>
    </div>
    <script src="{{ asset("js/app.js") }}"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script>
      import Home from './js/views/Home.vue'
    </script>
   
</body>
</html>

