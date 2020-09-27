<?php
ob_start();
include_once "./lab-all-test-defines.php";
include_once "./config.php";
include_once "./all_lab_request.php";
// var_dump($_SESSION['search_result']);
// var_dump($_SESSION['patient_card_number']);
// var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Patient detail");
    ?>
</head>

<body class="nav-md">
    <div class="container body">
        <?php
        main_container_top_navigation();
        ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <!-- <a href="index.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to Main</p>
            </a> -->

                        </p>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <!-- <div class="x_title">
                                    <h2>Button Example <small>Users</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div> -->
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-boxs">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient Journal</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="medication-tab" data-toggle="tab" href="#medication" role="tab" aria-controls="medication" aria-selected="false">Medications</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="drug-adminstration-tab" data-toggle="tab" href="#drug-adminstration" role="tab" aria-controls="drug-adminstration" aria-selected="false">Drug Adminstration</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="lab-request-tab" data-toggle="tab" href="#lab-request" role="tab" aria-controls="lab-request" aria-selected="false">Lab request</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent">

                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                                    <?php
                                                    show_patient();
                                                    if (isset($_GET['lab-request'])) {
                                                        if ($_GET['lab-request'] == 'complete') {
                                                            echo '<p class="h4 text-success">Lab request completed, check queue here
                                                        <a href="./patient-list-laboratory.php">Lab Queue</a>
                                                        </p>';
                                                        } else if ($_GET['lab-request'] == 'reject') {
                                                            echo '<p class="h4 text-warning">Lab request is inComplete, No Item selected for request</p>';
                                                        }
                                                    }
                                                    ?>
                                                </div>

                                                <div class="tab-pane fade" id="medication" role="tabpanel" aria-labelledby="medication-tab">
                                                    <?php
                                                    show_patient();
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">02:00</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">08:00</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="medication-tab" data-toggle="tab" href="#medication" role="tab" aria-controls="medication" aria-selected="false">14:00</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="drug-adminstration-tab" data-toggle="tab" href="#drug-adminstration" role="tab" aria-controls="drug-adminstration" aria-selected="false">22:00</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="lab-request-tab" data-toggle="tab" href="#drug-adminstration" role="tab" aria-controls="drug-adminstration" aria-selected="false">Other</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="card-box table-responsive">
                                                        <table id="datatable" class="table table-striped table-bordered" style="width:50%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Order time</th>
                                                                    <th>Drug Name</th>
                                                                    <th>Drug Strength</th>
                                                                    <th>Dosage</th>
                                                                    <th>Adminster & Sign</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $department = [0 => "OPD", 1 => "Emergency", 2 => "Radiology", 3 => "@Chemistry Lab", 4 => "@Stool Examination"];
                                                                for ($i = 0; $i < 4; $i++) {
                                                                    echo ' <tr><td>08:00 </td> <td>Alvedon</td> <td>500mg</td> <td>2pcs</td><td><button class="btn-primary btn-sm">Adminster & Sign </button></td></tr>';
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="drug-adminstration" role="tabpanel" aria-labelledby="drug-adminstration-tab">
                                                    <?php
                                                    show_patient();
                                                    ?>
                                                    <div class="item form-group">
                                                        <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">New Prescription</label>
                                                        <div class="col-6">
                                                            <select name="medication-request-all" id="medication-request-list" class="custom-select" required="required">
                                                                <option value="medication-serology">Choose you lab request type</option>
                                                                <?php
                                                                foreach ($medication as $key => $value) {
                                                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="lab-request" role="tabpanel" aria-labelledby="lab-request-tab">
                                                    <?php
                                                    show_patient();
                                                    ?>
                                                    <div class="item form-group">
                                                        <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">Choose Labratory request</label>
                                                        <div class="col-6">
                                                            <select name="lab-request-all" id="lab-request-list" class="custom-select" required="required">Test
                                                                <option value="lab-serology">Choose you lab request type</option>
                                                                <option value="lab-serology">Serology and Coagulation Request</option>
                                                                <option value="lab-blood">Blood and Blood Crossmatch request</option>
                                                                <option value="lab-hematolog">Hematology request</option>
                                                                <option value="lab-chemistry">Chemisitry Lab request</option>
                                                                <option value="lab-urine">Urine Analysis Examination</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <?php
                                                    lab_request_all();
                                                    ?>
                                                    <!-- <input type="button" id="submit1" value="+submit1" onClick="isClicked('submit1')" class="btn btn-sm btn-success">
                                                    <input type="button" id="submit2" value="+submit2" onClick="isClicked('submit2')" class="btn btn-sm btn-success">
                                                    <input type="button" id="submit3" value="+submit3" onClick="isClicked('submit3')" class="btn btn-sm btn-success">
                                                    <input type="button" id="submit4" value="+submit4" onClick="isClicked('submit4')" class="btn btn-sm btn-success">
                                                    <input type="button" id="submit5" value="+submit5" onClick="isClicked('submit5')" class="btn btn-sm btn-success">
                                                    <input type="button" id="submit6" value="+submit6" onClick="isClicked('submit6')" class="btn btn-sm btn-success">
                                                    <input type="button" id="submit7" value="+submit7" onClick="isClicked('submit7')" class="btn btn-sm btn-success"> -->



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Copyright © 2020 Powered by <a href="http://medic-ethiopia.com" target="blank">Medic-Ethiopia</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script>
        $('#slDisThrough').on('change', function() {
            if ($(this).val() == 1) {
                $('#slAgentID').removeClass('hide');
                $('#slRetailID').addClass('hide');
            }

            if ($(this).val() == 2) {
                $('#slAgentID').addClass('hide');
                $('#slRetailID').removeClass('hide');
            }
        });

        $('#lab-request-list').on('change', function() {
            $('.labratory-requests').hide();
            $('#' + $(this).val()).show();
        });

        function isClicked(id, name, requestType, sizetest) {

            var inputId = '#' + id;
            var divName = inputId.replace("99","");
            if (id.indexOf('99') >= 0 && $(inputId).val() == ('+ ' + name)) {
                for (var index = 0; index < 24; index++) {
                    $(divName  + index).css('background-color', 'orange');//attr('disabled','disabled');
                }
            }
            else {
                for (var index = 0; index < 24; index++) {
                    $(divName  + index).css('background-color', '');//removeAttr('disabled');
                }
            }
            ///remove Id
            var dataId = inputId.replace(/\D/g, '');
            /// get paragraph Id to write summary
            var p_div = '.test-' + requestType;
            if ($(inputId).val() == ('X ' + name)) {
                $(inputId).val('+ ' + name);
                $(inputId).css('background-color', '');
                $(inputId).css('color', '');
                var current = $('.test').text();
                var text = current.replace(dataId, "");
                $(p_div).text(text);
                $('div').remove('.' + requestType + id);
            } else if ($(inputId).val() == ('+ ' + name)) {
                $(inputId).val('X ' + name);
                $(inputId).css('background-color', 'orange');
                var current = $(p_div).text();
                $(p_div).text(current + ',' + dataId + '\n');
                $('.' + requestType).append('<div class="' + requestType + id + '" style="font-weight:bold;color:green">' + name + '</div>');
            }
        }

        $(function() {
            $('form').bind('submit', function(event) {
                // using this page stop being refreshing
                event.preventDefault();
                var requester = $(this).attr('id'); // == 'lab-serology-form') ? 'lab-serology-form' : 'other';
                $.ajax({
                    type: 'POST',
                    url: 'lab-queue.php',
                    data: $('form').serialize(),
                    success: function() {
                        var result = $('.test-' + requester).text();
                        window.location = './lab-queue.php?requester=' + requester + '&ids=' + result
                    }
                });
            });
        });
    </script>

</body>

</html>