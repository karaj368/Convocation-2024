<?php 

   require_once "inc_conn.php";

   

   if(isset($_POST['submit'])){

	   

 

	   

   	$roll_no 		= trim($_POST['roll_no']);

   	$prog_name 		= $_POST['prog_name'];



   

   	if( ($prog_name=='') or ($roll_no=='') ){

		$msg = "Select Either Roll Number or Programme Name";

   	}else{

		$sql_roll 		= "select *  from list_stud_convocation where roll_no = '$roll_no' AND prog_name LIKE '%$prog_name%' ";// echo $sql_roll; exit;

		$result_roll 	= mysqli_query($conn,$sql_roll);

   	}

	

   }

   

   ?>

<script language="javascript" type="text/javascript">

  function trim(s) {

    while (s.substring(0, 1) == ' ') {

      s = s.substring(1, s.length);

    }

    while (s.substring(s.length - 1, s.length) == ' ') {

      s = s.substring(0, s.length - 1);

    }

    return s;

  }

  function ressetFun() {

    document.form_convo.roll_no.value = "";

    document.form_convo.prog_name.value = "";

    return false;

  }



</script>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>About Us Convocation | Shobhit University </title>



  <?php include 'header.php'?>



  <!-- banner -->

  <section class="inner-banner-bg">

    <div class="container text-center">

      <h1 class="banner-head text-white">Degree Recipients</h1>

    </div>

  </section>

  <!-- End banner -->



  <!-- form -->

  <section class="recp-form py-3 py-sm-5" >

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <div class="tz-customer-login registration-form p-4 p-sm-5 rounded shadow m-auto">

            <form id="form_convo" name="form_convo" method="post" action="" class="joom-form-login">

              <h4>To View Details Kindly Enter Your Roll Number and Your Programme Name </h4>

              <p>Please Note the list includes only the eligible Shobhit University, Meerut students. </p>

              <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                  <div class="row mb-3">

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                      <label>Roll Number:</label>

                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                      <input name="roll_no" required type="text" id="roll_no" class="form-control w-100">

                    </div>

                  </div>

                  <div class="row mb-3">

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                      <label>Programme Name:</label>

                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                      <select name="prog_name" required id="prog_name" class="form-select">

                        <option value="" selected="selected">-- Please Select your Programme --</option>

                        <option value="B.A.LL.B.">B.A.LL.B.</option>

                        <option value="B.B.A. LL.B. (Honors)">B.B.A. LL.B. (Honors)</option>

                        <option value="B.Com. (Honours)">B.Com. (Honours)</option>

                        <option value="B.Com. LL.B (Honors)">B.Com. LL.B (Honors)</option>

                        <option value="B.Ed.">B.Ed. </option>

                        <option value="B.Sc. (Honors) Agriculture">B.Sc. (Honors) Agriculture</option>

                        <option value="B.Sc. (Honors) Biomedical Sciences">B.Sc. (Honors) Biomedical Sciences</option>

                        <option value="B.Sc. (Honors) Biotechnology">B.Sc. (Honors) Biotechnology</option>

                        <option value="B.Sc. (Honors) Computer Science">B.Sc. (Honors) Computer Science</option>

                        <option value="B.Tech. (AI)">B.Tech. (AI)</option>

                        <option value="B.Tech. (BME)">B.Tech. (BME)</option>

                        <option value="B.Tech. (BT)">B.Tech. (BT)</option>

                        <option value="B.Tech. (CSE)">B.Tech. (CSE)</option>

                        <option value="B.Tech. (EE)">B.Tech. (EE) </option>

                        <option value="B.Tech. (ME)">B.Tech. (ME) </option>

                        <option value="B.Tech. (MT)">B.Tech. (MT) </option>

                        <option value="B.Tech.(EC)">B.Tech.(EC) </option>

                        <option value="BA (Honours) Business Economics">BA (Honours) Business Economics</option>

                        <option value="BA (Honours) Psychology">BA (Honours) Psychology</option>

                        <option value="BBA">BBA</option>

                        <option value="BCA">BCA</option>

                        <option value="BLIS">BLIS</option>

                        <option value="iploma (CE)">Diploma (CE)</option>

                        <option value="Diploma (ECE)">Diploma (ECE)</option>

                        <option value="Diploma (EE)">Diploma (EE)</option>

                        <option value="Diploma (ME)">Diploma (ME)</option>

                        <option value="LL.B.">LL.B.</option>

                        <option value="LL.M.  Criminal Law">LL.M. Criminal Law</option>

                        <option value="LL.M. Corporate Law">LL.M. Corporate Law</option>

                        <option value="M.Com.">M.Com.</option>

                        <option value="M.Phil. (Applied Mathematics)">M.Phil. (Applied Mathematics)</option>

                        <option value="M.Phil. (Economics)">M.Phil. (Economics)</option>

                        <option value="M.Phil. (Management)">M.Phil. (Management)</option>

                        <option value="M.Phil. (Psychology)">M.Phil. (Psychology)</option>

                        <option value="M.Sc. (Biomedical)">M.Sc. (Biomedical)</option>

                        <option value="M.Sc. (Biotechnology)">M.Sc. (Biotechnology)</option>

                        <option value="M.Sc. (Computer Science)">M.Sc. (Computer Science)</option>

                        <option value="M.Sc. (Microbiology)">M.Sc. (Microbiology)</option>

                        <option value="M.Tech. (Bioinformatics)">M.Tech. (Bioinformatics)</option>

                        <option value="M.Tech. (Biomedical Engineering)">M.Tech. (Biomedical Engineering)</option>

                        <option value="M.Tech. (Biotechnology)">M.Tech. (Biotechnology)</option>

                        <option value="M.Tech. (CAD/CAM)">M.Tech. (CAD/CAM)</option>

                        <option value="M.Tech. (Computer Engineering)">M.Tech. (Computer Engineering)</option>

                        <option value="M.Tech. (Food Technology)">M.Tech. (Food Technology)</option>

                        <option value="MA (Education))">MA (Education)</option>

                        <option value="MBA">MBA</option>

                        <option value="MCA">MCA</option>

                        <option value="MLIS">MLIS</option>

                        <option value="PG Diploma (Yoga)">PG Diploma (Yoga)</option>

                      </select>

                    </div>

                  </div>

                  <div class="row mb-3">

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                      <div class="controls">

                        <input type="submit" name="submit" value="SUBMIT" class="button btn btn-success me-3"

                          onClick="return validate(this)" />

                        

                        <input type="reset" name="reset" value="RESET" class="button btn btn-danger"/>

                      </div>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-margin-50">

                      <table width="100%" cellpadding="3" cellspacing="3" class="table table-bordered table-striped">



                           <?php $roll_row = mysqli_fetch_array($result_roll); 

                                if(mysqli_num_rows($result_roll)>0){

                            ?>

                        <tr>

                          <td colspan="2" class="text-white" style="background-color:#B9975B;"><strong>Congratulations! You are a Degree Recipient. Your Details are as follows:</strong></td>

                        </tr>

                        <tr>

                          <td width="35%" class="txt-final-title">Name :</td>

                          <td width="65%" class="txt-final">

                            <?=$roll_row['name'];?>

                          </td>

                        </tr>

                        <tr >

                          <td width="35%" class="txt-final-title">Roll Number :</td>

                          <td width="65%" class="txt-final">

                            <?=$roll_row['roll_no'];?>

                          </td>

                        </tr>

                        <tr >

                          <td width="35%" class="txt-final-title">Enrollment Number :</td>

                          <td width="65%" class="txt-final">

                            <?=$roll_row['enroll_no'];?>

                          </td>

                        </tr>

                        <tr >

                          <td width="35%" class="txt-final-title">Programme Name :</td>

                          <td width="65%" class="txt-final">

                            <?=$roll_row['prog_name'];?>

                          </td>

                        </tr>

                        <tr >

                          <td width="35%" class="txt-final-title">Father's Name :</td>

                          <td width="65%" class="txt-final">

                            <?=$roll_row['fname'];?>

                          </td>

                        </tr>

                        <tr>

                          <td width="35%" class="txt-final-title">Date of Birth :</td>

                          <td width="65%" class="txt-final">

                            <?=$roll_row['dob'];?>

                          </td>

                        </tr>

                        <tr >

                          <td width="35%" class="txt-final-title">Batch Year :</td>

                          <td width="65%" class="txt-final">

                            <?=$roll_row['batch_year'];?>

                          </td>

                        </tr>

                        <?php }else{ ?>

                        <tr >

                          <td width="35%" class="txt-final-title" colspan="2">No result found</td>

                        </tr>

                        <?php } ?>

                      </table>

                    </div>

                  </div>

                </div>

              </div>

              <!--end class row-->

            </form>

          </div>

        </div>

      </div>

    </div>

  </section>

  <?php include 'footer.php'?>