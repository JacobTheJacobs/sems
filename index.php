<?php<?php
if (isset($_POST['submit'])) {
    $sn_num = $_POST['gprs_sn_number'];
    $po_num = $_POST['po_number'];
    $gprs_description = $_POST['gprs_description'];
    $gprs_date = $_POST['gprs_date'];
    $marlog_date = $_POST['marlog_date'];
    echo $sn_num;
}



?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .box {
            width: 800px;
            margin: 0 auto;
        }

        .active_tab1 {
            background-color: #fff;
            color: #333;
            font-weight: 600;
        }

        .inactive_tab1 {
            background-color: #f5f5f5;
            color: #333;
            cursor: not-allowed;
        }

        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }
    </style>
</head>

<body>
    <div class="container box">
        <br />
        <h2 align="center">MultiCutting Edge System For Inventory Mangment Of Sem Boards</h2><br />
        <!--TABS-->
        <form action="index.php" method="post" id="register_form">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">GPRS Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="list_personal_details" style="border:1px solid #ccc">MARLOG Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="list_contact_details" style="border:1px solid #ccc">SCAT Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="testing_details" style="border:1px solid #ccc">Testing </a>
                </li>
            </ul>
            <!--GPRS DETAILS-->
            <div class="tab-content" style="margin-top:16px;">
                <div class="tab-pane active" id="login_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">GPRS Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="gprs_sn_number" id="gprs_sn_number" class="form-control" />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="gprs_po_number" id="gprs_po_number" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>GPRS Description</label>
                                <input type="text" name="gprs_description" id="gprs_description" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>GPRS Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="gprs_gprs_date" id="gprs_gprs_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_gprs_gprs_date" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                                <button type="button" name="next" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <!--MARLOG-->
                <div class="tab-pane fade" id="personal_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">MARLOG Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="marlog_sn_number" id="marlog_sn_number" class="form-control"  />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="marlog_po_number" id="marlog_po_number" class="form-control" />
                                <span id="error_po" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Description</label>
                                <input type="text" name="marlog_gprs_description" id="marlog_gprs_description" class="form-control" />
                                <span id="error_description" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="marlog_gprs_date" id="marlog_gprs_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>MARLOG Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="marlog_marlog_date" id="marlog_marlog_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                                <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <!--SCAT-->
                <div class="tab-pane fade" id="contact_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">SCAT Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="scat_sn_number" id="scat_sn_number" class="form-control"  />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="scat_po_number" id="scat_po_number" class="form-control" />
                                <span id="error_po" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Description</label>
                                <input type="text" name="scat_gprs_description" id="gprs_description" class="form-control" />
                                <span id="error_description" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="scat_gprs_date" id="scat_gprs_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>MARLOG Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="scat_marlog_date" id="scat_marlog_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>SCAT Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="scat_scat_date" id="scat_scat_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>SCAT SCRAP</label>
                                <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <input type="text" name="scat_scrap_desc" class="form-control" id="scat_scrap_desc" style="display:none" />
                            </div>
                            <br />
                            <div align="center">
                                <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <!--Testing-->
                <div class="tab-pane fade" id="testing_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">Testing Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="testing_sn_number" id="testing_sn_number" class="form-control" />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="testing_po_number" id="testing_po_number" class="form-control" />
                                <span id="error_po" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Description</label>
                                <input type="text" name="testing_description" id="testing_description" class="form-control" />
                                <span id="error_description" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="testing_gprs_date" id="testing_gprs_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>MARLOG Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="testing_marlog_date" id="testing_marlog_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>SCAT Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="testing_scat_date" id="testing_scat_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Testing Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="testing_testing_date" id="testing_scat_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                                <button type="button" name="next" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<script>
