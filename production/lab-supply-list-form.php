<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Order Sheet");
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
                        <a href="index5.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Laboratory Page</p>
                        </a>
                        <p class="h3 text-primary"><i class="fa fa-list"></i> Lab Supply List Order Form </p>
                        <span class="text-info"></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Form to update Hospital supply list (to add, remove, and update current)</h2>

                                <div class="clearfix"></div>
                            </div>
                            <?php
                            $name = '';
                            $type = '';
                            $quantity = '';
                            $id = '';
                            $action = '';
                            if (isset($_GET['id'])) {
                                $id = (int)$_GET['id'];
                                $supply = new MeLabSupplyList($id);
                                $name = $supply->getName();
                                $unit = $supply->getUnit();
                                $amc = (int)$supply->getCurrentAmount();
                                $maxStock = (int)$supply->getMaxStock();
                                $minStock = (int)$supply->getMinStock();
                                $q4b = (int)$supply->getQ4ConsumptionB();
                                $ac = (int)$supply->getAnnualConsumptionC();
                            }
                            ?>

                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-supply-list-processing.php?id=<?php echo $id;?>">
                                    <div class="item form-group">
                                        <label for="supply-name" class="col-form-label col-md-3 col-sm-3 label-align">Supply Name</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="supply-name" name="supply-name" placeholder="write supply here ..." type="text" class="form-control" value="<?php echo $name; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="supply-type" class="col-form-label col-md-3 col-sm-3 label-align">Unit</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="supply-type" name="supply-type" type="text" placeholder="Tablet, ampule, 200ml, ..." class="form-control" value="<?php echo $unit; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="supply-amc" class="col-form-label col-md-3 col-sm-3 label-align">Current Amount (AMC)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="supply-amc" name="supply-amc" type="number" placeholder= "write Current Amount (AMC) in number here ..." class="form-control" value="<?php echo $amc; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="supply-maxStock" class="col-form-label col-md-3 col-sm-3 label-align">Max Stock</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="supply-maxStock" name="supply-maxStock" type="number" placeholder= "write maxStock in number here ..." class="form-control" value="<?php echo $maxStock; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="supply-minStock" class="col-form-label col-md-3 col-sm-3 label-align">Min Stock</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="supply-minStock" name="supply-minStock" type="number" placeholder= "write minStock in number here ..." class="form-control" value="<?php echo $minStock; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="supply-q4b" class="col-form-label col-md-3 col-sm-3 label-align">Quarter consumption(B)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="supply-q4b" name="supply-q4b" type="number" placeholder= "write Quarter consumption(B) in number here ..." class="form-control" value="<?php echo $q4b; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="supply-ac" class="col-form-label col-md-3 col-sm-3 label-align">Annual Consumption (C)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="supply-ac" name="supply-ac" type="number" placeholder= "write Annual Consumption (C) in number here ..." class="form-control" value="<?php echo $ac; ?>" required="required">
                                        </div>
                                    </div>
                                    <!-- <div class="item form-group">
                                        <label for="supply-status" class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select id="supply-status" name="supply-status" class="custom-select">
                                                <option value="unknown">Choose status</option>
                                                <option value="limited">limited</option>
                                                <option value="finished">finished</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="item form-group">
                                        <input id="supply-id" name="supply-id" type="hidden" class="form-control" value="<?php echo $id; ?>">
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="index8.php" type="button" class="btn btn-lg btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>

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

    <?php
    include_js();
    ?>
</body>

</html>