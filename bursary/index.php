<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bursary Application</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1 class="heading"> Kilifi county School Bursary Application Online (KBAOnline) </h1>
        </header>
        
          <?php 
          //if(isset($_SESSION["message"]) && strlen($_SESSION["message"] > 10)){
          if(isset($_SESSION["message"]) ){
            echo '<section class="message">'.$_SESSION["message"].'</section>';
            unset($_SESSION["message"]);
          }
          ?>
        
        <section class="about">
            <h2>About KBA Online</h2>
            <p>
                Welcome to the School Bursary Program website. 
                Our mission is to provide financial assistance to deserving students to help them pursue their education
                 and achieve their academic goals. Established in [year], 
                 our bursary program has been supporting students from diverse backgrounds by providing scholarships, 
                 grants, and other forms of financial aid.
            </p>
        </section>
        <section class="info">
            <div class="info-data">
                <h3>Our Vision</h3>
                <p>
                    Our vision is to create equal opportunities for all students, 
                    regardless of their financial circumstances. 
                    We believe that every student deserves access to quality education 
                    and should not be hindered by financial constraints.
                </p>
            </div>
            <div class="info-data">
                <h3>How It Works</h3>
                <p>
                    Students can apply for our bursary program by filling out the online application form. 
                    Our selection committee carefully reviews each application and awards scholarships based on academic merit, 
                    financial need, and extracurricular involvement.
                </p>
            </div>
            <div class="info-data">
                <h3>Contact Us</h3>
                <p>
                    If you have any questions or inquiries about our bursary program, 
                    feel free to contact us at: Email: info@schoolbursaryprogram.com 
                    Phone: 123-456-7890
                    <Address> Office of the Deputy Governor, Kilifi </Address>
                </p>
            </div>

        </section>
        <section class="application">
            <div class="intro row">
                <div class="col-40">
                    <strong class="bigger blink">Mandatory Requirements/ documents</strong>
                    <p>
                         
                        <ol>
                            <li>copies of recent academic report</li>
                            <li>copy of parent's/ guardian's ID card and Voters card</li>
                            <li>copy of birth certificate</li>
                            <li>signed letter from area chief/ sub-chief</li>
                        </ol>
                    </p>
                </div>
                <div class="col-60">
                    <div class="scholar">
                      <img src="images/countyscholarship.jpg" alt="Kilifi scholarship infographic">
                    </div>
                </div>
                
            </div>
            <div class="application-form">
              <h2>Apply Now!</h2>
                <form class="form-inline" action="process.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                          <label for="bursary">Available Bursary</label>
                        </div>
                        <div class="col-75">
                          <select id="bursary" name="bursary" >
                            <option value="0">select bursary</option>
                          </select>
                        </div>
                    </div>

                    <div class="row">
                      <h3>STUDENT INFORMATION</h3>
                    </div>
                    

                    
                    <div class="row">
                      <div class="col-25">
                        <label for="fname">First Name</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="fname" name="first_name" placeholder="Your name..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="mname">Middle Name</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="mname" name="middle_name" placeholder="Your name..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="lname">Last Name</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="lname" name="last_name" placeholder="Your last name..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="Dob">Date of Birth</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="Dob" name="Date_of_birth" placeholder="20/12/1999">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="address">Address</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="address" name="address" placeholder="Your address..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="phone-number">parent/Guardian phone number</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="phone-number" name="parent_phone_number" placeholder="parent phone NO..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="class">Class/Year</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="class" name="class" placeholder="Your class..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="sname">School Name</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="sname" name="school_name" placeholder="Your school name..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="admn">Admission Number</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="admn"  name="Admission_number" placeholder="Your ADMN..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="Saddress">School Adress</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="Saddress" name="school_address" placeholder="school adress..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="Yoa">Admission Year</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="Yoa" name="admission_year" placeholder="admission year..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="Cduration">Course Duration</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="Cduration" name="course_duration" placeholder="course duration..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="Yos">Year of Study</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="Yos" name="year_of_study" placeholder="Year of study..">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="subcounty">Select Sub-County</label>
                      </div>
                      <div class="col-75">
                        <select id="subcounty" name="subcounty">
                          <option value="0">..Select sub-county</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                          <label for="ward">Select Ward</label>
                        </div>
                        <div class="col-75">
                          <select id="ward" name="ward">
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                          <label for="location">Location</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="location" name="location" placeholder="Your location..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                          <label for="sublocation">Sub-location</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="sublocation" name="sublocation" placeholder="Your sub-location..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                          <label for="village">Village / Estate</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="village" name="village" placeholder="Your Village / estate..">
                        </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-25">
                        <label for="subject">Reason for Application</label>
                      </div>
                      <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write reason for application.." style="height:200px"></textarea>
                      </div>
                    </div>


                    <div class="row">
                      <h3>FAMILY INFORMATION</h3>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="father">Father/Guardian name</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="father" name="father" placeholder="Enter Father/Guardian name">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-25">
                        <label for="mother">Mother/Guardian name</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="mother" name="mother" placeholder="Enter Mother/Guardian name">
                      </div>
                  </div>
                  <div class="permit">
                  N/B: if dead strictly attach a copy of dead certificate or burial permit
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="sublocation">Tick appropriately</label>
                    </div>
                    <div class="col-75">
                      <div class="spaced10"><input type="radio" name="is_orphan" id=""> Total Orphan</div>
                      <div class="spaced10"><input type="radio" name="is_orphan" id=""> Father Dead</div>
                      <div class="spaced10"><input type="radio" name="is_orphan" id=""> Mother Dead</div>
                      <div class="spaced10"><input type="radio" name="is_orphan" id=""> Both parents alive</div>
                    </div>
                    <div class="spaced20">Burial/Death permit <input type="file" name="death_permit" id="death_permit">  </div>
                </div>




                <div class="row">
                  <h3>ATTACH FILES</h3>
                </div>
                <div class="files">
                  <div class="spaced20">academic report <input type="file" name="academic" id="academic"> </div>
                  <div class="spaced20"> parent id <input type="file" name="guardian_id" id="guardian_id">  </div>
                  <div class="spaced20"> parent voter card<input type="file" name="voter_id" id="voter_id">  </div>
                  <div class="spaced20"> birth certificate<input type="file" name="birth" id="birth"> </div>
                  <div class="spaced20"> chief's letter<input type="file" name="chief_letter" id="chief_letter"> </div>
                </div>
                


                    <div class="row">
                      <input type="submit" name="submit" value="Submit Application">
                    </div>
                  </form>
            </div>

        </section>
        <section class="faq">
          <h2>Frequently Asked Questions</h2>
          <p class="spaced">
          Find answers to common questions about the bursary program. 
         If you have more questions, feel free to contact us.
</p>
         
 
          <button class="accordion">1. How many bursaries can i apply?</button>
          <div class="panel">
            <p>You can aplly for as many burasries as per your qualifications </p>
          </div>

          <button class="accordion">2. how long does it take to receive feedback?</button>
          <div class="panel">
            <p>As soon as we are through with the vetting</p>
          </div>

          <button class="accordion">3. How much can one get per bursary?</button>
          <div class="panel">
            <p>It depends with the amount of money available and the number of applications</p>
          </div>

        </section>
        
    </div>
    <footer>
      <div class="wrapper">
        <div><p> Copyright &copy; 2024 Kilifi County Government</p></div>
        <div><p class="bigger"> School Bursary Online Application</p></div>
        <div><p> Developed By Escutcheon Systems</p></div>
      </div>
      
      
    </footer>
    <script src="js/script.js"></script>
</body>
</html>