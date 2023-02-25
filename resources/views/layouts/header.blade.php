<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Shoppers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css') }}">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-warning fw-bold fst-italic ">
    
    <div class="container-fluid ">
      <a class="navbar-brand" href="#">The Shoppers</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle  fs-5  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu  drop-menu ">
              <li><a class="dropdown-item " href="#">Deals</a></li>
              <li><a class="dropdown-item" href="#">Support & Services</a></li>
              <li><a class="dropdown-item" href="#">Brands</a></li>
              <li><a class="dropdown-item" href="#">Featured</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Shop by Department</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Appliances</a></li>
              <li><a class="dropdown-item" href="#">TV & Home Theater</a></li>
              <li><a class="dropdown-item" href="#">Computer & Tablets</a></li>
              <li><a class="dropdown-item" href="#">Cameras, Camcorders & Drones</a></li>
              <li><a class="dropdown-item" href="#">Movies & Music</a></li>
              <li><a class="dropdown-item" href="#">Car Electronics & GPS</a></li>
              <li><a class="dropdown-item" href="#">Wareable Technology</a></li>
              <li><a class="dropdown-item" href="#">Health & Wellness</a></li>
              <li><a class="dropdown-item" href="#">Home, Furniture & Office</a></li>
              <li><a class="dropdown-item" href="#">Smart Home, Security & Wi-Fi</a></li>
              <li><a class="dropdown-item" href="#">Outdoor Living</a></li>
              <li><a class="dropdown-item" href="#">Electric Transportation</a></li>
              <li><a class="dropdown-item" href="#">Toys, Games & Collectibles</a></li>
              <li><a class="dropdown-item" href="#">Sustainable Living</a></li>
            </ul>
          </li>
        </ul>
        <form class=" search-bar " role="search">
          <div class="p-2 bg-light rounded rounded-pill shadow-sm mb-1">
            <div class="input-group">
              <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-warning p-2  rounded rounded-pill "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></button>
              </div>
            </div>
          </div>
        
        </form>
        <!-- <form class="d-flex search-bar" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        <div class="cart-btn">
        <button type="button" class="btn btn-outline-dark fw-bold fst-italic fs-4 "><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
        </svg>Cart</button>
      </div>
      </div>
    </div>
  </nav>