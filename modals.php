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

<!-- ============ Login Modal ===================== -->

<!-- Long Content Scroll Modal -->
<div class="modal fade bs-example-modal-center" id="MemberLogin" tabindex="-1" role="dialog" aria-labelledby="AddRecruitTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="MemberLoginTitle">Login Panel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="row">
                  <div class="form-group col">
                    <label for="">Username</label>
                    <input required id="member_uname" name="member_uname" placeholder="Username" class="form-control form-control-lg" type="text">
                  </div>

                  <div class="form-group col">
                    <label for="">Password</label>
                    <input required id="member_password" type="password" name="member_password" class="form-control form-control-lg" placeholder="Password">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col">
                    <a href="#">Forgot Password</a>
                  </div>
                </div>

              </div>

              <div class="modal-footer">
                  <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" id="MemberLoginBtn" name="MemberLoginBtn" value="Login" class="btn btn-primary">
              </div>
          </div>
      </div>
  </div>

<!-- ========================================================== -->



<!-- ============ Profile Overview Modal ===================== -->

<!-- Long Content Scroll Modal -->
<div class="modal fade bs-example-modal-center" id="ProfileOverview" tabindex="-1" role="dialog" aria-labelledby="AddRecruitTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ProfileOverviewTitle">Login Panel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

              <div class="profile_container">
                  <div class="profile_inner p_120">
                      <div class="row">
                          <div class="col-lg-3">
                              <img class="img-fluid" src="nsu_acm_logo.png">
                          </div>
                          <div class="col-lg-7">
                              <div class="personal_text">
                                  <h6>Hi there!! I am</h6>
                                  <h3>ACM</h3>
                                  <h4>An Organization, NOT a CLUB!!</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptate reprehenderit alias tempore repudiandae molestiae dicta molestias optio quidem unde, eos dignissimos culpa corporis similique nulla ipsum consequatur, quod ut?</p>
                                  <ul class="list basic_info">
                                      <li><i class="fa fa-calculator" aria-hidden="true"></i> 1st January, 1969</li>
                                      <li><i class="fa fa-phone" aria-hidden="true"></i> 192 1097 642</li>
                                      <li><i class="fa fa-envelope-o" aria-hidden="true"></i>nsu@northsouth.edu</li>
                                      <li><i class="fa fa-home" aria-hidden="true"></i>10th floor SAC building, NSU</li>
                                  </ul>
                                  <ul class="list personal_social">
                                      <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              </div>

              <div class="modal-footer">
                  <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" id="ProfileOverviewBtn" name="ProfileOverviewBtn" value="Login" class="btn btn-primary">
              </div>
          </div>
      </div>
  </div>

<!-- ========================================================== -->


<!-- Long Content Scroll Modal -->
<div class="modal fade bs-example-modal-center" id="AddRecruit" tabindex="-1" role="dialog" aria-labelledby="AddRecruitTitle" aria-hidden="true">
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