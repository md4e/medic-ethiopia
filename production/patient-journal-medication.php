<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Patient Medication");
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
                <div class="col-md-12  col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <?php
                            show_patient_form('patient-journal.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="row" style="display: inline-block;">
                                <p class="h4 text-primary"><i class="fa fa-clock-o"></i> Patient Current Medication
                                <?php
                                 echo '<span style="text-align:right"><strong> ['.($_SESSION['patient_card_number']->patient_card_number).']</strong></span>';
                                ?>
                                </p>
                            </div>
                        </div>
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Medication</th>
                                        <th>Dosage</th>
                                        <th>02:00</th>
                                        <th>08:00</th>
                                        <th>14:00</th>
                                        <th>22:00</th>
                                        <th>Other</th>
                                        <th>Adminster & Sign</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Alvedon</td>
                                    <td>500mg</td>
                                    <td><input type="checkbox" id="0200"></td>
                                    <td><input type="checkbox" id="0200"></td>
                                    <td><input type="checkbox" id="0200"></td>
                                    <td><input type="checkbox" id="0200"></td>
                                    <td><input type="checkbox" id="0200"></td>
                                    <td><button class="btn-primary btn-sm">Adminster & Sign </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="row" style="display: inline-block;">
                                <p class="h4 text-primary"><i class="fa fa-list"></i> Patient Prescription Form
                                <?php
                                 echo '<span style="text-align:right"><strong> ['.($_SESSION['patient_card_number']->patient_card_number).']</strong></span>';
                                 ?>
                            </p>
                            </div>
                        </div>
                        <form id="lab-request-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="lab-queue.php">
                            <div class="item form-group">
                                <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">New Prescription Internal</label>
                                <div class="col-6">
                                    <select name="medication-request-all" id="medication-request-list" class="custom-select" required="required">
                                        <option value="medication-serology">Choose you medication internal</option>
                                        <?php
                                        $drugs = new MeDrugListInhouse('*');
                                        $result =  $drugs->getResultSet();
                                        $result->data_seek(0);
                                        while ($rows = $result->fetch_object()) {
                                            echo '<option value="' . $rows->id . '">' . $rows->name . '</option>';
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">New Prescription External</label>
                                <div class="col-6">
                                    <select name="medication-request-all" id="medication-request-list" class="custom-select" required="required">
                                        <option value="medication-serology">Choose you medication External</option>
                                        <?php
                                        foreach ($medication  as $key => $value) {
                                            echo '<option value="' . $key. '">' . $value . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6">
                                    <a href="./patient-journal.php" type="button" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn  btn-primary" id="submit-final">Add</button>
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
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>