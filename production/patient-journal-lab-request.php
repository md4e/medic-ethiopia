<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
include_once "./all_lab_request.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Laboratory Forms");
    ?>
    <style>
        a:hover {
            color: red;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <?php
        main_container_top_navigation();
        ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row">
                <div class="page-title">
                    <div class="title_left">
                        <a href="patient-journal.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return Patient Page</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- top tiles -->
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <?php
                            show_patient_form('patient-journal.php');
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="patient-journal-lab-request.php" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-primary"><i class="fa fa-flask"></i> Patient Lab Request</p>
                                </div>
                            </a>
                        </div>
                        <form id="lab-requeste-all" data-parsley-validate class="form-horizontal form-label-left" method="post" action="lab-queue.php">
                            <div class="item form-group">
                                <label for="lab-request-types" class="col-form-label col-md-3 col-sm-3 label-align">Choose Labratory request</label>
                                <div class="col-6">
                                    <select name="lab-request-all" id="lab-request-list" class="custom-select" required="required">Test
                                        <option value="lab-serology">Choose you treatment request</option>
                                        <option value="lab-serology">Serology and Coagulation Lab Request</option>
                                        <option value="lab-blood">Blood and Blood Crossmatch Lab request</option>
                                        <option value="lab-hematolog">Hematology Lab Request</option>
                                        <option value="lab-chemistry">Chemisitry Lab Request</option>
                                        <option value="lab-stool">Stool Examination Lab Request</option>
                                        <option value="lab-radiology-x-ray">Radiology X-ray Request</option>
                                        <option value="lab-radiology-ct-scan">Radiology CT Scan Request</option>
                                        <option value="lab-urine">Urine Analysis Examination Lab Request</option>
                                    </select>
                                </div>
                            </div>
                            <?php
                            lab_request_all();
                            ?>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6">
                                    <a href="./patient-journal.php" type="button" class="btn btn-danger">Cancel Request</a>
                                    <button type="submit" class="btn  btn-primary">Send Request</button>
                                </div>
                            </div>
                        </form>
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
            var divName = inputId.replace("99", "");
            if (id.indexOf('99') >= 0 && $(inputId).val() == ('+ ' + name)) {
                for (var index = 0; index < 24; index++) {
                    $(divName + index).css('background-color', 'orange'); //attr('disabled','disabled');
                }
            } else {
                for (var index = 0; index < 24; index++) {
                    $(divName + index).css('background-color', ''); //removeAttr('disabled');
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
        $(document).ready(function(){
            alert("aasdasdsad");
            $("form").bind("submit", function(event) {
                // using this page stop being refreshing
                event.preventDefault();
                // var requester = $(this).attr('id'); // == 'lab-serology-form') ? 'lab-serology-form' : 'other';
                alert("aasdasdsad");
                // $.ajax({
                //     type: 'POST',
                //     url: 'lab-queue.php',
                //     data: $('form').serialize(),
                //     success: function() {
                //         var result = $('.test-' + requester).text();
                //         window.location = './lab-queue.php?requester=' + requester + '&ids=' + result
                //     }
                // });
            });
        });
    </script>
</body>

</html>