<?php require_once ("includes/header.php") ?>

    <!-- NAVBAR -->
    <?php require_once ("includes/nav.php") ?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('image/hero_1.jpg');"
      id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Product Designer</h1>
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="site-section">
    <?php

      if(isset($_GET['p_id']))
      {
          $Post_ID = $_GET['p_id'];
      }
      $query = "SELECT * FROM jobs WHERE id='$Post_ID' ORDER BY id DESC";
      $data = mysqli_query($con, $query);
      //$post_status ="";

      while($row = mysqli_fetch_assoc($data))
          {
            $post_id = $row['id'];
            $post_duration = $row['duration'];
            $post_job = $row['job'];
            $post_location = $row['post_location'];
            $post_area = $row['area'];
            $post_vacancy = $row['vacancy'];
            $post_gender = $row['gender'];
            $post_date = $row['post_date'];
            $post_deadline = $row['deadline'];
            $post_image = $row['post_image'];
            $post_responsiblity = $row['responsiblity'];
            $post_education = $row['education'];
            $post_benefit = $row['benefit'];
            $post_publisher = $row['publisher'];
            $post_field = $row['field'];
            $post_amount1 = $row['amount1'];
            $post_amount2 = $row['amount2'];
      ?>
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
                <img class="img-responsive" src="image/featured-listing-1.jpg" alt="Image" class="img-fluid" >
              </div>
              <div>
                <h2><?php echo $post_job ?></h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php echo $post_area ?></span>
                  <span class="m-2"><span class="icon-room mr-2"></span><?php echo $post_location ?></span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">
                      <?php echo $post_duration ?></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save
                  Job</a>
              </div>
              <div class="col-6">
                <a href="apply.php" class="btn btn-block btn-primary btn-md">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <figure class="mb-5"><img src= "imgs/<?php echo $post_image ?>"
                  class="img-fluid rounded"></figure>
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job
                Description</h3>
              <p><?php echo $post_education ?>
              </p>
              
            </div>
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                  class="icon-rocket mr-3"></span>Responsibilities</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span><?php echo $post_responsiblity ?></span></li>
              </ul>
            </div>
    
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>
                Education</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span><?php echo $post_education ?></span></li>
                
              </ul>
            </div>
    
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other
                Benifits</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span
                    class="icon-check_circle mr-2 text-muted"></span><span><?php echo $post_benefit ?></span></li>
                
              </ul>
            </div>
    
            
          </div>
          <div class="col-lg-4">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Published on:</strong> <?php echo $post_date ?></li>
                <li class="mb-2"><strong class="text-black">Vacancy:</strong> <?php echo $post_vacancy ?></li>
                <li class="mb-2"><strong class="text-black">Employment Status:</strong> <?php echo $post_duration ?></li>
                <li class="mb-2"><strong class="text-black">Experience:</strong><?php echo $post_location ?></li>
                <li class="mb-2"><strong class="text-black">Job Location:</strong> <?php echo $post_location ?></li>
                <li class="mb-2"><strong class="text-black">Salary:</strong> <?php echo $post_amount1 ?> - <?php echo $post_amount2 ?></li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> <?php echo $post_gender ?></li><strong class="text-black">Deadline: </strong><?php echo $post_deadline ?></li>
              </ul>
            </div>
    
            <div class="bg-light p-3 border rounded">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
              <div class="px-3">
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
              </div>
            </div>
    
          </div>
        </div>
      </div>
      <?php
        }

        ?>
    </section>
    

    <?php require_once ("includes/footer.php") ?>