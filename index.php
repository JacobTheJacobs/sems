<?php
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
        <form action="index.php" method="post" id="sems_form">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active_tab1" style="border:1px solid #ccc" id="gprs_details_tab">GPRS </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="marlog_details_tab" style="border:1px solid #ccc">MARLOG </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="scat_details_tab" style="border:1px solid #ccc">SCAT </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="testing_details_tab" style="border:1px solid #ccc">Testing </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="marlog2_details_tab" style="border:1px solid #ccc">MARLOG-2 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="gprsusr_details_tab" style="border:1px solid #ccc">GRPS-2/USR </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="usr_repair_details_tab" style="border:1px solid #ccc">USR REPAIR </a>
                </li>
        
            </ul>
            <!--GPRS DETAILS-->
            <div class="tab-content" style="margin-top:16px;">
                <div class="tab-pane active" id="gprs_details">
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
                                <button type="button" name="next" id="btn_gprs_details_next" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <!--MARLOG-->
                <div class="tab-pane fade" id="marlog_details">
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
                                <button type="button" name="previous_btn_marlog_details" id="previous_btn_marlog_details" class="btn btn-default btn-lg">Previous</button>
                                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                                <button type="button" name="btn_marlog_details_next" id="btn_marlog_details_next" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <!--SCAT-->
                <div class="tab-pane fade" id="scat_details">
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
                                <button type="button" name="previous_btn_scat_details" id="previous_btn_scat_details" class="btn btn-default btn-lg">Previous</button>
                                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                                <button type="button" style="display:inline" name="btn_scat_details_next" id="btn_scat_details_next" class="btn btn-info btn-lg">Next</button>
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
                            <div class="form-group">
                                <label>Testing Failed</label>
                                <input type="checkbox" id="myCheck1" onclick="myFunction1()">
                                <input type="text" name="testing_fail_description" class="form-control" id="testing_fail_description" style="display:none" />
                            </div>
                            <br />
                            <div align="center">
                            <button type="button" name="previous_btn_testing_details" id="previous_btn_testing_details" class="btn btn-default btn-lg">Previous</button>
                            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                                <button type="button" name="btn_testing_details_next" id="btn_testing_details_next" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                    <!--Marlog 2-->
                <div class="tab-pane fade" id="marlog2_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">MARLOG 2 Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="marlog2_sn_number" id="marlog2_sn_number" class="form-control" />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="marlog2_po_number" id="marlog2_po_number" class="form-control" />
                                <span id="error_po" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Description</label>
                                <input type="text" name="marlog2_description" id="marlog2_description" class="form-control" />
                                <span id="error_description" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="marlog2_gprs_date" id="marlog2_gprs_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>MARLOG Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="marlog2_marlog_date" id="marlog2_marlog_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>SCAT Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="marlog2_scat_date" id="marlog2_scat_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Testing Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="marlog2_testing_date" id="marlog2_testing_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Testing Failed</label>
                                <input type="checkbox" id="marlog2_check_failed" disabled="disabled">
                                <input disabled="disabled" type="text" name="marlog2_testing_fail_description" class="form-control" id="marlog2_testing_fail_description" />
                            </div>
                            <div class="form-group">
                                <label>Marlog 2 Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="marlog2_marlog2_date" id="marlog2_marlog2_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            
                            <br />
                            <div align="center">
                            <button type="button" name="previous_btn_marlog2_details" id="previous_btn_marlog2_details" class="btn btn-default btn-lg">Previous</button>
                            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                            <button type="button" name="btn_marlog2_details_next" id="btn_marlog2_details_next" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                    <!--GRPS/USR-->
                    <div class="tab-pane fade" id="gprs2_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">GPRS-2 Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="gprs2_sn_number" id="gprs2_sn_number" class="form-control" />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="gprs2_po_number" id="gprs2_po_number" class="form-control" />
                                <span id="error_po" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Description</label>
                                <input type="text" name="gprs2_description" id="gprs2_description" class="form-control" />
                                <span id="error_description" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="gprs2_gprs_date" id="gprs2_gprs_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>MARLOG Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="gprs2_marlog_date" id="gprs2_marlog_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>SCAT Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="gprs2_scat_date" id="gprs2_scat_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Testing Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="gprs2_testing_date" id="gprs2_testing_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Marlog 2 Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="gprs2_marlog2_date" id="gprs2_marlog2_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS 2 Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="gprs2_gprs2_date" id="gprs2_gprs2_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                            <button type="button" name="previous_btn_gprs2_details" id="previous_btn_gprs2_details" class="btn btn-default btn-lg">Previous</button>
                            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                            </div>
                            <br />
                        </div>
                    </div>
                </div>

                 <!--GRPS/USR-->
                 <div class="tab-pane fade" id="usr_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">USR Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="usr_sn_number" id="usr_sn_number" class="form-control" />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="usr_po_number" id="usr_po_number" class="form-control" />
                                <span id="error_po" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Description</label>
                                <input type="text" name="usr_description" id="usr_description" class="form-control" />
                                <span id="error_description" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_gprs_date" id="usr_gprs_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>MARLOG Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_marlog_date" id="usr_marlog_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>SCAT Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_scat_date" id="usr_scat_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Testing Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_testing_date" id="usr_testing_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Testing Failed</label>
                                <input type="checkbox" id="usr_check_failed" disabled="disabled" >
                                <input type="text"   name="marlog2_testing_fail_description" class="form-control" id="marlog2_testing_fail_description" />
                            </div>
                            <div class="form-group">
                                <label>Marlog 2 Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_marlog2_date" id="usr_marlog2_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>USR Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_usr_date" id="usr_usr_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                            <button type="button" name="previous_btn_usr_details" id="previous_btn_usr_details" class="btn btn-default btn-lg">Previous</button>
                            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                            <button type="button" name="btn_usr_details_next" id="btn_usr_details_next" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                     <!--USR REPAIR-->
                     <div class="tab-pane fade" id="usr_repair_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">USR Repair Details</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Sem Serial Number</label>
                                <input type="text" name="usr_sn_number" id="usr_sn_number" class="form-control" />
                                <span id="error_sn" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Sem PO Number</label>
                                <input type="text" name="usr_po_number" id="usr_po_number" class="form-control" />
                                <span id="error_po" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Description</label>
                                <input type="text" name="usr_description" id="usr_description" class="form-control" />
                                <span id="error_description" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>GPRS Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_gprs_date" id="usr_gprs_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>MARLOG Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_marlog_date" id="usr_marlog_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>SCAT Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_scat_date" id="usr_scat_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Testing Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_testing_date" id="usr_testing_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Testing Failed</label>
                                <input type="checkbox" id="usr_repair_check_failed" disabled="disabled">
                                <input disabled="disabled" type="text" name="usr_repair_testing_fail_description" class="form-control" id="usr_repair_testing_fail_description" />
                            </div>
                            <div class="form-group">
                                <label>Marlog 2 Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_marlog2_date" id="usr_marlog2_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>USR Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_usr_date" id="usr_usr_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>USR Repair Date</label>
                                <?php
                                $a = date("Y-m-d");
                                ?>
                                <input type="date" name="usr_usr_date" id="usr_usr_date" class="form-control" value="<?php echo $a ?>" />
                                <span id="error_date" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Is Repaired?</label>
                                <input type="checkbox" id="check_repair" onclick="myFunction2()">
                                <input type="text" name="usr_repair_description" class="form-control" id="usr_repair_description" style="display:none" />
                            </div>
                            <br />
                            <div align="center">
                            <button type="button" name="previous_btn_usr_repair_details" id="previous_btn_usr_repair_details" class="btn btn-default btn-lg">Previous</button>
                            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                            <button style="display:inline" type="button" name="btn_usr_repair_details_next" id="btn_usr_repair_details_next" class="btn btn-info btn-lg">Next</button>
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

