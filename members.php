<?php
  include('header.php');

  if(!isset($_SESSION['members']['all_user']))
  {
    $_SESSION['members']['all_user'] = getAllMember();
    $members = $_SESSION['members']['all_user'];
  }
  else {
    $members = $_SESSION['members']['all_user'];
  }

?>

<section id="core_body">
    <div class="official_title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <br><h4 class="official">Core Members</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
        <div class="official_body">
            <div class="overlay">
                <div class="container">
                    <div class="container" style="align: center">

                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="c_body"
                                    style="background: url(assets/images/users/current/chair.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    <div class="e_body">
                                        <div class="info">
                                            <h5>Sabbir Mollah</h5>
                                            <p>Chair</p>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="c_body"
                                    style="background: url(assets/images/users/current/vicechair.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    <div class="e_body">
                                        <div class="info">
                                            <h5>Mehrab Mamun Ratul</h5>
                                            <p>Vice Chair</p>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="c_body"
                                    style="background: url(assets/images/users/current/secretary.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    <div class="e_body">
                                        <div class="info">
                                            <h5>Abdullah Al Rafi</h5>
                                            <p>General Secretary</p>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="container justify-content-sm-center">
                        <div class="row justify-content-center">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="c_body"
                                    style="background: url(assets/images/users/current/treasurer.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    <div class="e_body">
                                        <div class="info">
                                            <h5>Sayem Ahmed</h5>
                                            <p>Treasurer</p>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="c_body"
                                    style="background: url(assets/images/users/current/webmaster.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    <div class="e_body">
                                        <div class="info">
                                            <h5>Shadab Hafiz Choudhury</h5>
                                            <p>Webmaster</p>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="c_body"
                                    style="background: url(assets/images/users/current/membershipchair.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    <div class="e_body">
                                        <div class="info">
                                            <h5>Ayesha Rahman</h5>
                                            <p>Membership Chair</p>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
            <div class="col-lg-12">
              <div class="button">
                <a href="#">See All</a>
              </div>
            </div>
          </div> Unnecessary Button -->
        </div></center>