function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("scat_scrap_desc");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}


    $(document).ready(function(e) {

        let sn_number;
        let gprs_gprs_date;

        //------------------------------------------------------GPRS------------------------------------------------------
        $('#btn_login_details').click(function(e) {
            e.preventDefault();
            var  error_sn  =  '' ;
            var  error_date  =  '' ;

            //check if gprs_gprs_date is not empty and less than today Date
            gprs_gprs_date = $('#gprs_gprs_date').val();
            var gprs_Date = new Date(gprs_gprs_date);
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            console.log(gprs_gprs_date,"picked");
            console.log(yyyy+'-'+mm+'-'+dd,"today");
            console.log(gprs_gprs_date>yyyy+'-'+mm+'-'+dd);

            if ($.trim($('#gprs_sn_number').val()).length == 0) {
                    error_sn = 'Sem Number is required';
                    $('#error_sn').text(error_sn);
                    $('#gprs_sn_number').addClass('has-error');
            
            }else if(gprs_Date > yyyy+'-'+mm+'-'+dd){
                    error_date = 'GPRS Date is not valid';
                    $('#error_gprs_gprs_date').text(error_date);
                    $('#gprs_gprs_date').addClass('has-error');
                    console.log(gprs_Date);
            }else{
                    //get the value of sn_number
                    sn_number = $('#gprs_sn_number').val();
                    //put the value into the marlog_sn_number
                    $('#marlog_sn_number').val(sn_number);
                    $('#scat_sn_number').val(sn_number);
            }


            if (error_sn != '') {
                return false;
            } else {
                $('#list_login_details').removeClass('active active_tab1');
                $('#list_login_details').removeAttr('href data-toggle');
                $('#login_details').removeClass('active');
                $('#list_login_details').addClass('inactive_tab1');
                $('#list_personal_details').removeClass('inactive_tab1');
                $('#list_personal_details').addClass('active_tab1 active');
                $('#list_personal_details').attr('href', '#personal_details');
                $('#list_personal_details').attr('data-toggle', 'tab');
                $('#personal_details').addClass('active in');
            }

        });

        $('#previous_btn_personal_details').click(function() {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active in');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_login_details').removeClass('inactive_tab1');
            $('#list_login_details').addClass('active_tab1 active');
            $('#list_login_details').attr('href', '#login_details');
            $('#list_login_details').attr('data-toggle', 'tab');
            $('#login_details').addClass('active in');
        });

        //------------------------------------------------------MARLOG------------------------------------------------------
        $('#btn_personal_details').click(function(e) {
            e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

       
                $('#list_personal_details').removeClass('active active_tab1');
                $('#list_personal_details').removeAttr('href data-toggle');
                $('#personal_details').removeClass('active');
                $('#list_personal_details').addClass('inactive_tab1');
                $('#list_contact_details').removeClass('inactive_tab1');
                $('#list_contact_details').addClass('active_tab1 active');
                $('#list_contact_details').attr('href', '#contact_details');
                $('#list_contact_details').attr('data-toggle', 'tab');
                $('#contact_details').addClass('active in');
            
        });

        $('#previous_btn_contact_details').click(function() {
            $('#list_contact_details').removeClass('active active_tab1');
            $('#list_contact_details').removeAttr('href data-toggle');
            $('#contact_details').removeClass('active in');
            $('#list_contact_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
        });

        //------------------------------------------------------SCAT------------------------------------------------------
        $('#btn_contact_details').click(function() {
            var error_address = '';
            var error_mobile_no = '';
            var  mobile_validation  =  / ^ \ d { 10 } $ / ;
            if ($.trim($('#address').val()).length == 0) {
                error_address = 'Address is required';
                $('#error_address').text(error_address);
                $('#address').addClass('has-error');
            } else {
                error_address = '';
                $('#error_address').text(error_address);
                $('#address').removeClass('has-error');
            }

            if ($.trim($('#mobile_no').val()).length == 0) {
                error_mobile_no = 'Mobile Number is required';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            } else {
                if (!mobile_validation.test($('#mobile_no').val())) {
                    error_mobile_no = 'Invalid Mobile Number';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').addClass('has-error');
                } else {
                    error_mobile_no = '';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').removeClass('has-error');
                }
            }
            if (error_address != '' || error_mobile_no != '') {
                return false;
            } else {
                $('#btn_contact_details').attr("disabled", "disabled");
                $(document).css('cursor', 'prgress');
                $("#register_form").submit();
            }

        });

    });
