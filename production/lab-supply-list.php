<?php
include_once "./config.php";
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
            <div class="page-title">
                <div class="title_left">
                    <a href="index5.php" class="title_link btn btn-primary" type="button">
                        <p class="h6">⏎ Return to Laboratory Page</p>
                    </a>
                </div>
            </div>

            <div class="clearfix"></div>
            <!-- top tiles -->
            <div class="row">
                <div class="col-md-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="lab-supply-list.php?type=list" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-warning"><i class="fa fa-refresh"></i> Current Lab Supply</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="lab-supply-list.php?type=form" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-primary"><i class="fa fa-list"></i> Lab Supply Form</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="x_panel" style="border:3px solid green">
                <div class="x_title">
                    <h1>Lab Supply Form</h1>

                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                        <!-- -->
                        <div class="item form-group">
                            <!-- <div class="col-md-12 col-sm-12 col-sm-12">
                                <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">Mode of Arrival to Hospital/ED</label>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="search-filter" id="search-filter_4" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filterHelpBlock">
                                    <label for="search-filter_4" class="custom-control-label">Taxi</label>
                                </div>
                            </div> -->
                            <?php
                            // var_dump(array_keys($labSupply));
                            // // foreach ($labSupply as $key => $value) {
                            // //     $labObj = new MeLabSupplyCat();
                            // //     $labObj->setName($key);
                            // //     $labObj->setCreatedOn(date("d/m/Y H:i:s"));
                            // //     $labObj->insert();
                            // // //break;
                            // // }
                            // foreach ($labSupply as $key => $value) {
                            //     $labObj = new MeLabSupplyCat('*');
                            //     $result = $labObj->getResultSet();
                            //     $result->data_seek(0);
                            //     while ($row = $result->fetch_object()) {
                            //         if ($row->name == $key) {
                            //             foreach ($value as $k => $v) {
                            //                 var_dump($row->id);

                            //                 $list = new MeLabSupplyList();
                            //                 //["name" => "Electrode washing solution of 5ml", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 5],
                            //                 $list->setEmployeeId('000001');
                            //                 $list->setCatergoryId((int)$row->id);
                            //                 $list->setName($v['name']);
                            //                 $list->setUnit($v['unit']);
                            //                 $list->setCurrentAmount($v['amc']);
                            //                 $list->setMinStock($v['min-stock']);
                            //                 $list->setMaxStock($v['max-stock']);
                            //                 $list->setQ4ConsumptionB($v['q4-consumption-b']);
                            //                 $list->setAnnualConsumptionC($v['annual-consumption-c']);
                            //                 $list->setCreatedOn(date("d/m/Y H:i:s"));
                            //                 $list->insert();

                            //             }
                            //         }
                            //     }
                            // }
                            ?>
                        </div>
                    </form>
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
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>