<?php require_once ("includes/header.php") ?>
    <!-- NAVBAR -->
    <?php require_once ("includes/nav.php") ?>

    <!-- HOME -->
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('image/hero_1.jpg');"
      id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="custom-breadcrumbs mb-0">
              <span class="slash">Posted by</span> <a href="blog.php" class="text-white"
                target="_blank">dmt</a>
              <span class="mx-2 slash">&bullet;</span>
              <span class="text-white"><strong></strong></span>
            </div>
            <h1 class="text-white">Get informed &amp; let's help you develop your talent</h1>
    
          </div>
        </div>
      </div>
    </section>
   
    <section class="site-section" id="next-section">
  
      <div class="container">
        <div class="row">
        <?php

            if(isset($_GET['p_id']))
            {
                $Post_ID = $_GET['p_id'];
            }
            $query = "SELECT post_id, post_title, post_auther, post_date, post_img, post_content, post_tags, post_status FROM posts WHERE post_id='$Post_ID' ORDER BY post_id DESC";
            $data = mysqli_query($con, $query);

            while($row = mysqli_fetch_assoc($data))
                {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_auther'];
                    $post_date = $row['post_date'];
                    $post_img = $row['post_img'];
                    $post_content = $row['post_content'];
                    $post_tags = $row['post_tags'];
            ?>
          <div class="col-lg-8 blog-content">
            <h3 class="mb-4"><?php echo $post_title ?></h3>
            <p class="lead"><?php echo $post_author ?>&nbsp;&nbsp;<span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">
                      <?php echo $post_date ?></span></span></p>
            <p><img src= "imgs/<?php echo $post_img ?>" alt=""
            class="img-responsive img-fluid rounded mb-4" ></p>
            <p><?php echo $post_content ?></p>
    
            <div class="pt-5">
              <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a href="#">#html</a>, <a
                  href="#">#trends</a></p>
            </div>
            <?php
                       
                      }

                      if(isset($_POST['btn_post_com']))
                      {
                          $Post_ID = $_GET['p_id'];
                          $Author = $_POST['post_com_name'];
                          $Email = $_POST['post_com_email'];
                          $Comment = $_POST['post_com_msg'];

                          $sql = "INSERT INTO comments (comment_post_id, com_name, com_email, 
                          com_message, com_date) VALUES ('$Post_ID', '$Author', '$Email', '$Comment', now())";

                          $data = mysqli_query($con, $sql);
                          if($data)
                          {
                              echo '<div class="alert alert-success">Your Comment is submitted</div>';
                          }
                          else
                          {
                              echo '<div class="alert alert-danger">Something Went Wrong</div>';
                          }
                          
                          $update_comment_count = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = '$Post_ID'";
                          mysqli_query($con, $update_comment_count);
                      }
                 
                 ?>
            <div class="pt-5">
            
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="" method="POST" enctype="multipart/form-data" class="">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="post_com_name" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="post_com_email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="post_com_msg" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="btn_post_com" value="Post Comment" class="btn btn-primary btn-md">
                  </div>
                </form>
              </div>
              <?php
           
              /*$sql = "SELECT * FROM comments";
              $count = mysqli_query($con, $sql);
              $num_blog = mysqli_num_rows($count);
*/
              ?>
              <h3 class="mb-5"> Comments</h3>
              <?php

                    $comment_query = "SELECT * FROM comments WHERE comment_post_id = '$Post_ID' ORDER BY comment_id DESC";

                    $comment_result = mysqli_query($con, $comment_query);

                    while($data = mysqli_fetch_assoc($comment_result))
                    {
                        $comment_author = $data['com_name'];
                        $comment_date = $data['com_date'];
                        $comment_content = $data['com_message'];
                ?>
            <div>
            
            </div>
                 
                  <ul class="comment-list">
                    <li class="comment">
                      <div class="vcard bio">
                        <br />
                        <img src="image/avatar.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <br />
                        <h3><?php echo $comment_author; ?></h3>
                        <div class="meta"><?php echo $comment_date ?></div>
                        <p><?php echo $comment_content; ?></p>
                      </div>
                  <?php
                   
                
              }

             
             ?>
               </div>
          </div>
          <div class="col-lg-4 sidebar pl-lg-5">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control form-control-lg" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <img src="image/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4 w-50 rounded-circle">
              <h3>About The Author</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate
                quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit
                cupiditate numquam!</p>
              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
            </div>
    
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <?php
                    $query = "SELECT * FROM categories";
                    $result = mysqli_query($con, $query);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo " <li>
                            <a href='category.php?category={$cat_id}'>{$cat_title}</a>
                        </li>";
                    }

                    ?>
              </div>
            </div>
    
    
            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate
                quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit
                cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style>

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  border: none;
  
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */


/* When the textarea gets focus, do something */

/* Set a style for the submit/send button */

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
   <?php require_once ("includes/footer.php") ?>