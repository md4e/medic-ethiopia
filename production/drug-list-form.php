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
                        <a href="index8.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Drug Admistration Page</p>
                        </a>
                        <p class="h3 text-primary"><i class="fa fa-list"></i> Drug Order Form </p>
                        <span class="text-info"></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Form to update Hospital Drug list (to add, remove, and update current)</h2>

                                <div class="clearfix"></div>
                            </div>
                            <?php
                            $name = '';
                            $type = '';
                            $quantity = '';
                            $id = '';
                            $action = '';
                            if (isset($_GET['form'])) {
                                $action = "drug-list-form-processing.php?form=".$_GET['form']."&drug-id=" . $id;
                            }
                            else if (isset($_GET['id'])) {
                                $id = (int)$_GET['id'];
                                $drugs = new MeDrugListInhouse($id);
                                $name = $drugs->getName();
                                $type = $drugs->getType();
                                $quantity = (int)$drugs->getQuantity();
                                $action ="drug-list-form-processing.php?drug-id=" . $id;
                            }
                            ?>

                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo $action;?>">
                                    <div class="item form-group">
                                        <label for="drug-name" class="col-form-label col-md-3 col-sm-3 label-align">Drug Name</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="drug-name" name="drug-name" placeholder="write drug here ..." type="text" class="form-control" value="<?php echo $name; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="drug-type" class="col-form-label col-md-3 col-sm-3 label-align">Drug Type</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="drug-type" name="drug-type" type="text" placeholder="Tablet, ampule, 200ml, ..." class="form-control" value="<?php echo $type; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="drug-quantity" class="col-form-label col-md-3 col-sm-3 label-align">Quantity</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="drug-quantity" name="drug-quantity" type="number" placeholder= "write quantity in number here ..." class="form-control" value="<?php echo $quantity; ?>" required="required">
                                        </div>
                                    </div>
                                    <!-- <div class="item form-group">
                                        <label for="drug-status" class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select id="drug-status" name="drug-status" class="custom-select">
                                                <option value="unknown">Choose status</option>
                                                <option value="limited">limited</option>
                                                <option value="finished">finished</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="item form-group">
                                        <input id="drug-id" name="drug-id" type="hidden" class="form-control" value="<?php echo $id; ?>">
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

    <script>
        var i = 1;
        $("#add-problem").click(function() {
            var currentdate = new Date();
            var datetime = "[" + currentdate.getDate() + "-" +
                (currentdate.getMonth() + 1) + "-" +
                currentdate.getFullYear() + " " +
                currentdate.getHours() + ":" +
                currentdate.getMinutes("00") + ":" +
                currentdate.getSeconds() + "] ";
            $("<div />", {
                    "class": "wrapper",
                    id: "product" + i
                })
                .append($("<p />", {
                    type: "text",
                    id: "name" + i,
                    class: "h4"
                }))
                .append("P" + i + ": <small/>Problem " + i + "</small/>")
                .append($("<textarea />", {
                    type: "text",
                    id: "property" + i,
                    cols: "40",
                    rows: "5",
                    class: "form-control",
                    text: datetime + "\n"
                }))
                .appendTo("#problem-container");
            i++;
        });

        $("input").live("click", function() {
            $("span").text("Clicked ID: " + this.id);
        });
    </script>
</body>

</html>