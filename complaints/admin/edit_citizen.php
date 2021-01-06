<?php
include("includes/connection.php");

if (isset($_POST['submit']))
{
    $n_id         =$_POST['n_id'];
    $first_name   =$_POST['first_name'];
    $sec_name     =$_POST['sec_name'];
    $third_name   =$_POST['third_name'];
    $last_name    =$_POST['last_name'];
    $city         =$_POST['city'];
    $address      =$_POST['address'];
    $mobile_number=$_POST['mobile_number'];
    $gender       =$_POST['gender'];

    $query="update  citizen set n_id          ='$n_id',
                                first_name    ='$first_name',
                                sec_name      ='$sec_name',
                                third_name    ='$third_name',
                                last_name     ='$last_name',
                                city          ='$city',
                                address       ='$address',
                                mobile_number ='$mobile_number',
                                gender        ='$gender'

                            where c_id={$_GET['id']}";


mysqli_query($conn,$query);

header("location:manage_citizen.php");
}
//fetch old data using function mysqli_fetch_assoc and result variable

$query="select * from citizen where c_id={$_GET['id']}";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<?php include('includes/admin_header.php'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Citizen</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="n_id" class="form-control-label">National Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text"  name="n_id" value="<?php echo $row['n_id']?>" class="form-control">
                                        <small class="help-block form-text">National Id Number</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="first_name" class="form-control-label">First Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="first_name" name="first_name" placeholder="first name" class="form-control" value="<?php echo $row['first_name']?>" >
                                        <small class="help-block form-text">Please enter your first name</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="sec_name" class="form-control-label">Second Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="sec_name" name="sec_name" placeholder="second name"  class="form-control" value="<?php echo $row['sec_name']?>">
                                        <small class="help-block form-text">Please enter your Second Name</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="third_name" class="form-control-label">Middle Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="third_name" id="third_name"  placeholder="third_name" class="form-control" value="<?php echo $row['third_name']?>">
                                        <small class="help-block form-text">Please enter your Middle Name</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="last_name" class="form-control-label">Last Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="last_name" id="last_name"  placeholder="last name" class="form-control" value="<?php echo $row['last_name']?>">
                                        <small class="help-block form-text">Please enter your Last Name</small>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="city" class="form-control-label">City</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <select name="city" id="city" class="form-control" value="<?php echo $row['city']?>">
                                            <option disabled=""></option>
                                            <option value="amman">Amman</option>
                                            <option value="zarqa">Zarqa</option>
                                            <option value="irbid">Irbid</option>
                                            <option value="mafraq">Mafraq </option>
                                            <option value="ramtha">Ramtha </option>
                                            <option value="shona_shamalieh">AL shona shamalieh</option>
                                            <option value="shona_janobieh">AL shona janobieh</option>
                                            <option value="maan">Maan </option>
                                            <option value="karak">Al-karak </option>

                                        </select>
                                    </div>

                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="address" class="form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="address" id="address"  placeholder="addres" class="form-control" value="<?php echo $row['address']?>">
                                        <small class="help-block form-text">Please enter your Address</small>
                                    </div>
                                </div>

                            
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="mobile_number" class="form-control-label">Mobile Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="mobile_number" id="mobile_number"  placeholder="mobile_number" class="form-control" value="<?php echo $row['mobile_number']?>">
                                        <small class="help-block form-text">Please enter your Mobile Number</small>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Gender</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">

                                            <label for="gender" class="form-check-label ">
                                                <input type="radio" id="male" name="gender"  class="form-check-input"> Male"<?php echo $row['gender']?>"
                                            </label></pre>

                                            <label for="gender" class="form-check-label ">
                                                <input type="radio" id="female" name="gender"  class="form-check-input"> Female"<?php echo $row['gender']?>"
                                            </label>

                                        </div>
                                    </div>
                                </div>

                               <center> <button name="submit" type="submit" class="btn btn-sm btn-info " style="width:30%">Save
                                               
                                            
                                                  

                                                </button>
                                                <input name="reset" type="reset" class="btn btn-sm  btn-danger btn-info " style="width:30%"></center>


                            </form>
                        </div>
                       </div>
                   </div>
               </div>
           </div>


                            

                    </div>
                </div>
            </div>

    <?php include('includes/admin_footer.php'); ?>