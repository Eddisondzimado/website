<?php require_once ("includes/header.php") ?>

    <!-- NAVBAR -->
    <?php require_once ("includes/nav.php") ?>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
          <div class="mb-5 text-center"><br /><br /><br /><br />
              <h1 class="text-white font-weight-bold">Apply Now</h1>
              <img src="image/image.gif"  style="height: 35px; width: 35px" >
            </div>
          </div>
        </div>
      </div>

</section>
<section>

    <?php

                if(isset($_POST['btn_apply']))
                {
                  $social = $_POST['social'];
                  $soc = "";
                  foreach($social as $soc1){
                    $soc .= $soc1.",";
                  }
                  $Post_fname = $_POST['fname'];
                  $Post_mname = $_POST['mname'];
                  $Post_lname = $_POST['lname'];

                  $Post_tel = $_POST['telephone'];
                  $Post_mobile = $_POST['mobile'];
                  $Post_phone = $_POST['phone'];
                  $Post_f_email = $_POST['post_f_email'];
                  $Post_s_email = $_POST['post_s_email'];
                  $Post_address = $_POST['post_address'];
                  $Post_residence = $_POST['post_residence'];

                  $Post_next_kin = $_POST['post_kin'];
                  $Post_contact = $_POST['post_contact_details'];
                  $Post_relationship = $_POST['post_relationship'];
                  $Post_g_name = $_POST['post_guarantor_name'];
                  $Post_g_contact = $_POST['post_contact_guarantor'];
                  $Post_g_relation = $_POST['post_guarantor_relationship'];

                  $Post_birth = $_POST['birth'];
                  $Post_national = $_POST['post_p_national'];
                  $Post_salary = $_POST['post_salary'];
                  $Post_expect_salary = $_POST['post_expected_salary'];
                 
                 

                  $status = $_POST['status'];
                  $stat = "";
                  foreach($status as $stat1){
                    $stat .= $stat1.",";
                  }
                  $universal = $_POST['universal'];
                  $uni = "";
                  foreach($universal as $uni1){
                    $uni .= $uni1.",";
                  }
                  $skills = $_POST['skill'];
                  $sk = "";
                  foreach($skills as $sk1){
                    $sk .= $sk1.",";
                  }
                  $lang = $_POST['lang'];
                  $lan = "";
                  foreach($lang as $lan1){
                    $lan .= $lan1.",";
                  }
                  $media = $_POST['media'];
                  $med = "";
                  foreach($media as $med1){
                    $med .= $med1.",";
                  }
                  $drive = $_POST['drive'];
                  $dr = "";
                  foreach($drive as $dr1){
                    $dr .= $dr1.",";
                  }
                  $work = $_POST['work'];
                  $job = "";
                  foreach($work as $job1){
                    $job .= $job1.",";
                  }
                  $support = $_POST['support'];
                  $supported = "";
                  foreach($support as $supported1){ 
                    $supported .= $supported1.",";
                  }
                  $survey = $_POST['survey'];
                  $suv = "";
                  foreach($survey as $suv1){
                    $suv .= $suv1.",";
                  }
                  $extending = $_POST['extending'];
                  $extend = "";
                  foreach($extending as $extend1){
                    $extend .= $extend1.",";
                  }                 

                  $sql = "INSERT INTO applications (social_media, fname, mname, lname, post_status, post_universal, post_skills, post_language, post_telephone, post_mobile_1, post_mobile_2, post_email_1, post_email_2, post_address, post_residence, post_media, post_drive, kin_name, kin_contact, kin_relationship, guarantor_name, guarantor_contact, guarantor_relation, post_birth, nationality, salary, expected_salary, post_work, support, survey, post_extend) VALUES ('$soc', '$Post_fname', '$Post_mname', '$Post_lname', '$stat', '$uni', '$sk', '$lan', ' $Post_tel', ' $Post_mobile', ' $Post_phone', ' $Post_f_email', '$Post_s_email', '$Post_address', '$Post_residence', '$med', '$dr', ' $Post_next_kin', ' $Post_contact', ' $Post_relationship', ' $Post_g_name', ' $Post_g_contact', '$Post_g_relation', '$Post_birth', '$Post_national', '$Post_salary', '$Post_expect_salary', '$job', '$supported', '$suv', '$extend')";

                  $result = mysqli_query($con, $sql);

                  if($result == 1)
                  {
                  echo '<div class="alert alert-success">Record has been successfully inserted</div>';
                     
                  }
                  else
                  {
                      echo "Query failed";
                  }
                }

                
                ?>
    <form method="POST" action="" enctype="multipart/form-data" class="shadow-lg p-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6" style="font-family: times new roman;">
                   <h5 class="ml-3">HOW DID YOU HERE ABOUT US?</h5>
                    <div class="row mb-3 ml-3">
                      <input type="checkbox" style="height: 25px; width: 30px" name="social[]" value="Yes">Referral name: 
                      <input type="text" style="height: 25px;" name="social[]" placeholder="click to enter text.">  
                    </div>
                      
                    <div class="ml-3">
                      <input type="checkbox"  style="height: 25px; width: 30px" name="social[]" value="social media"> Social media 
                    </div>
                    <div class="ml-3">
                      <input type="checkbox"  style="height: 25px; width: 30px" name="social[]" value="search engine"> Search engine 
                    </div>
                    <div class="ml-3">
                      <input type="checkbox"  style="height: 25px; width: 30px" name="social[]" value="our website"> Our website 
                    </div>
                    <div class="ml-3">
                          Other please specify   
                      </div>
                      <div class="ml-3">
                       <input type="text" name="social[]" placeholder="click to enter text"><br />
                      </div>
                    
                      <div class=" ml-3">
                        <h6>FIRST NAME:</h6>
                      </div>
                      <div class="ml-3">
                         <input type="text" style="height: 25px;" name="fname" 
                        placeholder="click to enter text" required>
                    </div>
                    <div class=" ml-3">
                        <h6>MIDDLE NAME:</h6>
                    </div>
                    <div class="ml-3">
                         <input type="text" style="height: 25px;" name="mname" 
                        placeholder="click to enter text" required>
                    </div>
                    <div class=" ml-3">
                        <h6>LAST NAME:</h6>
                     </div>
                    <div class="ml-3">
                          <input type="text" style="height: 25px;" name="lname" placeholder="click to enter text" required>
                      </div>
                      <div>
                        <h6 class="ml-3 mb-3">MARITAL STATUS (click all below as applicable)</h6>
                        
                      </div>
                        <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 

                          name="status[]" value="single" placeholder="click to enter text">
                        single
                      </div>
                      <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 

                          name="status[]" value="married" placeholder="click to enter text">
                        married
                      </div>
                      <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 

                          name="status[]" value="separated" placeholder="click to enter text">
                        separated
                      </div>
                      <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 

                          name="status[]" value="divorced" placeholder="click to enter text">
                        divorced
                      </div>

                      <div class="ml-3">
                        <h6>Employment status</h6>
                      </div>
                      <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 
                          name="status[]" value="employed" placeholder="click to enter text">
                        employed
                      </div>
                      <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 

                          name="status[]" value="volunteer" placeholder="click to enter text">
                        volunteering
                      </div>
                      <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 

                          name="status[]" value="unemployed" placeholder="click to enter text">
                        unemployed
                      </div>
                      <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 

                          name="status[]" value="part time" placeholder="click to enter text">
                        p/time
                      </div>
                      <div class="ml-3">
                        <input type="checkbox" style="height: 25px; width: 30px" 

                          name="status[]" value="full time" placeholder="click to enter text">
                        f/time
                      </div>
                      <div>
                        <h5 class="ml-3" class="mb-3">UNIVERSAL SKILLS</h5>
                      </div>
                      <div class="row mb-3 ml-3">
                        Can you drive? 
                        </div>
                        <div class="ml-3">
                        <input type="checkbox"  
                        style="height: 25px; width: 30px" name="universe[]" value="Yes">YES 
                        </div>
                        <div class="ml-3">
                        <input type="checkbox"  style="height: 25px; width: 30px" name="universe[]" 
                        value="No"> NO  
                      </div>
                      <div class="ml-3">
                        if yes License type! 
                        <input type="text"  style="height: 
                        25px;" name="universal[]" placeholder="click to enter text">  
                      </div>
                      <div class="ml-3">
                        if License valid ?
                      </div>
                      <div class="ml-3">
                        <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]"  value="Yes" > YES
                      </div> 
                      <div class='ml-3'>
                      <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]" 
                       value="No"> NO
                      </div>
                      
                      <div class="ml-3">
                        Word processing/typing 
                      </div>
                      <div class="ml-3">
                        <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]" value="Yes" > YES 
                      </div>
                      <div class="ml-3">
                        <input type="checkbox"  style="height: 25px; width: 
                          30px" value="No" name="universal[]" >NO 
                      </div>
                      <div class="ml-3">
                        if yes what speed? 
                        <input type="text" style="height: 25px;" name="universal[]"  placeholder="click to enter text"     >
                      </div>
                      <div class="ml-3">
                        MS Word 
                      user level(if not 
                       certificate level)
                        </div>
                        <div class="ml-3">
                        <input type="checkbox"  style="height: 25px; width: 30px" 
                          name="universal[]" value=""  value="beginner">
                          Beginners 
                       </div>
                       <div class="ml-3">
                      <input 
                        type="checkbox"  style="height: 25px; width: 30px" name="universal[]" value="intermdiary" 
                        > Intermediary
                      </div>
                      <div class="ml-3">
                        <input type="checkbox"  style="height: 25px; 
                          width: 30px" value="advance" name="universal[]" > advance
                      </div>
                      <div class="ml-3">
                        MS Excel user level(if not certificate 
                        level)
                      </div>
                      <div class="ml-3">
                        <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]" value="Beginners" 
                        > Beginners
                      </div>
                       
                        <div class="ml-3">
                          <input type="checkbox"  style="height: 25px; width: 
                        30px" name="universal[]" value="Intermediary"> Intermediary 
                        </div>
                         <div class="ml-3">
                         <input type="checkbox"  
                          style="height: 25px; width: 30px" name="universal[]" value="advance"> advance 
                        </div>
                         
                        <div class="ml-3">
                          MS PowerPoint user level (if not certificate 
                            level)
                        </div>
                        <div class="ml-3">
                          <input type="checkbox" style="height: 25px; width: 30px" name="universal[]" value="Beginners">
                        Beginners
                        </div> 
                         <div class="ml-3">
                         <input type="checkbox"  style="height: 25px; width: 
                          30px" name="universal[]" value="Intermediary"> Intermediary 
                          </div>
                           <div class="ml-3">
                           <input type="checkbox"  
                             style="height: 25px; width: 30px" name="universal[]" value="advance"> 
                             advance
                           </div >
                            <div class="ml-3">
                              MS Access  user level (if not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]" value="Beginners"> 
                              Beginners
                            </div>
                            <div class="ml-3">
                            <input type="checkbox"  style="height: 25px; width: 
                            30px" name="universal[]" value="Intermediary"> Intermediary
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]"    value="advance"> 
                              advance
                            </div>
                            <div class="ml-3">
                              MS Outlook  user level(if not certificate level)
                            </div>
                            <div class="ml-3">
                            <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]" value="" 
                             value="Beginners">
                              Beginners 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width:  30px" name="universal[]" value="Intermediary"> 
                              Intermediary  
                            </div>
                            <div class="ml-3">
                            <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]" value="advance"   >
                             advance
                            </div>
                            <div class="ml-3">
                              MS Publisher  user level(if not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]" value="Beginners">
                               Beginners 
                            </div>
                            <div class="ml-3">
                            <input type="checkbox"  style="height: 25px; width: 30px" name="universal[]"     value="Intermediary"> Intermediary 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox" style="height: 25px; width: 30px" name="universal[]" value="advance"> advance
                            </div>
                            <div class="ml-3">
                              <h5>WHICH OTHER SKILLS DO YOU HAVE (tick below a relevant)</h5>
                            </div>
                            <div class="ml-3">
                              Accounting/book keepinguser level (not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox" style="height: 25px; width: 30px" 
                              name="skill[]" value="Beginner"> Beginners 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="skill[]" value="intermediary"> Intermediary 
                            </div>
                            <div class="ml-3">
                            <input type="checkbox"  style="height: 25px; 
                              width: 30px" name="skill[]" value="advance" > advance
                            </div>
                            <div class="ml-3">
                              Proposals/business writing user level (not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" 
                              name="skill[]" value="Beginner"> Beginners 
                            </div>
                            <div class="ml-3">
                            <input 
                              type="checkbox"  style="height: 25px; width: 30px" name="skill[]" 
                              value="intermediary"> Intermediary 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 
                                25px; width: 30px" name="skill[]" value="advance"> advance
                            </div>
                            <div class="ml-3">
                                Negotiation/closing a sale user level (not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" 
                              name="skill[]" value="Beginner" > Beginners 
                            </div>
                            <div class="ml-3">
                              <input 
                              type="checkbox"  style="height: 25px; width: 30px" name="skill[]" value="Intermediary" > Intermediary 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" 
                              name="skill[]" value="advance" > advance
                            </div>
                            <div class="ml-3">
                              <h5 >LANGUAGES </h5>
                            </div>
                            <div class="ml-3">
                              English user level (not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="lang[]" 
                             value="Beginner"> Beginners 
                            </div>
                            <div class="ml-3">
                            <input type="checkbox"  
                              style="height: 25px; width: 30px" name="lang[]" value="Intermediary"> 
                              Intermediary  
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" 
                              name="lang[]" value="advance"> advance  
                            </div>  
                            <div class="ml-3"> 
                              French user level (not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="lang[]" 
                              value="Beginner"> Beginners
                            </div> 
                            <div class="ml-3">
                              <input type="checkbox"  
                              style="height: 25px; width: 30px" name="lang[]" value="Intermediary"> 
                              Intermediary 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" 
                              name="lang[]" value="advance"> advance
                            </div>
                            <div class="ml-3">
                             German user level (not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="lang[]" value="Beginner"> Beginners 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox" style="height: 25px; width: 30px" name="lang[]" value="Intermediary"> Intermediary 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="lang[]" value="advance"> advance
                            </div>
                            <div class="ml-3">
                              Chinese user level (not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="lang[]" 
                              value="Beginner"> Beginners
                            </div>
                            <div class="ml-3">
                              <input type="checkbox" style="height: 25px; width: 30px" name="lang[]" value="Intermediary"> Intermediary 
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" 
                              name="lang[]"  value="advance"> advance
                            </div>
                            <div class="ml-3">
                                Spanish user level (not certificate level)
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" name="lang[]" 
                              value="Beginner"> Beginners 
                            </div>
                            <div class="ml-3">
                            <input type="checkbox"  
                              style="height: 25px; width: 30px" name="lang[]" value="Intermediary"> 
                              Intermediary  
                            </div>
                            <div class="ml-3">
                              <input type="checkbox"  style="height: 25px; width: 30px" 
                              name="lang[]" value="advance"> 
                              advance
                            </div>
                            <div class="ml-3">
                              List local dialect and level at which you speak or write:
                            </div>
                            <div class="ml-3">
                              <input type="text" style="height: 25px;" name="lang[]" placeholder="click to enter text">
                            </div>
                            <div class="ml-3">
                              <h5 >CONTACT DETAILS</h5>
                            </div>
                            <div class="ml-3">
                              Telephone
                            </div>
                            <div class="ml-3">
                              <input type="text" style="height: 25px;" name="telephone" placeholder="click to enter text">
                            </div>
                            <div class="ml-3">
                              First Mobile
                            </div>
                            <div class="ml-3">
                              <input type="text" style="height: 25px;" name="mobile" 
                              placeholder="click to enter text" >
                            </div>
                            <div class="ml-3">
                              Second Mobile (if any)
                            </div>
                            <div class="ml-3">
                              <input type="text" style="height: 25px;" name="phone" 
                              placeholder="click to enter text" >
                            </div>
                            <div class="ml-3">
                              First Email
                            </div>
                            <div class="ml-3">
                              <input type="text" style="height: 25px;" 
                              name="post_f_email" placeholder="click to enter text">
                            </div>
                            <div class="ml-3">
                              Second Email (if any)
                            </div>
                            <div class="ml-3">
                            <input type="text" style="height: 25px;" 
                              name="post_s_email" placeholder="click to enter text">
                            </div>
                            <div class="ml-3">
                              Postal Address
                            </div>
                            <div class="ml-3">
                              <input type="text" style="height: 
                              25px;" name="post_address" placeholder="click to enter text">
                            </div>
                            <div class="ml-3">
                                Residence location and landmarks 
                            </div>
                            <div class="ml-3">
                                <input type="text" style="height: 25px;" name="post_residence" placeholder="click to enter text">
                            </div>
                            <div class="ml-3">
                              <h6>Social Media</h6>
                            </div>
                            <div class="ml-3">
                              Facebook 
                            </div>
                          <div class="ml-3">
                            <input type="checkbox"  style="height: 25px; 
                            width: 30px" name="media[]" value="Yes" >YES
                          </div>
                          <div class="ml-3"> 
                          <input type="checkbox"  
                          style="height: 25px; width: 30px" name="media[]" value="No" class="mb-
                          3">
                          NO
                          </div>
                          <div class="ml-3">
                            Address/Link/Number 
                          </div>
                          <div class="ml-3">
                          <input type="text" class="mb-3" style="height: 25px;" name="media[]" 
                          placeholder="click to enter text">
                          </div>
                          <div class="ml-3">
                            WhatsApp 
                          </div>
                          <div class="ml-3">
                          <input type="checkbox"  style="height: 25px; width: 
                          30px" name="media[]" value="Yes" >YES
                          </div>
                          <div class="ml-3">
                          <input type="checkbox"  
                          style="height: 25px; width: 30px" value="No" name="media[]" class="mb-
                          3">NO 
                          </div>
                          <div class="ml-3">
                            Address/Link/Number 
                          </div>
                          <div class="ml-3">
                            <input type="text" class="mb-3" style="height: 25px;" name="media[]" 
                            placeholder="click to enter text">
                          </div>
                          <div class="ml-3">
                            LinkedIn 
                          </div>
                          <div class="ml-3">
                          <input type="checkbox"  style="height: 25px; width: 
                          30px" name="media[]" class="mb-3" value="Yes">YES
                          </div>
                          <div class="ml-3">
                          <input type="checkbox"  
                          style="height: 25px; width: 30px" name="media[]" class="mb-3" value="No">NO
                          </div>
                          <div class="ml-3">
                            Address/Link/Number 
                          </div>
                          <div class="ml-3">
                            <input type="text" 
                            class="mb-3" style="height: 25px;" name="media[]" placeholder="click to enter text">
                            <div>
                            <input type="checkbox" class="mb-3" value="currently drive" style="height: 25px; width: 30px" 
                            name="drive[]" placeholder="click to enter text">
                            Do you currently drive yourself
                          </div>
                          <div>
                          <input type="checkbox"  class="mb-3" style="height: 
                          25px; width: 30px" name="drive[]" value="public transport" placeholder="click to enter text">use public 
                          transport
                          </div>
                          <div>
                            <input type="checkbox" class="mb-3" style="height: 25px; 
                            width: 30px" name="drive[]" value="combination of both" placeholder="click to enter text">combination of both
                          </div>
                          <h5>NEXT OF KIN </h5>
                          <div>
                          Name:
                          </div>
                          <div >
                            <input type="text" class="mb-3" style="height: 
                            25px;" name="post_kin" placeholder="click to enter text" required>
                          </div>
                          <div >
                          Contact details:
                          </div>
                          <div >
                          <input type="text" class="mb-3" style="height: 25px;" 
                          name="post_contact_details" placeholder="click to enter text">
                          </div>
                          <div>
                            Relationship
                          </div>
                          <div>
                          <input type="text" class="mb-3" 
                          style="height: 25px;" name="post_relationship" placeholder="click to enter text" required>
                          <h6>GUARANTOR (character, integrity and if you can be trusted with large sums of money)</h6>
                          <div>
                          Name: 
                          </div>
                          <div>
                          <input type="text" class="mb-3" style="height: 
                          25px;" name="post_guarantor_name" placeholder="click to enter text" required>
                          </div>
                          <div>
                            Contact details
                          </div>
                          <div>
                          <input type="text" class="mb-3" 
                          style="height: 25px;" name="post_contact_guarantor" placeholder="click to enter 
                          text" required>
                          </div>
                          <div>
                            Relationship
                          </div>
                          <div>
                            <input type="text" class="mb-3" 
                            style="height: 25px;" name="post_guarantor_relationship" placeholder="click to enter 
                            text" required>  
                          </div>
                          <div>
                            <h6>PERSONAL DETAILS</h6>
                          </div>
                          <div>
                            Date of Birth
                          </div>
                          <div>
                          <input type="text" 
                            class="mb-3" style="height: 25px;" name="birth" placeholder="click to enter a 
                            date" required>
                          </div>
                          <div>
                            Nationality/Dual Nationality
                          </div>
                          <div>
                            <input type="text" class="mb-3" style="height: 25px;" name="post_p_national" placeholder="click to enter text" required>
                          </div>
                          <div>
                            <h6>CAREER DETAILS</h6>
                          </div>
                            <b>Your current salary package plus benefits</b>
                          <div>
                            <input 
                            type="text" class="mb-3" style="height: 25px;" name="post_salary" placeholder="click to enter text" required>
                          </div>
                          <div>
                            <b>Your expected salary package (specify absolute minimum and ideal with all benefits expected)</b>
                          </div>
                          <div>
                            <input 
                            type="text" class="mb-3" style="height: 25px;" name="post_expected_salary" 
                            placeholder="click to enter text" required>
                          </div>
                          <div>
                          <b>What areas do you agree to work</b>
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" 
                            name="work[]"  value="Greater Accra">
                            Greater Accra
                          </div>
                          <div>
                          <input 
                            type="checkbox"  class="mb-3" style="height: 25px; width: 30px" value="Other region" name="work[]">
                            Other regions
                          </div>
                          <div>
                            <input type="checkbox" value="Outside Ghana"  class="mb-3" style="height: 25px; width: 30px" name="work[]">Outside Ghana
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" 
                            style="height: 25px; width: 30px" value="Outskirt of Ghana" name="work[]">Outskirt of Accra
                            Otherwise specify
                          </div>
                          <div>
                            <input type="text"  class="mb-3" style="height: 
                            25px;" name="work[]" placeholder="click to enter text">
                          </div>
                          <div>
                            <b>How best can we help you/What support do you need currently</b>
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" 
                            name="support[]" value="Job search">Job search
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="support[]" value="Job hunting">Job hunting coaching
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="support[]" value="CV design">CV design
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="support[]" value="Interview coaching">Interview coaching
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="support[]" value="Salary negotiation">Salary negotiation
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="support[]" value="career development">Full career development
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="support[]" value="Referral to head hunter">Referral to head hunter
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px;" name="support[]" value="Internship program">Internship program
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="support[]" value="national service">national service
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" 
                            name="support[]" value="job upgrade">Support with changing job/job upgrade
                          </div>
                          <div>
                            <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="support[]" value="Have been unemployed">Have been unemployed over 6 months so need urgent help   
                          </div>
                          <div>
                            <h5 >OUR QUALITY CHECK SURVEY </h5>
                          </div>
                            <div>
                              <b>Have you ever registered with us?</b>
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="Yes">YES
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="No">No
                            </div>    
                            <div>   
                              Amount:
                            </div>
                            <div>
                              <input type="text"  class="mb-3" style="height: 25px;" name="survey[]" placeholder="click to enter text">
                            </div>
                            <div>
                              Month/Year?
                            </div>
                            <div>
                              <input type="text"  class="mb-3" style="height: 25px;" name="survey[]" placeholder="click to enter text">
                            </div>
                            <div>
                              <b>Have you ever used our services? </b>
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="Yes">YES
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="No">NO
                            </div>
                            <div>
                              Amount:
                            </div>
                            <div>
                              <input type="text"  class="mb-3" style="height: 25px;" name="survey[]" 
                              placeholder="click to enter text">
                            </div>
                            <div>
                              Month/Year?
                            </div>
                            <div>
                              <input type="text"  class="mb-3" style="height: 25px;" name="survey[]" placeholder="click to enter text">
                            </div>
                            <div>
                              Which one
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="CV clinic">CV clinic
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="CV design">CV design
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="Career development">Career development
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="Commercial assistant">Commercial assistant
                            </div>
                            <div>
                              <b>Have you ever submitted your CV to us?</b>
                            </div>
                            <div>
                              <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="Yes">YES
                            </div> 
                            <div>
                             <input type="checkbox"  class="mb-3" style="height: 25px; width: 30px" name="survey[]" value="No">NO
                            </div>      
                            <div>  
                              <input type="checkbox" value="hardcopy" class="mb-3" style="height: 25px; width: 30px" name="survey[]">hard copy
                            </div>    
                            <div>          
                              <input type="checkbox" value="softcopy" class="mb-3" style="height: 25px; width: 30px" name="survey[]">soft copy
                            </div>      
                            <div>          
                              Month/Year?
                            </div>
                            <div>
                              <input type="text"  class="mb-3" style="height: 25px;" name="survey[]" placeholder="click to enter text">
                            </div>
                            <div>
                              EXTENDING SUPPORT TO OTHERS
                            </div>
                            <div>
                              <b>Would you like us to run a mass seminar for your religious or social group?</b>
                            </div>
                            <div>
                              <input type="checkbox" value="Yes" class="mb-3" style="height: 25px; width: 30px" 
                              name="extending[]">YES
                            </div>
                            <div>
                              <input type="checkbox" value="No" class="mb-3" style="height: 25px; width: 30px" 
                              name="extending[]">NO
                            </div>
                            <div>
                              who can we contact and how?
                            </div>
                            <div>
                              <input type="text" class="mb-3" style="height: 25px;" name="extending[]" 
                              placeholder="click to enter text">
                            </div>

                            <br />
                            <div class="row mb-3">
                            <b>Thank you for taking the time to fill in our form, we wil endeavor to assist you as soon as possible.</b>
                            </div>
                              <br /> <br /> 
                              <button type="submit" name="btn_apply" class="btn btn-primary form-control text-white">Apply</button>
                        
              </div>
            </form>
    </div>
  </div>
</div>

</section>




    
    <?php require_once ("includes/footer.php") ?>