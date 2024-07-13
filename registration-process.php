<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Process | Shobhit University </title>

     <?php include 'header.php'?>

    <!-- banner -->
    <section class="inner-banner-bg">
        <div class="container text-center">
            <h1 class="banner-head text-white">Registration Process</h1>
        </div>
    </section>
    <!-- End banner -->

    <section class="registration py-4 py-md-5 px-2 ">
        <div class="container">
            <div class="registration-form p-4 p-sm-5 rounded shadow m-auto " style="background-color: #f5f5f5;">
                <h3>Registration for 15th Convocation 2024</h3>
                <p><? if($_GET['msg']!=''){ echo $_GET['msg'] ; }?></p>
                <p>Please enter the following information :</p>
                <form id="form2" name="form2" method="post" action="convo_regis.php" class="joom-form-login">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault01" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" id="validationDefault01"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label">Father's Name</label>
                            <input type="text" id="fname" name="fname" class="form-control" id="validationDefault02"
                                required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label">Mother's Name</label>
                            <input type="text" id="mname" name="mname" class="form-control" id="validationDefault02"
                                required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label">Roll Number</label>
                            <input type="text" class="form-control" name="roll_no" id="roll_no" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label">Enrollment Number</label>
                            <input type="text" class="form-control" name="enroll_no" id="enroll_no" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationDefault02" class="form-label">Batch Year</label>
                        <div class="col-md-6 mb-3">
                            <select class="form-select" aria-label="Default select example" name="start_year"
                                id="start_year">
                                <option value="" selected>From</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="form-select" aria-label="Default select example" name="pass_year12"
                                id="pass_year12">
                                <option value="" selected>To</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label">Course attended</label>
                            <select name="couse_attend" id="couse_attend" class="form-select">
                                <option value="" selected="selected">Select Course</option>
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
                                <option value="M.Tech. (Biomedical Engineering)">M.Tech. (Biomedical Engineering) </option>
                                <option value="M.Tech. (Biotechnology)">M.Tech. (Biotechnology)</option>
                                <option value="M.Tech. (CAD/CAM)">M.Tech. (CAD/CAM)</option>
                                <option value="M.Tech. (Computer Engineering)">M.Tech. (Computer Engineering)</option>
                                <option value="M.Tech. (Food Technology)">M.Tech. (Food Technology)</option>
                                <option value="MA (Education)">MA (Education)</option>
                                <option value="MBA">MBA</option>
                                <option value="MCA">MCA</option>
                                <option value="MLIS">MLIS</option>
                                <option value="PG Diploma (Yoga)">PG Diploma (Yoga)</option>
                                <option value="Ph.D.">Ph.D.</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label">Mobile</label>
                            <input type="text" name="mobile" id="mobile" required="" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault02" class="form-label">E-mail id</label>
                            <input type="text" name="email" id="email" required="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="validationDefault02" class="form-label">Attending Convocation</label>
                        </div>
                        <div class="col-md-12 mb-3 d-flex gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="convo_att" id="radioyes" value="Yes" onclick="showHideDiv()">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="convo_att" id="radiono" value="No" onclick="showHideDiv()">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  No
                                </label>
                              </div>

                        </div>
                        <div class="col-md-12 mb-5">
                            <select class="form-select" name="convo_attend_with" id="convo_attend_with">
                                <option value="" selected="selected">Attending with </option>
                                <option value="Parents">Parents</option>
                                <option value="Spouse">Spouse</option>
                                <option value="None">None</option>
                              </select>
                        </div>
                    </div>

                    <div class="col-12 controls d-flex gap-3 justify-content-center">
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-success button">
                        <input type="reset" name="reset" value="RESET" class="btn btn-success button">
                    </div>
            </div>
            </form>

        </div>
        </div>
    </section>

    <?php include 'footer.php'?>