</script>
        <br />
        <h2 align="center">MultiCutting Edge System For Inventory Mangment Of Sem Boards</h2><br />
        <?php echo "sup" ?>
        <form action="index.php" method="post" id="register_form">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">GPRS Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact Details</a>
                </li>
            </ul>
            <div class="tab-content" style="margin-top:16px;">
                <div class="tab-pane active" id="login_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">GPRS Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="sn_number" id="sn_number" class="form-control" />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="po_number" id="po_number" class="form-control" />
                                <span id="error_po" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" id="description" class="form-control" />
                                <span id="error_description" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="date" id="date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                                <button type="submit" name="submit" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="personal_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">Fill Personal Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Enter First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" />
                                <span id="error_first_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Enter Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" />
                                <span id="error_last_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="male" checked> Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="female"> Female
                                </label>
                            </div>
                            <br />
                            <div align="center">
                                <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">Fill Contact Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Enter Address</label>
                                <textarea name="address" id="address" class="form-control"></textarea>
                                <span id="error_address" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Enter Mobile No.</label>
                                <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
                                <span id="error_mobile_no" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                                <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                                <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<script>
    $(document).ready(function(e) {

        $('#btn_login_details').click(function(e) {
            e.preventDefault();
            var error_sn = '';



            if ($.trim($('#sn_number').val()).length == 0) {
                error_sn = 'Email is required';
                $('#error_sn').text(error_sn);
                $('#sn_number').addClass('has-error');
            }


            if (error_sn != '') {
                return false;
            } else {
                $('#list_login_details').removeClass('active active_tab1');
                $('#list_login_details').removeAttr('href data-toggle');
                $('#login_details').removeClass('active');
                $('#list_login_details').addClass('inactive_tab1');
                $('#list_personal_details').removeClass('inactive_tab1');
                $('#list_personal_details').addClass('active_tab1 active');
                $('#list_personal_details').attr('href', '#personal_details');
                $('#list_personal_details').attr('data-toggle', 'tab');
                $('#personal_details').addClass('active in');
            }

        });

        $('#previous_btn_personal_details').click(function() {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active in');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_login_details').removeClass('inactive_tab1');
            $('#list_login_details').addClass('active_tab1 active');
            $('#list_login_details').attr('href', '#login_details');
            $('#list_login_details').attr('data-toggle', 'tab');
            $('#login_details').addClass('active in');
        });

        $('#btn_personal_details').click(function() {
            var error_first_name = '';
            var error_last_name = '';

            if ($.trim($('#first_name').val()).length == 0) {
                error_first_name = 'First Name is required';
                $('#error_first_name').text(error_first_name);
                $('#first_name').addClass('has-error');
            } else {
                error_first_name = '';
                $('#error_first_name').text(error_first_name);
                $('#first_name').removeClass('has-error');
            }

            if ($.trim($('#last_name').val()).length == 0) {
                error_last_name = 'Last Name is required';
                $('#error_last_name').text(error_last_name);
                $('#last_name').addClass('has-error');
            } else {
                error_last_name = '';
                $('#error_last_name').text(error_last_name);
                $('#last_name').removeClass('has-error');
            }

            if (error_first_name != '' || error_last_name != '') {
                return false;
            } else {
                $('#list_personal_details').removeClass('active active_tab1');
                $('#list_personal_details').removeAttr('href data-toggle');
                $('#personal_details').removeClass('active');
                $('#list_personal_details').addClass('inactive_tab1');
                $('#list_contact_details').removeClass('inactive_tab1');
                $('#list_contact_details').addClass('active_tab1 active');
                $('#list_contact_details').attr('href', '#contact_details');
                $('#list_contact_details').attr('data-toggle', 'tab');
                $('#contact_details').addClass('active in');
            }
        });

        $('#previous_btn_contact_details').click(function() {
            $('#list_contact_details').removeClass('active active_tab1');
            $('#list_contact_details').removeAttr('href data-toggle');
            $('#contact_details').removeClass('active in');
            $('#list_contact_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
        });

        $('#btn_contact_details').click(function() {
            var error_address = '';
            var error_mobile_no = '';
            var mobile_validation = /^\d{10}$/;
            if ($.trim($('#address').val()).length == 0) {
                error_address = 'Address is required';
                $('#error_address').text(error_address);
                $('#address').addClass('has-error');
            } else {
                error_address = '';
                $('#error_address').text(error_address);
                $('#address').removeClass('has-error');
            }

            if ($.trim($('#mobile_no').val()).length == 0) {
                error_mobile_no = 'Mobile Number is required';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            } else {
                if (!mobile_validation.test($('#mobile_no').val())) {
                    error_mobile_no = 'Invalid Mobile Number';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').addClass('has-error');
                } else {
                    error_mobile_no = '';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').removeClass('has-error');
                }
            }
            if (error_address != '' || error_mobile_no != '') {
                return false;
            } else {
                $('#btn_contact_details').attr("disabled", "disabled");
                $(document).css('cursor', 'prgress');
                $("#register_form").submit();
            }

        });

    });
</script>
