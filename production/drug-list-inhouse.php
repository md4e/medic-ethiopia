<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("All drugs");
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
                        <p class="h3 text-primary"><i class="fa fa-list"></i> Hospital Drug List</p>
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
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">

                                            </p>

                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Quantity</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                      $drugs = new MeDrugListInhouse('*');
                                                      $result =  $drugs->getResultSet();
                                                      $result->data_seek(0);
                                                      while ($rows = $result->fetch_object()) {
                                                        $index = rand(0, 4);
                                                        echo '<tr>';
                                                        echo '<td>' . $rows->name;
                                                        echo '<p class="h4 ">';
                                                        echo '<a href="./drug-list-form.php?id='.$rows->id.'" type="button" class="btn btn-sm btn-warning text-dark">update</a>';
                                                        echo '</p>';

                                                        echo '</td>';
                                                        echo '<td>' . $rows->type . '</td>';
                                                        echo '<td>' . $rows->quantity . '</td>';
                                                        echo '<td>' . $rows->status . '</td>';
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
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>