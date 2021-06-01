<?php require_once ("includes/header.php") ?>
    <!-- NAVBAR -->
   <?php require_once ("includes/nav.php") ?>

    <!-- HOME -->
    <section class="home-section section-hero inner-page overlay bg-image" style="background-image: url('image/hero_1.jpg');"
      id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Job Listings</h1>
              <p>Find your dream jobs in our powerful dmt website.</p>
            </div>
          </div>
        </div>
      </div>


    </section>

    

    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
          <?php

            $sql = "SELECT * FROM jobs";
            $count = mysqli_query($con, $sql);
            $num_post = mysqli_num_rows($count);

            ?>
            <h2 class="section-title mb-2"><?php echo $num_post ?> Job Listed</h2>
          </div>
        </div>

        

        <div class="mb-5">
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
          <?php
          
         if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 15;
            $offset = ($pageno-1) * $no_of_records_per_page;  
          
            $total_pages_sql = "SELECT COUNT(*) FROM jobs";
            $result = mysqli_query($con,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);
    
            $query = "SELECT * FROM jobs ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
            $data = mysqli_query($con, $query);
            //$post_status ="";

            while($row = mysqli_fetch_array($data))
                {
                    $post_id = $row['id'];
                    $post_duration = $row['duration'];
                    $post_job = $row['job'];
                    $post_location = $row['post_location'];
                    $post_area = $row['area'];
                   // $post_amount = $row['amount'];
                    $post_publisher = $row['publisher'];
                    $post_field = $row['field'];
                    $post_amount1 = $row['amount1'];
                    $post_amount2 = $row['amount2'];
                    
            ?>
            <div class="col-md-2">
            
              <a href="job-single.php?p_id=<?php echo $post_id; ?>"><img src="image/featured-listing-1.jpg" alt="Image" class="img-fluid"></a>
            </div>
    
            <div class="col-md-4">
              <span class="badge badge-primary px-2 py-1 mb-3"><?php echo $post_duration; ?></span>
              <h2><a href="job-single.php?p_id=<?php echo $post_id; ?>"><?php echo $post_job; ?></a> </h2>
              <p class="meta">Publisher: <strong><?php echo $post_publisher ?></strong> In: <strong><?php echo $post_field  ?></strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3><?php echo $post_area ?></h3>
              <span class="meta"><?php echo $post_location; ?></span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black"><?php echo $post_amount1 ?> &mdash; <?php echo $post_amount2 ?></strong>
            </div>
            <?php

            }

            ?>
          </div>
       
        </div>

        <div class="row pagination-wrap">
          <div class="col-md-12 text-center ">
            <div class="custom-pagination ml-auto">
              <div class="d-inline-block">
                <ul class="pagination">
                  <li><a href="?pageno=1">First</a></li>
                  <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                      <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                  </li>
                  <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                      <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                  </li>
                  <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="site-section py-4 mb-5 border-top">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Our Candidates Work In Company</h2>
                <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit
                  mollitia ipsum facilis expedita tempora suscipit iste</p>
              </div>
            </div>

          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="image/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="image/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="image/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="image/logo_visa.svg" alt="Image" class="img-fluid logo-4">
          </div>
        </div>
      </div>
    </section>


    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Sign up Here.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="registration.php" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>
    <!------footer---->

    <?php require_once ("includes/footer.php") ?>