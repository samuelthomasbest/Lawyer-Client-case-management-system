<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['lccmsdbaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$eid=$_GET['editid'];
$fullname=$_POST['fullname'];
$sex=$_POST['sex'];
$placeofbirth=$_POST['placeofbirth'];
$country=$_POST['country'];
$city=$_POST['city'];
$email=$_POST['email'];
$homephone=$_POST['homephone'];
$workphone=$_POST['workphone'];
$casetype=$_POST['casetype'];
$casedetail=$_POST['casedetail'];
$insertnote=$_POST['insertnote'];
$address=$_POST['address'];
$courtdate=$_POST['courtdate'];
$emergpname=$_POST['emergpname'];
$emergpphone=$_POST['emergpphone'];
 $query=mysqli_query($con,"update clientcase set fullName='$fullname', sex='$sex' , placeofbirth='$placeofbirth' ,  country='$country' , city='$city' , 
  email='$email' ,  homephone='$homephone' , workphone='$workphone' , casetype='$casetype', casedetail='$casedetail', 
  insertnote='$insertnote' , address='$address' , courtdate='$courtdate' , emergpname='$emergpname' ,emergpphone= '$emergpphone'  where  id='$eid'");
 

    if ($query) {
    $msg="client case has been Updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Client case Details</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include_once('includes/sidebar.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Case</strong>  Details

<form>


         <input type = "button" class="btn btn-primary btn-sm" value = "Print" style="height: 35px; width: 30%; border-radius: 10px;border-color:  black;au-btn au-btn--block au-btn--green m-b-20; margin-left: 550px;" onclick = "window.print
()" />
      </form>   
<br><br>

                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <p style="font-size:16px; color:green" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  clientcase where id='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<img src="images/icon/<?php echo $row['insertpic'];?>" width="200" height="200" style="border:solid 1px #000">
</br></br></br></br>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fullname" name="fullname" value="<?php  echo $row['fullName'];?>" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">sex</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 
                                           <select name="sex"  >
                                            <option value="<?php  echo $row['sex'];?>"> <?php  echo $row['sex'];?> </option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                             
                                                     </select> 
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">place of birth</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="placeofbirth" name="placeofbirth" value="<?php  echo $row['placeofbirth'];?>"placeholder="place of birth" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Country</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="country" name="country" value="<?php  echo $row['country'];?>" placeholder="Country" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">City</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="city" name="city" value="<?php  echo $row['city'];?>" placeholder="city" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">E-Mail Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" value="<?php  echo $row['email'];?>" placeholder="E-Mail Address" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Home phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="homephone" name="homephone" value="<?php  echo $row['homephone'];?>" placeholder="Home phone" class="form-control" maxlength="10" required="">
                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Work phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="workphone" name="workphone" value="<?php  echo $row['workphone'];?>"  placeholder="Work phone" class="form-control" maxlength="10" required="">
                                                    
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">select case Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">        
                                           <select name="casetype" >
                                            <option value="<?php  echo $row['casetype'];?>"> <?php  echo $row['casetype'];?> </option>
                                              <option value="Criminal Cases">Criminal Cases</option>
                                              <option value="Civil Cases">Civil Cases</option>
                                              <option value="Family Cases">Family Cases</option>
                                              <option value="Landlord/tenant issues">Landlord/tenant issues</option>
                                              <option value="marriage cases">marriage cases</option>
                                              <option value="business and financial cases">business and financial cases</option>
                                                     </select>    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">case detail</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    
                                                    <textarea class="form-control" name="casedetail" rows="3" required><?php  echo $row['casedetail'];?></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                           <label for="text-input" class=" form-control-label">Insert picture</label>
                                        </div>

                                       <div class="col-sm-4">
                                          <img src="images/icon/<?php echo $row['insertpic'];?>"  width="100" height="200" style="border:solid 1px #000">
                                         <a href="changeimage.php?editid=<?php echo $row['id'];?>">change image </a>

                                          </div>
                                      </div>
                                      <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Client document</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="address" name="address" value="<?php  echo $row['insertdoc'];?>"  placeholder="document" class="form-control" required="" readonly="">
                                                </br>
                                                     <a href="changedoc.php?editid=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">change document </a>
                                                 </br></br>
                                                <a href="images/icon/<?php echo $row['insertdoc']; ?>"class="btn btn-primary btn-sm" download>Open</a> 
                                                </div>
                                            </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Note</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    
                                                    <textarea class="form-control" name="insertnote" rows="3" required><?php  echo $row['insertnote'];?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Case Manual</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="address" name="address" value="<?php  echo $row['insertmanual'];?>"  placeholder=" manual" class="form-control" required="" readonly="">
                                                </br>
                                                     <a href="changemanual.php?editid=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">change manual </a>
                                                 </br></br>

                                                
                                                <a href="images/icon/<?php echo $row['insertmanual']; ?>"class="btn btn-primary btn-sm" download>Open</a>


                                                    
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="address" name="address" value="<?php  echo $row['address'];?>"  placeholder="Address" class="form-control" required="">
                                                    
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">courtdate</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="courtdate" name="courtdate" value="<?php  echo $row['courtdate'];?>"  class="form-control" required="">
                                                    
                                                </div>
                                            </div>

                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Emergency person name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="emergpname" name="emergpname" value="<?php  echo $row['emergpname'];?>"  placeholder="Emergency person name" class="form-control" required="">
                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Emergency person phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="emergpphone" name="emergpphone" value="<?php  echo $row['emergpphone'];?>"  placeholder="Emergency person phone" class="form-control" maxlength="10" required="">
                                                    
                                                </div>
                                            </div>     
                                            
                                                                                        
                                            <?php } ?>
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Update client case
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>

    
<?php include_once('includes/footer.php');?>
<div class="card-footer">
              
                </div>
                </div>
            </div>
        </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php }  ?>
