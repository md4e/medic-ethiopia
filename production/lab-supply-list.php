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
            <!-- <div class="row">
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
            </div> -->

            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <p class="text-muted font-18 m-b-30">

                                </p>

                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Category</th>
                                            <th>UNIT</th>
                                            <th>AMC</th>
                                            <th>MAX Stock</th>
                                            <th>MIN Stock</th>
                                            <th>Quarter consumption (B)</th>
                                            <th>Annual Consumption (C)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $supply = new MeLabSupplyList('*');
                                        $result =  $supply->getResultSet();
                                        $result->data_seek(0);
                                        while ($rows = $result->fetch_object()) {
                                            $category = new MeLabSupplyCat($rows->catergory_id);
                                            echo '<tr>';
                                            echo '<td>' . $rows->name;
                                            echo '<p class="h4 ">';
                                            echo '<a href="./lab-supply-list-form.php?id='.$rows->id.'" type="button" class="btn btn-sm btn-warning text-dark">update</a>';
                                            echo '</p>';
                                            echo '</td>';
                                            echo '<td>' . $category->getName(). '</td>';
                                            echo '<td>' . $rows->unit . '</td>';
                                            echo '<td>' . $rows->current_amount . '</td>';
                                            echo '<td>' . $rows->max_stock . '</td>';
                                            echo '<td>' . $rows->min_stock . '</td>';
                                            echo '<td>' . $rows->q4_consumption_b . '</td>';
                                            echo '<td>' . $rows->annual_consumption_c . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>