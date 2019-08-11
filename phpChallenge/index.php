<?php require 'views/header.php'; ?>

<nav class="navi-bar">
      <h1 class="main-logo"> <a href="index.php"> HBT</a></h1>
      <div class="btn-nav-group">
        <a href="login.php"> <button type="button" class="btn-tran" name="button">  Account  </button> </a>
        <a href="#"> <button type="button" class="btn-tran" name="button">  About  </button> </a>
        <a href="#"> <button type="button" class="btn-tran" name="button">  Contact  </button> </a>
      </div>
    </nav>
    <section class="full-cont">
      <article class="info-hero">
        <h1> <span class="green-text">Enjoy </span>Your Stay </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
        </p>
        <button type="button" name="button" class="btn-hero">About Our Hotel</button>
      </article>
      <img src="img/showcase.jpg" alt="">
      <div class="mid-box">
        <img src="img/photo-1.jpg" alt="">
        <article class="right-sect">
          <h1><span class="green-text">The History </span>Of Our Hotel</h1>
          <pre style="font-family: 'Roboto';">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </pre>
          <button type="button" name="button" class="btn-read">Read me</button>
        </article>
      </div>
      <div class="low-box">
        <div class="low-tool">
          <i class="fas fa-hotel fa-3x"></i>
          <h2>Great Location</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur
          </p>
          <p>
            adipisicing elit, Ut, omnis?
          </p>
        </div>
        <div class="low-tool">
          <i class="fas fa-utensils fa-3x"></i>
          <h2>Free Meals</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur
          </p>
          <p>
            adipisicing elit, Ut, omnis?
          </p>
        </div>
        <div class="low-tool">
          <i class="fas fa-dumbbell fa-3x"></i>
          <h2>Fitness Room</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur
          </p>
          <p>
            adipisicing elit, Ut, omnis?
          </p>
        </div>
      </div>
    </section>

<?php require 'views/footer.php'; ?>
