<?php require_once ("includes/header.php") ?>
    <!-- NAVBAR -->
   <?php require_once ("includes/nav.php") ?>
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('image/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">develop my talent </h1>
              <p>Let's help you arrive at your dream job.</p>
            </div>
            <form method="POST" action="search.php" enctype="multipart/form-data" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" name="job_post" class="form-control form-control-lg" placeholder="Job title, keywords...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="place" class="form-control">
                    <option name="anywhere">Anywhere</option>
                    <option name="accra">Accra</option>
                    <option name="kumasi">Kumasi</option>
                    <option name="cape_coast">Cape Coast</option>
                    <option name="tamale">Tamale</option>
                    <option name="takoradi">Takoradi</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="time" class="form-control">
                    <option name="">Part Time</option>
                    <option name="">Full Time</option>
                    <option name="">Freelancer</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" name="btn_search" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Search for your career job here.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="registration.php" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>
    
  

    <?php require_once ("includes/footer.php") ?>