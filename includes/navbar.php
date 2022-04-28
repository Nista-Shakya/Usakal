<!-- header design -->
<header id="header">
  
  <nav id="sticky" class="navbar navbar-expand-lg navigation-wrap">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="image/ushakal.png" width="70" height="60"></a>
        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-stream navbar-toggler-icon"></i>
      </button>
     <div>

     <div class="collapse navbar-collapse" id="navbarText">
         
        
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <div class="search-container">  
         <form action="search.php">
         <input type="search" placeholder="Find products" name="search">
         <button type="submit" name="submit-search" class="button"><i class="fa fa-search" style="margin-left: 3px;"></i></button>
          </div>
         </form>
           <li class="nav-item">
             <a class="nav-link <?php if($page=='index'){echo 'active';}?>"  href="index.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about.php">About Us</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="contact.php">Contact Us</a>
           </li>
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Crochet</a></li>
            <li><a class="dropdown-item" href="#">Embroidery</a></li>
            <li><a class="dropdown-item" href="#">Earrings</a></li>
            <li><a class="dropdown-item" href="#">Foods</a></li>
            <li><a class="dropdown-item" href="#">Keychains</a></li>
            <li><a class="dropdown-item" href="#">Candle</a></li><li>
            <li><a class="dropdown-item" href="#">Scarf</a></li>
            <li><a class="dropdown-item" href="#">Handbag</a></li>
            <li><a class="dropdown-item" href="#">Purse</a></li>
            <li><a class="dropdown-item" href="#">Tote Bag</a></li>
          </ul>
        </li>
           <li class="nav-item">
             <a class="nav-link"  href="blogs.php" >Blogs</a>
           </li>
           
           
           <li class="nav-item">
              <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Login/Sign up</a>
            </li>
            <li class="nav-item">
             <a class="nav-link"  href="cart.php" ><i class="fa fa-shopping-cart" style='font-size: 20px;'></i></a>
           </li>
            
          </ul>
        </div>
      </div>
      </div>
    </nav>

    <span class="nav-indicator"></span>
  </header>

