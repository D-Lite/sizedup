<?php
  require_once("docs/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>sizedUP</title>
        <link rel="icon" type="image/jpg" href="docs/Star.jpg" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>
        <!-- <div class="container-fluid"> -->
                    <nav class="navbar navbar-expand-sm navbar-light bg-light"> 
                        <div class="container-fluid"> 
                            <a class="navbar-brand" href="index.html">
                                <img src="docs/Star.jpg" alt="sizedUP" style="height: 25px; margin-bottom: 10px;"/>
                            </a>

                            <button class="navbar-toggler" type="button" 
                                    data-toggle="collapse"
                                    data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent"
                                    aria-expanded="false" 
                                    aria-label="Toggle navigation"> 
                                <span class="navbar-toggler-icon"></span> 
                            </button> 
                  
                            <div class="collapse navbar-collapse"></div> 
                  
                            <div class="collapse navbar-collapse" 
                                 id="navbarSupportedContent"> 
                                <ul class="navbar-nav mr-auto"> 
                                    <li class="nav-item active"> 
                                        <a class="nav-link" 
                                           href="#"> 
                                          About  
                                          <span class="sr-only"> 
                                            (current) 
                                          </span> 
                                      </a> 
                                    </li> 
                                    <li class="nav-item"> 
                                        <a class="nav-link" 
                                           href="#"  data-toggle="modal" data-target="#shoeModal"> 
                                          Shoe size 
                                        </a> 
                                    </li> 
                                    <li class="nav-item"> 
                                        <a class="nav-link"
                                           href="#"> 
                                          Clothing size
                                        </a> 
                                    </li> 
                                </ul> 
                            </div> 
                        </div> 
                    </nav>  
            <!-- </div> -->

            <!-- Body -->
            <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center">
                    <button class="btn btnsized" style="background-color: var(--secondary); color: var(--light-bg-color);" data-toggle="modal" data-target="#shoeModal">Shoe Size</button>
                </div>
                
                <div class="col-sm-6 d-flex justify-content-center">
                    <button class="btn btnsized" disabled style="border-color: var(--secondary); color: var(--title-color);">Clothing size</button>
                </div>
                 
            </div>
        </div>
        </div>
        <hr class="mt-5 mb-5">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Fluid jumbotron</h1>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
          </div>
        <div id="footer" class="py-3" style="">
            <div class="container">
              <div class="footer-bottom text-center">
                <div class="social" ">
                  <a href="https://web.facebook.com/olabemiwo.daniel" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <!-- <a href="https://www.google.com/search?sxsrf=ALeKk00MsQ5Eds-ExNvO3HS0AHD3oq0qJg%3A1605224773909&source=hp&ei=RcmtX_yONZrMgweV65iICw&q=olabemiwo+daniel&oq=olabemiwo+daniel&gs_lcp=CgZwc3ktYWIQAzoECCMQJzoICAAQyQMQkQI6BQgAEJECOgUILhCxAzoFCAAQsQM6CAguELEDEIMBOgcIABDJAxBDOgoILhDHARCjAhBDOgQIABBDOg0IABCxAxCDARAUEIcCOgIIADoQCC4QxwEQowIQyQMQQxCTAjoHCC4QsQMQQzoCCC46DgguEMcBEK8BEMkDEJMCOgQIABAKOgkIABDJAxAFEB46BwgAEMkDEA06BggAEA0QHjoFCCEQoAFQ1wRY7CFg8iNoAHAAeACAAdsCiAHQIpIBBjItMTUuMZgBAKABAaoBB2d3cy13aXo&sclient=psy-ab&ved=0ahUKEwi8xbmjmP7sAhUa5uAKHZU1BrEQ4dUDCAc&uact=5" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a> -->
                  <a href="https://twitter.com/fikkyman1" class="twitter smedia"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                  <a href="https://www.instagram.com/danielolabemiwo/" class="instagram smedia"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                  <a href="https://www.linkedin.com/in/theolabemiwodaniel" class="linkedin smedia"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                  <a href="https://github.com/d-lite" class="github smedia"><span class="fa fa-github" aria-hidden="true"></span></a>
                </div>
                <div class="copyright mt-1">
                  <div class="footer">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="fa fa-heart" aria-hidden="true"></i> <a href="http://www.danielolabemiwo.rf.gd" disabled="disabled" target="_blank" id="foota">Daniel Olabemiwo</a>
                    </p>
                    <!-- thedanielolabemiwo.com -->
                  </div>
                </div>
              </div>
            </div>
        <!-- </div> -->

        <div class="modal fade" id="shoeModal" tabindex="-2" role="dialog" aria-labelledby="shoeModalLabel" aria-hidden="true">
            <div class="modal-guts modal-overla">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header modalined">
                      <!-- <p class="col-sm-8 d-flex justify-content-center align-middle">Generate your shoe size.</p> -->
                      <h5 class="modal-title modalined">Shoe sizes </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body col-sm-12" style="margin-top: -10%;">
                    <form id="loginForm">
                        <div style=" width: 100%;" id="erroreddiv" class="alert ">
                          <!-- <span style=" color: white;" id="errored" class="well"></span> -->
                        </div>
                        <!-- <br> -->
                        <div class="row">
                          <div class="form-group col-sm-8">
                            <label for="country" class="control-label">Country:</label>
                            <select id=country" name="country" class="form-control">
                              <option value="" >- Select -</option>
                                <?php
                                // Fetch University
                                
                                $country = $sizeup->fetchAll('countries');
                                $n = 1;
                                  foreach ($country as $key) {
                                  // echo '<select id="university" name="university" class="form-control">';

                                  echo "<option value='".$n."'>".$key['name']."</option>";
                                  ?>
                                  <?php
                                  $n += 1;
                                  // <br>
                                }
                                ?>
                            </select>
                          </div>  
                            <br>
                          <div class="col-sm-4">
                            <label for="size" class="control-label">Size:</label>
                            <input type="shoesize" name="shoesize" id="size" placeholder="34" class="form-control" />
                          </div>
                        </div>
                       <div class="d-flex justify-content-center">
                        <button id="convertButton" type="button" class="btn btnsized"  name="convertButton" style="border-color: var(--secondary); color: var(--title-color);"">Convert</button>
                       </div>  
                        <br>
                        <div class="col-sm-12 d-flex ">
                          <div class="row">
                            <!-- <label for="size" class="control-label col-sm-7 ">Nigeria size:</label> -->
                            <p class="control-label col-sm-7 justify-content-center d-flex align-right">Nigeria size:</p>
                            <input type="shoesize" name="shoesize" id="size" readonly placeholder="34" class="form-control col-sm-5 justify-content-center d-flex align-left" />
                          </div>
                        </div> 

                        <a href="#" data-toggle="modal" data-target="#passModal" class="xs-margin" style="margin-left: 30%;">Password recovery </a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
</html>