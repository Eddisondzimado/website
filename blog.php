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

        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 10;
            $offset = ($pageno-1) * $no_of_records_per_page;  
          
            $total_pages_sql = "SELECT COUNT(*) FROM posts";
            $result = mysqli_query($con,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

          $query = "SELECT post_id, post_title, post_auther, post_date, post_img, LEFT (post_content, 150) AS post_content, post_tags, post_status FROM posts WHERE post_status= 'published' ORDER BY post_id DESC LIMIT $offset, $no_of_records_per_page";
          $data = mysqli_query($con, $query);
          $post_status ="";

          while($row = mysqli_fetch_assoc($data))
              {
                  $post_id = $row['post_id'];
                  $post_title = $row['post_title'];
                  $post_author = $row['post_auther'];
                  $post_date = $row['post_date'];
                  $post_img = $row['post_img'];
                  $post_content = $row['post_content'];
                  $post_tags = $row['post_tags'];
                  $post_status = $row['post_status'];
          ?>
      
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-5">
            <a href="blog-single.php?p_id=<?php echo $post_id; ?>"><img class="img-responsive img-fluid rounded mb-4" src= "imgs/<?php echo $post_img ?>" alt=""
                ></a>
            <h3><a href="blog-single.php?p_id=<?php echo $post_id; ?>" class="text-black"><?php echo $post_title ?></a></h3>
            <?php
            
           /* $sql = "SELECT * FROM comments";
            $count = mysqli_query($con, $sql);
             $blog_num = mysqli_num_rows($count)
*/
            ?>
            <div><?php echo $post_date ?> <span class="mx-2">|</span> <a href="blog-single.php?p_id=<?php echo $post_id; ?>">Comments</a></div>
          </div>
          
        </div>
        <?php
                       
          }
          if($post_status !== 'published')
                {
                  echo '<div class="alert alert-danger">Post NOT found</div> : )';
                }

        ?>
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

    <?php require_once ("includes/footer.php") ?>