<section id="team_part">
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team_title">
                        <h4>Our <span>Members</span></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 m-0 p-0">
                    <div class="lightpage">
                        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-operation_logistics-tab" data-toggle="tab" href="#nav-operation_logistics" role="tab" aria-controls="nav-operation_logistics" aria-selected="true">Operations &amp; Logistics</a>
                          <a class="nav-item nav-link" id="nav-promotions-tab" data-toggle="tab" href="#nav-promotions" role="tab" aria-controls="nav-promotions" aria-selected="false">Promotions</a>
                          <a class="nav-item nav-link" id="nav-corporate-tab" data-toggle="tab" href="#nav-corporate" role="tab" aria-controls="nav-corporate" aria-selected="false">Corporate</a>
                          <a class="nav-item nav-link" id="nav-publications-tab" data-toggle="tab" href="#nav-publications" role="tab" aria-controls="nav-publications" aria-selected="false">Corporate</a>
                        </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-operation_logistics" role="tabpanel" aria-labelledby="nav-operation_logistics-tab">


                                    <section id="core_body">
                                        <div class="official_title">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="title">
                                                            <h4 class="official">SUB-EB</h4><hr><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="official_body">
                                            <div class="overlay">
                                                <div class="container justify-content-sm-center">

                                                  <div class="row">

                                                    <?php foreach ($members as $m): ?>
                                                    <?php if($m['position'] == "SUB-EB" && $m['team'] == "Operations & Logistics"){ ?>
                                                    <div class="container col-lg-3 col-md-3 col-sm-12">
                                                        <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                            <div class="e_body">
                                                                <div class="info">
                                                                    <h5><?php echo $m['name']; ?></h5>
                                                                    <p><?php echo $m['position']; ?></p>
                                                                    <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                    <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php } endforeach; ?>

                                                  </div>

                                                  <div class="official_title">
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="title">
                                                                      <hr><br><br><h4 class="official">Incharge</h4><hr>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="row">

                                                    <?php foreach ($members as $m): ?>
                                                    <?php if($m['position'] == "Incharge" && $m['team'] == "Operations & Logistics"){ ?>
                                                    <div class="container col-lg-3 col-md-3 col-sm-12">
                                                        <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                            <div class="e_body">
                                                                <div class="info">
                                                                    <h5><?php echo $m['name']; ?></h5>
                                                                    <p><?php echo $m['position']; ?></p>
                                                                    <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                    <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php } endforeach; ?>

                                                </div>

                                                      <div class="official_title">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="col-md-12">
                                                                      <div class="title">
                                                                          <hr><br><br><h4 class="official">Senior Members</h4><hr>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="row">

                                                        <?php foreach ($members as $m): ?>
                                                        <?php if($m['position'] == "Senior Member" && $m['team'] == "Operations & Logistics"){ ?>
                                                        <div class="container col-lg-3 col-md-3 col-sm-12">
                                                            <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                <div class="e_body">
                                                                    <div class="info">
                                                                        <h5><?php echo $m['name']; ?></h5>
                                                                        <p><?php echo $m['position']; ?></p>
                                                                        <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                        <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                        <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      <?php } endforeach; ?>

                                                    </div>

                                                    <div class="official_title">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="title">
                                                                        <hr><br><br><h4 class="official">General Members</h4><hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                      <?php foreach ($members as $m): ?>
                                                      <?php if($m['position'] == "General Member" && $m['team'] == "Operations & Logistics"){ ?>

                                                      <div class="container col-lg-3 col-md-3 col-sm-12">
                                                          <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                              <div class="e_body">
                                                                  <div class="info">
                                                                      <h5><?php echo $m['name']; ?></h5>
                                                                      <p><?php echo $m['position']; ?></p>
                                                                      <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                      <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                      <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    <?php } endforeach; ?>

                                                  </div>


                                                  <div class="official_title">
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="title">
                                                                      <hr><br><br><h4 class="official">Probationary Members</h4><hr>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="row">

                                                    <?php
                                                      foreach ($members as $m):
                                                        if($m['position'] == "Probationary Member" && $m['team'] == "Operations & Logistics"){
                                                    ?>

                                                    <div class="container col-lg-3 col-md-3 col-sm-12">
                                                        <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                            <div class="e_body">
                                                                <div class="info">
                                                                    <h5><?php echo $m['name']; ?></h5>
                                                                    <p><?php echo $m['position']; ?></p>
                                                                    <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                    <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php } endforeach; ?>

                                                </div>


                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                </div>
                                <div class="tab-pane fade" id="nav-promotions" role="tabpanel" aria-labelledby="nav-promotions-tab">


                                  <section id="core_body">
                                      <div class="official_title">
                                          <div class="container">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="title">
                                                          <h4 class="official">SUB-EB</h4><hr><br>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="official_body">
                                          <div class="overlay">
                                              <div class="container justify-content-sm-center">

                                                <div class="row">

                                                  <?php foreach ($members as $m): ?>
                                                  <?php if($m['position'] == "SUB-EB" && $m['team'] == "Promotions"){ ?>


                                                  <div class="container col-lg-3 col-md-3 col-sm-12">
                                                      <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                          <div class="e_body">
                                                              <div class="info">
                                                                  <a href="#"><h5><?php echo $m['name']; ?></h5></a>
                                                                  <p><?php echo $m['position']; ?></p>
                                                                  <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                  <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                  <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                <?php } endforeach; ?>

                                                </div>

                                                <div class="official_title">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="title">
                                                                    <hr><br><br><h4 class="official">Incharge</h4><hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                  <?php foreach ($members as $m): ?>
                                                  <?php if($m['position'] == "Incharge" && $m['team'] == "Promotions"){ ?>
                                                  <div class="container col-lg-3 col-md-3 col-sm-12">
                                                      <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                          <div class="e_body">
                                                              <div class="info">
                                                                  <h5><?php echo $m['name']; ?></h5>
                                                                  <p><?php echo $m['position']; ?></p>
                                                                  <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                  <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                  <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                <?php } endforeach; ?>

                                              </div>

                                                    <div class="official_title">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="title">
                                                                        <hr><br><br><h4 class="official">Senior Members</h4><hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                      <?php foreach ($members as $m): ?>
                                                      <?php if($m['position'] == "Senior Member" && $m['team'] == "Promotions"){ ?>
                                                      <div class="container col-lg-3 col-md-3 col-sm-12">
                                                          <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                              <div class="e_body">
                                                                  <div class="info">
                                                                      <h5><?php echo $m['name']; ?></h5>
                                                                      <p><?php echo $m['position']; ?></p>
                                                                      <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                      <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                      <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    <?php } endforeach; ?>

                                                  </div>

                                                  <div class="official_title">
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="title">
                                                                      <hr><br><br><h4 class="official">General Members</h4><hr>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="row">

                                                    <?php foreach ($members as $m): ?>
                                                    <?php if($m['position'] == "General Member" && $m['team'] == "Promotions"){ ?>

                                                    <div class="container col-lg-3 col-md-3 col-sm-12">
                                                        <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                            <div class="e_body">
                                                                <div class="info">
                                                                    <h5><?php echo $m['name']; ?></h5>
                                                                    <p><?php echo $m['position']; ?></p>
                                                                    <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                    <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php } endforeach; ?>

                                                </div>


                                                <div class="official_title">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="title">
                                                                    <hr><br><br><h4 class="official">Probationary Members</h4><hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                  <?php foreach ($members as $m): ?>
                                                  <?php if($m['position'] == "Probationary Member" && $m['team'] == "Promotions"){ ?>

                                                  <div class="container col-lg-3 col-md-3 col-sm-12">
                                                      <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                          <div class="e_body">
                                                              <div class="info">
                                                                  <h5><?php echo $m['name']; ?></h5>
                                                                  <p><?php echo $m['position']; ?></p>
                                                                  <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                  <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                  <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                <?php } endforeach; ?>

                                              </div>


                                              </div>
                                          </div>
                                      </div>
                                  </section>


                                </div>
                                <div class="tab-pane fade" id="nav-corporate" role="tabpanel" aria-labelledby="nav-corporate-tab">


                                  <section id="core_body">
                                      <div class="official_title">
                                          <div class="container">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="title">
                                                          <h4 class="official">SUB-EB</h4><hr><br>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="official_body">
                                          <div class="overlay">
                                              <div class="container justify-content-sm-center">

                                                <div class="row">

                                                  <?php foreach ($members as $m): ?>
                                                  <?php if($m['position'] == "SUB-EB" && $m['team'] == "Corporate"){ ?>
                                                  <div class="container col-lg-3 col-md-3 col-sm-12">
                                                      <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                          <div class="e_body">
                                                              <div class="info">
                                                                  <h5><?php echo $m['name']; ?></h5>
                                                                  <p><?php echo $m['position']; ?></p>
                                                                  <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                  <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                  <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                <?php } endforeach; ?>

                                              </div>

                                              <div class="official_title">
                                                  <div class="container">
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="title">
                                                                  <hr><br><br><h4 class="official">Incharge</h4><hr>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row">

                                                <?php foreach ($members as $m): ?>
                                                <?php if($m['position'] == "Incharge" && $m['team'] == "Corporate"){ ?>
                                                <div class="container col-lg-3 col-md-3 col-sm-12">
                                                    <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                        <div class="e_body">
                                                            <div class="info">
                                                                <h5><?php echo $m['name']; ?></h5>
                                                                <p><?php echo $m['position']; ?></p>
                                                                <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              <?php } endforeach; ?>

                                            </div>

                                                    <div class="official_title">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="title">
                                                                        <hr><br><br><h4 class="official">Senior Members</h4><hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                      <?php foreach ($members as $m): ?>
                                                      <?php if($m['position'] == "Senior Member" && $m['team'] == "Corporate"){ ?>
                                                      <div class="container col-lg-3 col-md-3 col-sm-12">
                                                          <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                              <div class="e_body">
                                                                  <div class="info">
                                                                      <h5><?php echo $m['name']; ?></h5>
                                                                      <p><?php echo $m['position']; ?></p>
                                                                      <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                      <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                      <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    <?php } endforeach; ?>

                                                  </div>

                                                  <div class="official_title">
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="title">
                                                                      <hr><br><br><h4 class="official">General Members</h4><hr>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="row">

                                                    <?php foreach ($members as $m): ?>
                                                    <?php if($m['position'] == "General Member" && $m['team'] == "Corporate"){ ?>

                                                    <div class="container col-lg-3 col-md-3 col-sm-12">
                                                        <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                            <div class="e_body">
                                                                <div class="info">
                                                                    <h5><?php echo $m['name']; ?></h5>
                                                                    <p><?php echo $m['position']; ?></p>
                                                                    <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                    <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php } endforeach; ?>

                                                </div>


                                                <div class="official_title">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="title">
                                                                    <hr><br><br><h4 class="official">Probationary Members</h4><hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                  <?php foreach ($members as $m): ?>
                                                  <?php if($m['position'] == "Probationary Member" && $m['team'] == "Corporate"){ ?>

                                                  <div class="container col-lg-3 col-md-3 col-sm-12">
                                                      <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                          <div class="e_body">
                                                              <div class="info">
                                                                  <h5><?php echo $m['name']; ?></h5>
                                                                  <p><?php echo $m['position']; ?></p>
                                                                  <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                  <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                  <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                <?php } endforeach; ?>

                                              </div>


                                              </div>
                                          </div>
                                      </div>
                                  </section>


                                </div>
                                <div class="tab-pane fade" id="nav-publications" role="tabpanel" aria-labelledby="nav-publications-tab">


                                  <section id="core_body">
                                      <div class="official_title">
                                          <div class="container">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="title">
                                                          <h4 class="official">SUB-EB</h4><hr><br>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="official_body">
                                          <div class="overlay">
                                              <div class="container justify-content-sm-center">

                                                <div class="row">

                                                  <?php foreach ($members as $m): ?>
                                                  <?php if($m['position'] == "SUB-EB" && $m['team'] == "Publications"){ ?>
                                                  <div class="container col-lg-3 col-md-3 col-sm-12">
                                                      <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                          <div class="e_body">
                                                              <div class="info">
                                                                  <h5><?php echo $m['name']; ?></h5>
                                                                  <p><?php echo $m['position']; ?></p>
                                                                  <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                  <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                  <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <?php } endforeach; ?>

                                              </div>

                                              <div class="official_title">
                                                  <div class="container">
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="title">
                                                                  <hr><br><br><h4 class="official">Incharge</h4><hr>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="row">

                                                <?php foreach ($members as $m): ?>
                                                <?php if($m['position'] == "Incharge" && $m['team'] == "Publications"){ ?>
                                                <div class="container col-lg-3 col-md-3 col-sm-12">
                                                    <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                        <div class="e_body">
                                                            <div class="info">
                                                                <h5><?php echo $m['name']; ?></h5>
                                                                <p><?php echo $m['position']; ?></p>
                                                                <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } endforeach; ?>

                                            </div>

                                                    <div class="official_title">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="title">
                                                                        <hr><br><br><h4 class="official">Senior Members</h4><hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                      <?php foreach ($members as $m): ?>
                                                      <?php if($m['position'] == "Senior Member" && $m['team'] == "Publications"){ ?>
                                                      <div class="container col-lg-3 col-md-3 col-sm-12">
                                                          <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                              <div class="e_body">
                                                                  <div class="info">
                                                                      <h5><?php echo $m['name']; ?></h5>
                                                                      <p><?php echo $m['position']; ?></p>
                                                                      <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                      <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                      <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <?php } endforeach; ?>

                                                  </div>

                                                  <div class="official_title">
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="title">
                                                                      <hr><br><br><h4 class="official">General Members</h4><hr>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="row">

                                                    <?php foreach ($members as $m): ?>
                                                    <?php if($m['position'] == "General Member" && $m['team'] == "Publications"){ ?>

                                                    <div class="container col-lg-3 col-md-3 col-sm-12">
                                                        <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                            <div class="e_body">
                                                                <div class="info">
                                                                    <h5><?php echo $m['name']; ?></h5>
                                                                    <p><?php echo $m['position']; ?></p>
                                                                    <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                    <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                    <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <?php } endforeach; ?>

                                                </div>


                                                <div class="official_title">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="title">
                                                                    <hr><br><br><h4 class="official">Probationary Members</h4><hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                  <?php foreach ($members as $m): ?>
                                                  <?php if($m['position'] == "Probationary Member" && $m['team'] == "Publications"){ ?>

                                                  <div class="container col-lg-3 col-md-3 col-sm-12">
                                                      <div class="c_body" style="background: url(assets/images/users/current/<?php echo $m['image']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                          <div class="e_body">
                                                              <div class="info">
                                                                  <h5><?php echo $m['name']; ?></h5>
                                                                  <p><?php echo $m['position']; ?></p>
                                                                  <a <?php if(!isset($m['fb']) || $m['fb'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['fb']) && $m['fb'] != "") { echo $m['fb']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                                  <a <?php if(!isset($m['linkedin']) || $m['linkedin'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['linkedin']) && $m['linkedin'] != "") { echo $m['linkedin']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                                  <a <?php if(!isset($m['github']) || $m['github'] == "") { echo "hidden"; } ?> href="<?php if(isset($m['github']) && $m['github'] != "") { echo $m['github']; } else { echo "#"; } ?>" target="_blank"><i class="fab fa-github"></i></a>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                <?php } endforeach; ?>

                                              </div>


                                              </div>
                                          </div>
                                      </div>
                                  </section>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    Team Part Ends     -->



<?php require_once "footer.php"; ?>
