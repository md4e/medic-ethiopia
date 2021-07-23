<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
include_once "./all_lab_request.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Patient Lab Request");
    ?>
</head>

<body class="nav-md">
    <div class="container body">
        <?php
        main_container_top_navigation();
        ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <?php patient_journal_navigation(); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <?php
                            show_patient_form('patient-journal.php');
                            if (isset($_GET['lab-request'])) {
                                if ($_GET['lab-request'] == 'complete') {
                                    echo '<p class="h4 text-success">Lab request succesfully sent to Laboratory. Check queue/status here  <a href="./patient-list-laboratory.php">Lab Queue</a>
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
                            <div class="row" style="display: inline-block;">
                                <p class="h4 text-primary"><i class="fa fa-list"></i> Patient Lab Request Form
                                <?php
                                 echo '<span style="text-align:right"><strong> ['.($_SESSION['patient_card_number']->patient_card_number).']</strong></span>';
                                 ?>
                            </p>
                            </div>
                        </div>
                        <form id="lab-request-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="lab-queue.php">
                            <?php
                            lab_request_all();
                            ?>
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
            Copyright © 2020 Powered by <a href="http://abgasim.com" target="blank">ABGASIM</a>
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
            $('#lab-request-summary').show();
        });

        function isClicked(id, name, requestType) {

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
            var testData = '.test-data'; // + requestType;
            var testDataRequester = '.test-data-requester';
            $(testDataRequester).text('');
            $(testDataRequester).text(requestType);
            if ($(inputId).val() == ('X ' + name)) {
                $(inputId).val('+ ' + name);
                $(inputId).css('background-color', '');
                $(inputId).css('color', '');
                var current = $(testData).text();
                var text = current.replace(dataId, "");
                $(testData).text(text);
                $('div').remove('.request-summary-' + id);
            } else if ($(inputId).val() == ('+ ' + name)) {
                $(inputId).val('X ' + name);
                $(inputId).css('background-color', 'orange');
                var current = $(testData).text();
                $(testData).text(current + ',' + dataId + '\n');
                $('.request-summary').append('<div class="request-summary-' + id + '" style="font-weight:bold;color:green">' + name + '</div>');
            }
        }

        $('#submit-final').click(function() {
            $.ajax({
                type: 'POST',
                url: 'lab-queue.php',
                data: $('form').serialize(),
                success: function() {
                    var result = $('.test-data').text();
                    var requester = $('.test-data-requester').text();
                    window.location = './lab-queue.php?requester=' + requester + '&ids=' + result
                }
            });
        });
    </script>
</body>

</html>