var checIfFailedUsr = document.getElementById("usr_check_failed");
var checIfFailed = document.getElementById("marlog2_check_failed");
  // Get the checkbox
  var checkBoxTesting = document.getElementById("myCheck1");
  // Get the output text
  var text = document.getElementById("testing_fail_description");

  
var checkBoxRepair = document.getElementById("check_repair");
var textRepair = document.getElementById("usr_repair_description");
var btnRepair = document.getElementById("btn_usr_repair_details_next");

function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("scat_scrap_desc");
  var btn = document.getElementById("btn_scat_details_next");
  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
    btn.style.display = "none";
    //check the checIfFailed checkbox 

    
  } else {
    text.style.display = "none";
    btn.style.display = "inline";
    
  }
}

function myFunction1() {

  // If the checkbox is checked, display the output text
  if (checkBoxTesting.checked == true){
    text.style.display = "block";
    checIfFailed.checked = true;
    checIfFailed.disabled = true;
    checIfFailedUsr.checked = true;
    checIfFailedUsr.disabled = true;
  } else {
    text.style.display = "none";
    checIfFailed.checked = false;
    checIfFailed.disabled = true;
    checIfFailedUsr.checked = false;
    checIfFailedUsr.disabled = true;
  }
}

function myFunction2() {

// If the checkbox is checked, display the output text
if (checkBoxRepair.checked == true){
    textRepair.style.display = "block";
    btnRepair.style.display = "none";
} else {
    textRepair.style.display = "none";
    btnRepair.style.display = "inline";
}
}


    $(document).ready(function(e) {

        let sn_number;
        let gprs_gprs_date;

        //------------------------------------------------------GPRS------------------------------------------------------
        $('#btn_gprs_details_next').click(function(e) {
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
                $('#gprs_details_tab').removeClass('active active_tab1');
                $('#gprs_details_tab').removeAttr('href data-toggle');
                $('#gprs_details').removeClass('active');
                $('#gprs_details_tab').addClass('inactive_tab1');
                $('#marlog_details_tab').removeClass('inactive_tab1');
                $('#marlog_details_tab').addClass('active_tab1 active');
                $('#marlog_details_tab').attr('href', '#marlog_details');
                $('#marlog_details_tab').attr('data-toggle', 'tab');
                $('#marlog_details').addClass('active in');
            }

        });


        //------------------------------------------------------MARLOG------------------------------------------------------
        $('#previous_btn_marlog_details').click(function() {
            $('#marlog_details_tab').removeClass('active active_tab1');
            $('#marlog_details_tab').removeAttr('href data-toggle');
            $('#marlog_details').removeClass('active in');
            $('#marlog_details_tab').addClass('inactive_tab1');
            $('#gprs_details_tab').removeClass('inactive_tab1');
            $('#gprs_details_tab').addClass('active_tab1 active');
            $('#gprs_details_tab').attr('href', '#gprs_details');
            $('#gprs_details_tab').attr('data-toggle', 'tab');
            $('#gprs_details').addClass('active in');
        });

        
        $('#btn_marlog_details_next').click(function(e) {
            e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

       
                $('#marlog_details_tab').removeClass('active active_tab1');
                $('#marlog_details_tab').removeAttr('href data-toggle');
                $('#marlog_details').removeClass('active');
                $('#marlog_details_tab').addClass('inactive_tab1');
                $('#scat_details_tab').removeClass('inactive_tab1');
                $('#scat_details_tab').addClass('active_tab1 active');
                $('#scat_details_tab').attr('href', '#scat_details');
                $('#scat_details_tab').attr('data-toggle', 'tab');
                $('#scat_details').addClass('active in');
            
        });

        
        //------------------------------------------------------SCAT------------------------------------------------------
        $('#previous_btn_scat_details').click(function() {
            $('#scat_details_tab').removeClass('active active_tab1');
            $('#scat_details_tab').removeAttr('href data-toggle');
            $('#scat_details').removeClass('active in');
            $('#scat_details_tab').addClass('inactive_tab1');
            $('#marlog_details_tab').removeClass('inactive_tab1');
            $('#marlog_details_tab').addClass('active_tab1 active');
            $('#marlog_details_tab').attr('href', '#marlog_details');
            $('#marlog_details_tab').attr('data-toggle', 'tab');
            $('#marlog_details').addClass('active in');
        });

        
        $('#btn_scat_details_next').click(function(e) {
           e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

       
                $('#scat_details_tab').removeClass('active active_tab1');
                $('#scat_details_tab').removeAttr('href data-toggle');
                $('#scat_details').removeClass('active');
                $('#scat_details_tab').addClass('inactive_tab1');
                $('#testing_details_tab').removeClass('inactive_tab1');
                $('#testing_details_tab').addClass('active_tab1 active');
                $('#testing_details_tab').attr('href', '#scat_details');
                $('#testing_details_tab').attr('data-toggle', 'tab');
                $('#testing_details').addClass('active in');
        });

        
        
        //------------------------------------------------------TESTING------------------------------------------------------
        $('#previous_btn_testing_details').click(function() {
            $('#testing_details_tab').removeClass('active active_tab1');
            $('#testing_details_tab').removeAttr('href data-toggle');
            $('#testing_details').removeClass('active in');
            $('#testing_details_tab').addClass('inactive_tab1');
            $('#scat_details_tab').removeClass('inactive_tab1');
            $('#scat_details_tab').addClass('active_tab1 active');
            $('#scat_details_tab').attr('href', '#marlog_details');
            $('#scat_details_tab').attr('data-toggle', 'tab');
            $('#scat_details').addClass('active in');
        });

        $('#btn_testing_details_next').click(function(e) {
           e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

       
                $('#testing_details_tab').removeClass('active active_tab1');
                $('#testing_details_tab').removeAttr('href data-toggle');
                $('#testing_details').removeClass('active');
                $('#testing_details_tab').addClass('inactive_tab1');
                $('#marlog2_details_tab').removeClass('inactive_tab1');
                $('#marlog2_details_tab').addClass('active_tab1 active');
                $('#marlog2_details_tab').attr('href', '#scat_details');
                $('#marlog2_details_tab').attr('data-toggle', 'tab');
                $('#marlog2_details').addClass('active in');
        });


        //------------------------------------------------------MARLOG2------------------------------------------------------
        $('#previous_btn_marlog2_details').click(function() {
            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_details').removeClass('active in');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#testing_details_tab').removeClass('inactive_tab1');
            $('#testing_details_tab').addClass('active_tab1 active');
            $('#testing_details_tab').attr('href', '#marlog_details');
            $('#testing_details_tab').attr('data-toggle', 'tab');
            $('#testing_details').addClass('active in');
        });




  
  $('#btn_marlog2_details_next').click(function(e) {
           e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

               
  // If the checkbox is checked, display the output text
  if (checkBoxTesting.checked == true){
                $('#marlog2_details_tab').removeClass('active active_tab1');
                $('#marlog2_details_tab').removeAttr('href data-toggle');
                $('#marlog2_details').removeClass('active');
                $('#marlog2_details_tab').addClass('inactive_tab1');
                $('#grpsusr_details_tab').removeClass('inactive_tab1');
                $('#grpsusr_details_tab').addClass('active_tab1 active');
                $('#grpsusr_details_tab').attr('href', '#scat_details');
                $('#grpsusr_details_tab').attr('data-toggle', 'tab');
                $('#usr_details').addClass('active in');
  } else {
                $('#marlog2_details_tab').removeClass('active active_tab1');
                $('#marlog2_details_tab').removeAttr('href data-toggle');
                $('#marlog2_details').removeClass('active');
                $('#marlog2_details_tab').addClass('inactive_tab1');
                $('#grpsusr_details_tab').removeClass('inactive_tab1');
                $('#grpsusr_details_tab').addClass('active_tab1 active');
                $('#grpsusr_details_tab').attr('href', '#scat_details');
                $('#grpsusr_details_tab').attr('data-toggle', 'tab');
                $('#gprs2_details').addClass('active in');
  }

               
});
 
        //------------------------------------------------------GPRS2------------------------------------------------------
        $('#previous_btn_gprs2_details').click(function() {
            $('#gprs2_details_tab').removeClass('active active_tab1');
            $('#gprs2_details_tab').removeAttr('href data-toggle');
            $('#gprs2_details').removeClass('active in');
            $('#gprs2_details_tab').addClass('inactive_tab1');
            $('#marlog2_details_tab').removeClass('inactive_tab1');
            $('#marlog2_details_tab').addClass('active_tab1 active');
            $('#marlog2_details_tab').attr('href', '#marlog_details');
            $('#marlog2_details_tab').attr('data-toggle', 'tab');
            $('#marlog2_details').addClass('active in');
        });
        //------------------------------------------------------USR------------------------------------------------------
            $('#previous_btn_usr_details').click(function() {
            $('#usr_details_tab').removeClass('active active_tab1');
            $('#usr_details_tab').removeAttr('href data-toggle');
            $('#usr_details').removeClass('active in');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#marlog2_details_tab').removeClass('inactive_tab1');
            $('#marlog2_details_tab').addClass('active_tab1 active');
            $('#marlog2_details_tab').attr('href', '#marlog_details');
            $('#marlog2_details_tab').attr('data-toggle', 'tab');
            $('#marlog2_details').addClass('active in');
        });

        $('#btn_usr_details_next').click(function(e) {
           e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

                $('#usr_details_tab').removeClass('active active_tab1');
                $('#usr_details_tab').removeAttr('href data-toggle');
                $('#usr_details').removeClass('active');
                $('#usr_details_tab').addClass('inactive_tab1');
                $('#usr_repair_details_tab').removeClass('inactive_tab1');
                $('#usr_repair_details_tab').addClass('active_tab1 active');
                $('#usr_repair_details_tab').attr('href', '#scat_details');
                $('#usr_repair_details_tab').attr('data-toggle', 'tab');
                $('#usr_repair_details').addClass('active in');
        });


          //------------------------------------------------------USR REPAIR------------------------------------------------------
          $('#previous_btn_usr_repair_details').click(function() {
            $('#usr_repair_details_tab').removeClass('active active_tab1');
            $('#usr_repair_details_tab').removeAttr('href data-toggle');
            $('#usr_repair_details').removeClass('active in');
            $('#usr_details_tab').addClass('inactive_tab1');
            $('#usr_details_tab').removeClass('inactive_tab1');
            $('#usr_details_tab').addClass('active_tab1 active');
            $('#usr_details_tab').attr('href', '#marlog_details');
            $('#usr_details_tab').attr('data-toggle', 'tab');
            $('#usr_details').addClass('active in');
        });

        $('#btn_usr_repair_details_next').click(function(e) {
           e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

                $('#usr_repair_details_tab').removeClass('active active_tab1');
                $('#usr_repair_details_tab').removeAttr('href data-toggle');
                $('#usr_repair_details').removeClass('active');
                $('#usr_repair_details_tab').addClass('inactive_tab1');
                $('#gprs_details_tab').removeClass('inactive_tab1');
                $('#gprs_details_tab').addClass('active_tab1 active');
                $('#gprs_details_tab').attr('href', '#scat_details');
                $('#gprs_details_tab').attr('data-toggle', 'tab');
                $('#gprs_details').addClass('active in');
        });
    });
</script>
