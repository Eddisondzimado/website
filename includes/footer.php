

    <footer class="site-footer">


      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
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
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="about.php">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="https://www.facebook.com/developmytalents/" target="_blank"><span class="icon-facebook"></span></a>
              <a href="https://www.twitter.com/DevelopMyTalent/status/511995138890276864?s=19" target="_blank"><span class="icon-twitter"></span></a>
              <a href="https://www.instagram.com" target="_blank"><span class="icon-instagram"></span></a>
              <a href="https://www.linkedin.com" target="_blank"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-left">
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
              <a href="https://api.whatsapp.com/send?phone=+233204085456" target="_blank" class="whatsapp"  id="inBtn">
              <img src="image/b.png" alt="b.png" width="45px" height="45px"></a>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | DMT and HR solutions limited. <i class="icon-heart-o" aria-hidden="true"></i></a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>



  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->

<!---------ckeditor ---->
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

 <!---------ckeditor ---->
 <script src="js/ckeditor.js"></script>
  <!-- <script src="js/bootstrap-select.min.js"></script> -->

  <script src="js/custom.js"></script>
  <script>
//Get the button
var mybutton = document.getElementById("inBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "block";
  }
}

// When the user clicks on the button, scroll to the top of the document
//function topFunction() {
//  document.body.scrollTop = 0;
//  document.documentElement.scrollTop = 0;
//}
</script>
<style>

#inBtn {
  display: none;
  position: fixed;
  bottom: 60px;
  right: 40px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 100px;
}

#inBtn:hover {
  background-color: green;
}
</style>
</body>

</html>