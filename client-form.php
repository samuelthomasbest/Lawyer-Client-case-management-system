<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['lccmsdbaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$cvmsaid=$_SESSION['lccmsdbaid'];
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
$insertpic=$_FILES["img1"]["name"];
$insertdoc=$_FILES["file1"]["name"];
$insertnote=$_POST['insertnote'];
$insertmanual=$_FILES["file2"]["name"];
$address=$_POST['address'];
$courtdate=$_POST['courtdate'];
$emergpname=$_POST['emergpname'];
$emergpphone=$_POST['emergpphone'];
move_uploaded_file($_FILES["img1"]["tmp_name"],"images/icon/".$_FILES["img1"]["name"]);
move_uploaded_file($_FILES["file1"]["tmp_name"],"images/icon/".$_FILES["file1"]["name"]);
move_uploaded_file($_FILES["file2"]["tmp_name"],"images/icon/".$_FILES["file2"]["name"]);


 $query=mysqli_query($con,"insert into clientcase(fullname, sex,placeofbirth,country,city,email,homephone,workphone,casetype,casedetail,insertpic,insertnote,address,courtdate,emergpname,emergpphone,insertdoc,insertmanual) value('$fullname','$sex','$placeofbirth','$country','$city','$email','$homephone','$workphone','$casetype','$casedetail','$insertpic','$insertnote','$address','$courtdate','$emergpname',
    '$emergpphone','$insertdoc','$insertmanual')");

    if ($query) {
    $msg="Client case Information added successfully.";
  }
  else
    {
      $msg="Something Went Wrong. Please correct and try again";
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
    <title>LCCMS Form</title>

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
                                        <strong>Add</strong> New Case
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
                                                 echo $msg;
                                                   }  ?> </p>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fullname" name="fullname" placeholder="Full name" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">sex</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     
                                           <select name="sex" required>
                                            <option value=""> Select </option>
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
                                                    <input type="text" id="placeofbirth" name="placeofbirth" placeholder="place of birth" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Country</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="country" name="country" placeholder="Country" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">City</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="city" name="city" placeholder="city" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
                                          
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">E-Mail Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" placeholder="E-Mail Address" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Home phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="homephone" name="homephone" placeholder="Home phone" class="form-control" maxlength="10" required="true">
                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Work phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="workphone" name="workphone" placeholder="Work phone" class="form-control" maxlength="10" required="true">
                                                    
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">select case Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     
                                           <select name="casetype"  required>
                                        
                                            <option value=""> Select </option>
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
                                                   
                                                    <textarea class="form-control" name="casedetail" placeholder="Enter case detail" rows="3" required></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                           <label for="text-input" class=" form-control-label">Insert picture</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                           <span style="color:red">*</span><input type="file" name="img1" required>
                                           
                                           </div>
                                        </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                           <label for="text-input" class=" form-control-label">Insert document</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                           <span style="color:red">*</span><input type="file" name="file1" required>
                                           
                                           </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label"> note</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    
                                                    <textarea class="form-control" name="insertnote" placeholder="insert note" rows="3" required></textarea>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                           <label for="text-input" class=" form-control-label">Insert manual</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                           <span style="color:red">*</span><input type="file" name="file2" required>
                                           
                                           </div>
                                        </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="address" name="address" placeholder="Address" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">courtdate</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="courtdate" name="courtdate"  class="form-control" required="">
                                                    
                                                </div>
                                            </div>

                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Emergency person name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="emergpname" name="emergpname" placeholder="Emergency person name" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Emergency person phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="emergpphone" name="emergpphone" placeholder="Emergency person phone" class="form-control" maxlength="10" required="true">
                                                    
                                                </div>
                                            </div>     

                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Add Case
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                       
                        </div>
                        
                    </div>
               
 
<?php include_once('includes/footer.php');?>
   </div> </div>
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