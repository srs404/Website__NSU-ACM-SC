<?php

  require_once "assets/app/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--    Google Fonts Open Sans & Libre Baskerville -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Rubik:400,500,700,900&display=swap"
        rel="stylesheet">
    <!--    Icon     -->
    <link rel="icon" href="assets/images/acm.png">

    <!--    Wow CSS-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--    Bootstrap 4 CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--    VenoBox CSS-->
    <link rel="stylesheet" href="assets/css/venobox.css">
    <!-- <link rel="stylesheet" href="css/normalize.min.css"> -->
    <!--    Slick Carousel CSS Files     -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <!--    Font Awesome CSS-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Flaticon CSS File -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!--    Main CSS File-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-team.css">
    <!-- Responsive CSS File -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/custombox.min.css">

    <title>NSU ACM SC</title>
</head>

<body data-target="navbar-nav" data-offset='50'>
  <header id="header_part">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 p-0">
                  <nav class="navbar navbar-expand-lg bg1 p-0">
                      <a class="navbar-brand p-0" href="#"><img src="assets/images/acm.png" alt=""></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <!-- <span class="navbar-toggler-icon"></!-->
                          <span class="fas fa-bars"></span>
                      </button>

                      <div class="collapse navbar-collapse">
                          <ul class="navbar-nav mx-auto">
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php#ad_part">Technovation 2.0</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php#about_part">About</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php#officials_part">Officials</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php#team_part">Teams</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php#">Log In</a>
                              </li>
                          </ul>
                      </div>
                      <div class="join_us"><a href="#" id="add_recruit">Apply</a></div>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!--    Header Part Ends-->
    <section id="banner_part">
        <div class="banner h-50">
            <div class="overlay">
                <div class="container p-5">
                    <div class="row">
                        <div class="col-lg-12 p-5">
                            <div class="box mt-0 mb-5">
                                <h2>Welcome to</h2>
                                <h1>NSU ACM SC</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    Banner Part Ends     -->



    <!-- Long Content Scroll Modal -->
    <div class="modal fade bs-example-modal-center" id="AcceptRecruit" tabindex="-1" role="dialog"
        aria-labelledby="AddRecruitTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AcceptTitle">Select Team</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <h2 class="float-right"id="AcceptRecruitSerial"></h2>
                  <h4 id="AcceptRecruitName"></h4>
                  <h4 id="AcceptRecruitID"></h4>
                  <h4 id="AcceptRecruitSelect"></h4>
                  <hr><br>

                  <form action="" method="POST">

                  <div class="form-group">

                    <table class="table table-responsive-xl table-bordered">
                      <tbody>
                        <tr>
                          <td>
                            <div class="custom-control custom-radio">
                              <input name="team_select" type="radio" value="Operations & Logistics" class="custom-control-input" id="team_select_1">
                              <label class="custom-control-label" for="team_select_1">Operations & Logistics</label>
                            </div>
                          </td>

                          <td>
                            <div class="custom-control custom-radio">
                              <input name="team_select" type="radio" value="Promotions" class="custom-control-input" id="team_select_2">
                              <label class="custom-control-label" for="team_select_2">Promotions</label>
                            </div>
                          </td>

                          <td>
                            <div class="custom-control custom-radio">
                              <input name="team_select" type="radio" value="Publications" class="custom-control-input" id="team_select_3">
                              <label class="custom-control-label" for="team_select_3">Publications</label>
                            </div>
                          </td>

                          <td>
                            <div class="custom-control custom-radio">
                              <input name="team_select" type="radio" value="Corporate" class="custom-control-input" id="team_select_4">
                              <label class="custom-control-label" for="team_select_4">Corporate</label>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                  </table>

                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" id="acceptRecruit" name="acceptRecruit" value="Accept Recruit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- ============================================== -->


    <!-- Long Content Scroll Modal -->
    <div class="modal fade bs-example-modal-lg" id="AddRecruit" tabindex="-1" role="dialog"
        aria-labelledby="AddRecruitTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddRecruitTitle">Add New Recruit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <!-- Basic Zone -->


                  <h2>Basic Information</h2>
                  <h4>Phase 1</h4>
                  <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>


                  <!-- <form action="" method="post"> -->

                    <div class="row">
                      <div class="form-group col">
                        <label for="">Full Name</label>
                        <input required id="fname" name="full_name" placeholder="Full Name" class="form-control form-control-lg" type="text">

                      </div>
                      <div class="form-group col">
                        <label for="">NSU ID</label>
                        <input required id="nsuid" name="nsuid" placeholder="NSU ID" class="form-control form-control-lg" type="text" >

                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col">
                        <label for="">Email Address</label>
                        <input required id="email" type="text" name="email" class="form-control form-control-lg" placeholder="Email Address">
                      </div>
                      <div class="form-group col">
                        <label for="">Phone Number</label>
                        <input required id="cell" name="cell" placeholder="01621778899" class="form-control form-control-lg" type="text">
                      </div>

                    </div>



                    <div class="form-group">
                      <label for="">Area</label>
                      <select class="form-control form-control-lg" id="area" name="area">
                        <option value="">Select Area</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Dhanmondi">Dhanmondi</option>
                        <option value="Bashundhara">Bashundhara</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Gulshan">Gulshan</option>
                      </select>
                    </div>

                    <!-- Basic END -->

                    <!-- Q&A Zone -->

                    <br><hr>
                    <h2>Questions & Answers</h2>
                    <h4>Phase 2</h4>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;" /><br>

                    <div class="form-group">
                      <label for="">Why do you want to join NSU ACM SC?</label>
                      <textarea id="ques_join" name="ques_join" class="form-control" rows="4" type="textarea" style="resize: none"></textarea>
                    </div>
                  <hr>
                    <div class="form-group">
                      <label for="">How did you hear about NSU ACM SC at First?</label>

                      <table class="table table-responsive-xl table-bordered">
                        <tbody>
                          <tr>
                            <td>
                              <div class="custom-control custom-radio">
                                <input name="ques_heard" type="radio" value="From a Friend" class="custom-control-input" id="heard_1">
                                <label class="custom-control-label" for="heard_1">From a Friend</label>
                              </div>
                            </td>

                            <td>
                              <div class="custom-control custom-radio">
                                <input name="ques_heard" type="radio" value="Social Media" class="custom-control-input" id="heard_2">
                                <label class="custom-control-label" for="heard_2">Social Media</label>
                              </div>
                            </td>

                            <td>
                              <div class="custom-control custom-radio">
                                <input name="ques_heard" type="radio" value="Recruitment Booth" class="custom-control-input" id="heard_3">
                                <label class="custom-control-label" for="heard_3">Recruitment Booth</label>
                              </div>
                            </td>

                            <td>
                              <div class="custom-control custom-radio">
                                <input name="ques_heard" type="radio" value="Others" class="custom-control-input" id="heard_4">
                                <label class="custom-control-label" for="heard_4">Others</label>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                    </table>

                    </div>
                  <hr>
                    <div class="form-group">
                      <label for="">Are you currently a member of any other club or student organization? Have you been a part of a club or student organization before?</label>
                      <textarea id="ques_other_club" name="ques_other_club" class="form-control" rows="4" type="textarea" style="resize: none"></textarea>
                    </div>
                  <hr>
                    <div class="form-group">
                      <label for="">Do you have any connections to organizations such as tech companies, media, etc?</label>
                      <textarea id="ques_connections" name="ques_connections" class="form-control" rows="4" type="textarea" style="resize: none"></textarea>
                    </div>

                    <!-- Q&A END -->

                    <!-- Skillset Zone -->

                    <br><hr>
                    <h2>Skillset</h2>
                    <h4>Phase 3</h4>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;" />
                    <h5>
                    Do you have any kind of skills mentioned below (then TICK the ones that describes your skills, be specific)  Mention anything you think might be useful! That is not mentioned below in Dotted Line Given below the mentioned skills section .
                    </h5>
                    <hr><br>

                    <hr style="height:1px;border:none;color:#333;background-color:#333;" />
                    <center><h3>Skills</h3></center>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;" />

                    <table class="table table-responsive-xl table-borderless">

                      <tbody class="tbody">

                        <tr>
                            <td>
                              <div class="custom-control custom-checkbox">
                                <input name="skills[]" value="App Development (Android/IOS)" type="checkbox" class="custom-control-input" id="skill_1">
                                <label class="custom-control-label" for="skill_1">App Development (Android/IOS)</label>
                              </div>
                            </td>

                            <td>
                              <div class="custom-control custom-checkbox">
                                <input name="skills[]" value="Event Décor and Elements Creation " type="checkbox" class="custom-control-input" id="skill_2">
                                <label class="custom-control-label" for="skill_2">Event Décor and Elements Creation</label>
                              </div>
                            </td>

                        </tr>

                        <tr>

                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Event Management" type="checkbox" class="custom-control-input" id="skill_3">
                              <label class="custom-control-label" for="skill_3">Event Management</label>
                            </div>
                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Good at Communications" type="checkbox" class="custom-control-input" id="skill_4">
                              <label class="custom-control-label" for="skill_4">Good at Communications</label>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Good Writing Skills" type="checkbox" class="custom-control-input" id="skill_5">
                              <label class="custom-control-label" for="skill_5">Good Writing Skills</label>
                            </div>

                          </td>

                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Graphics Design" type="checkbox" class="custom-control-input" id="skill_6">
                              <label class="custom-control-label" for="skill_6">Graphics Design</label>
                            </div>
                          </td>
                        </tr>

                        <tr>

                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Logistics and Analytics" type="checkbox" class="custom-control-input" id="skill_7">
                              <label class="custom-control-label" for="skill_7">Logistics and Analytics</label>
                            </div>

                          </td>


                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Photography" type="checkbox" class="custom-control-input" id="skill_8">
                              <label class="custom-control-label" for="skill_8">Photography</label>
                            </div>
                          </td>
                        </tr>

                        <tr>

                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Video Capture" type="checkbox" class="custom-control-input" id="skill_9">
                              <label class="custom-control-label" for="skill_9">Video Capture</label>
                            </div>
                          </td>


                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Video Editing" type="checkbox" class="custom-control-input" id="skill_10">
                              <label class="custom-control-label" for="skill_10">Video Editing</label>
                            </div>
                          </td>

                        </tr>

                        <tr>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="skills[]" value="Website Development & Management" type="checkbox" class="custom-control-input" id="skill_11">
                              <label class="custom-control-label" for="skill_11">Website Development & Management</label>
                            </div>

                          </td>


                        </tr>

                      </tbody>

                    </table>

                    <hr style="height:1px;border:none;color:#333;background-color:#333;" />
                    <center><h3>Experience</h3></center>
                    <hr style="height:1px;border:none;color:#333;background-color:#333;" />

                    <!-- ====================================================== -->
                    <!-- ||======  Experience List =======|| -->
                    <!-- ====================================================== -->

                    <table class="table table-responsive-xl table-borderless">

                      <tbody class="tbody">


                        <tr>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="SummarizingEventsArticles" type="checkbox" class="custom-control-input" id="exp_1">
                              <label class="custom-control-label" for="exp_1">Good at Describing / Summarizing Collection of Events / Programs through articles</label>
                            </div>

                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="Programming Platform" type="checkbox" class="custom-control-input" id="exp_2">
                              <label class="custom-control-label" for="exp_2">Have good knowledge on specific Development/Programming Platform</label>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="FieldWork" type="checkbox" class="custom-control-input" id="exp_3">
                              <label class="custom-control-label" for="exp_3">Field Work & Activities</label>
                            </div>
                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="VocabWords" type="checkbox" class="custom-control-input" id="exp_4">
                              <label class="custom-control-label" for="exp_4">Use of good Vocabulary and Words</label>
                            </div>

                          </td>

                        </tr>

                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="Logistics&Admin" type="checkbox" class="custom-control-input" id="exp_5">
                              <label class="custom-control-label" for="exp_5">Managing Permissions Logistics and Administration</label>
                            </div>
                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="PublicAnchoring" type="checkbox" class="custom-control-input" id="exp_6">
                              <label class="custom-control-label" for="exp_6">Have Experience in Public Speaking / Anchoring</label>
                            </div>

                          </td>

                        </tr>

                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="AdminWork" type="checkbox" class="custom-control-input" id="exp_7">
                              <label class="custom-control-label" for="exp_7">Have experience in Administration Work</label>
                            </div>

                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="ArticleWrite" type="checkbox" class="custom-control-input" id="exp_8">
                              <label class="custom-control-label" for="exp_8">Known / have experience in Article Writing</label>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="PermissionSlips" type="checkbox" class="custom-control-input" id="exp_9">
                              <label class="custom-control-label" for="exp_9">Experience in Writing formal applications/permission slips/form etc.</label>
                            </div>
                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="ArticlePublish" type="checkbox" class="custom-control-input" id="exp_10">
                              <label class="custom-control-label" for="exp_10">Known / have Experience in publishing Article / Publications</label>
                            </div>

                          </td>

                        </tr>


                        <tr>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="CorporateCompanies" type="checkbox" class="custom-control-input" id="exp_11">
                              <label class="custom-control-label" for="exp_11">Have Good / Known connection with Corporate Companies / Marketing Teams</label>
                            </div>

                          </td>


                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="Negotiation" type="checkbox" class="custom-control-input" id="exp_12">
                              <label class="custom-control-label" for="exp_12">Have good command over Negotiation</label>
                            </div>

                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="TeamDevelopment" type="checkbox" class="custom-control-input" id="exp_13">
                              <label class="custom-control-label" for="exp_13">Team Development</label>
                            </div>
                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="EnglishFormalCommunicate" type="checkbox" class="custom-control-input" id="exp_14">
                              <label class="custom-control-label" for="exp_14">Have Good command over English and Formal Communication</label>
                            </div>

                          </td>

                        </tr>

                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="GoogleOnline" type="checkbox" class="custom-control-input" id="exp_15">
                              <label class="custom-control-label" for="exp_15">Google Online Management Services</label>
                            </div>
                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="CorporateMeet" type="checkbox" class="custom-control-input" id="exp_16">
                              <label class="custom-control-label" for="exp_16">Have willingness or enthusiasm on Attending Corporate Meetings</label>
                            </div>

                          </td>

                        </tr>

                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="MicroOffice" type="checkbox" class="custom-control-input" id="exp_17">
                              <label class="custom-control-label" for="exp_17">Microsoft Office Softwares</label>
                            </div>

                          </td>

                          <td>

                            <div class="custom-control custom-checkbox">
                              <input name="experience[]" value="Sponsorships" type="checkbox" class="custom-control-input" id="exp_18">
                              <label class="custom-control-label" for="exp_18">Known / have experience on Sponsorship Dealings</label>
                            </div>

                          </td>
                        </tr>

                      </tbody>

                    </table>


                    <!-- END Experience -->

                    <!-- Skill END -->

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" id="addRecruit" name="addRecruit" value="Add Member" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
    <!-- </form> -->
