<?php require_once ("includes/header.php") ?>
    <!-- NAVBAR -->
    <?php require_once ("includes/nav.php") ?>
   

    <!-- HOME -->
    <section class="home-section section-hero inner-page overlay bg-image"
      style="background-image: url('image/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Our Blog</h1>
              <p>Find your dream jobs in our powerful dmt website.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section">
    <div class="container">
    <?php
            if(isset($_GET['category']))
            {
                $Category_ID = $_GET['category'];
            }

            $query = "SELECT * FROM posts WHERE post_cat_id='$Category_ID'";
            $data = mysqli_query($con, $query);

            while($row = mysqli_fetch_array($data))
                {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_auther'];
                    $post_date = $row['post_date'];
                    $post_img = $row['post_img'];
                    $post_content = $row['post_content'];
                    $post_tags = $row['post_tags'];
            ?>
      
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-5">
            <a href="blog-single.php?p_id=<?php echo $post_id; ?>"><img class="img-responsive img-fluid rounded mb-4" src= "imgs/<?php echo $post_img ?>" alt=""
                ></a>
            <h3><a href="blog-single.php?p_id=<?php echo $post_id; ?>" class="text-black"><?php echo $post_title ?></a></h3>
          
            <div><?php echo $post_date ?> <span class="mx-2">|</span> <a href="blog-single.php?p_id=<?php echo $post_id; ?>"> Comments</a></div>
          </div>
          
          </div>
          
        </div>
        <?php        
                }
        ?>
      </div>
    </section>

    <?php require_once ("includes/footer.php") ?>