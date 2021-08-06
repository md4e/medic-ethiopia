<?php
spl_autoload_register(function ($class_name) {
    include '../classes/' . $class_name . '.php';
});

function athealth_session_handler2()
{
    if (isset($_POST['submit'])) {
        $userID = $_POST['userID'];
        $password = $_POST['password'];

        if (isset($_POST['hospitalName']) && $_POST['hospitalName'] != "Zeweditu Hospital") {
            header('Location: ../login.php');
        }
        if ($userID == 'ceo123' && $password == 'pass123') {
            $_SESSION['pID'] = 1;
        } else if ($userID == 'doc123' && $password == 'pass123') {
            $_SESSION['pID'] = 2;
        } else if ($userID == 'lab123' && $password == 'pass123') {
            $_SESSION['pID'] = 3;
        } else if ($userID == 'pat123' && $password == 'pass123') {
            $_SESSION['pID'] = 4;
        } else if ($userID == 'phar123' && $password == 'pass123') {
            $_SESSION['pID'] = 5;
        } else {
            header('Location: ../login.php');
        }
    }
}

function athealth_normalAbNormal($type)
{
    echo '
        <div class="col-md-9 col-sm-12">
        <div class="custom-control custom-radio custom-control-inline">
        <input name="' . $type . '" id="' . $type . '_0" type="radio" aria-describedby="ospe-pertinetHelpBlock" class="custom-control-input" value="normal">
        <label for="' . $type . '_0" class="custom-control-label">NO ABNORMAL FINDING</label>
        </div>
        </div>';
    // <div class="custom-control custom-radio custom-control-inline">
    // <input name="' . $type . '" id="' . $type . '_1" type="radio" aria-describedby="ospe-no-pertinetHelpBlock" class="custom-control-input" value="abnormal">
    // <label for="' . $type . '_1" class="custom-control-label">ABNORMAL</label>
    // </div>
}
function athealth_show_patient_form($caller = null)
{
    if (isset($_SESSION['pID']) && isset($_SESSION['patient_card_number'])) {
        athealth_show_patient($caller);
        return;
    }
    $search_text = isset($_GET['search_text']) ? $_GET['search_text'] : null;
    var_dump($_GET);
    echo '
    <form id="xxxx" data-parsley-validate class="form-horizontal form-label-left" method="post" action="./athealth_search.php?caller=' . $caller . '">
    <div class="item form-group x_panel bg-info">
        <label for="search_text" class="col-form-label col-md-3 col-sm-3 label-align">Search here</label>
        <div class="col-md-8 col-sm-8">
            <div class="form-group" method="post">
                <input id="search_text" name="search_text" placeholder="Search Card number, age, name, phone, or etc ..." type="text" class="form-control" required="required" value="' . $search_text . '">
            </div>
            <div class="form-group" method="post">
                <button type="submit" class="btn btn btn-warning"><i class="fa fa-search"></i> Search</button>
            </div>

        </div>
    </div>';
    echo '</form>';
    if (isset($search_text)) {
        if (isset($_SESSION['search_result']) && sizeof($_SESSION['search_result']) == 1 && $_SESSION['search_result'][0] != '') {
            athealth_show_list_of_matching_patient($caller);
        } else {
            echo '<p class="h4 text-danger">No Patient mathing input <strong>' . $search_text . '</strong></p>';
            if (isset($_SESSION['search_result'])) {
                unset($_SESSION['search_result']);
            }
        }
    }
    athealth_show_patient($caller);
}

function athealth_show_list_of_matching_patient($caller = null)
{
    if ($caller == 'index-reception.php') {
        athealth_searchTableResultReception($caller);
    } else {
        athealth_searchTableResultDetail($caller);
    }
}


function athealth_searchTableResultDetail($caller = null)
{
    $hideDetailIf = ['index-search.php'];
    if ($caller != null) {
        if (!in_array($caller, $hideDetailIf)) {
            $caller = '&caller=patient-journal.php';
        } else {
            $caller = '&caller=' . $caller;
        }
    }
    echo '<div class="card-box table-responsive" >
    <p class="text-muted font-13 m-b-30">
    Patients matching results
    </p>
    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Profile</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>';

    $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
    include_once($documentRootPath . "/includes/crypter.php");
    $sessionSearchResultDecrypted = json_decode(Crypter::decrypt($_SESSION['search_result'][0]));
    foreach ($sessionSearchResultDecrypted->result as $key => $value) {
        $valueObj = (object) $value;
        echo '<tr>
          <td>
           <p>
           <strong>Card No.:</strong> .<u> ' . $valueObj->patient_card_number . '</u><br>
           <strong>Name:</strong> ' . $valueObj->patient_first_name . ',
           <strong>Age:</strong> ' . $valueObj->patient_age . ',
           <strong>PhoneNr.:</strong> ' . $valueObj->patient_phone . ',
           <strong>Kebele:</strong> ' . $valueObj->patient_kebele . ',
           <strong>Wereda:</strong> ' . $valueObj->patient_wereda . '
           <br><strong>Short Summary:</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. !<br>
             </p>
           </td>
          <td><a href="./session.php?card-no=' . Crypter::urlencode_encrypt($valueObj->patient_card_number) . $caller . '" class="btn btn-primary">';
        echo '<i class="fa fa-lock"></i> Open Journal ' . $valueObj->patient_card_number . '</a></td></tr>';
    }
    echo '
      </tbody>
    </table>
  </div>';
}

function athealth_searchTableResultReception($caller = null)
{
    if ($caller != null) {
        $caller = '&caller=' . $caller;
    }
    echo '<div class="card-box table-responsive" >
    <p class="text-muted font-12">
    Patients matching results
    </p>
    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Profile</th>
        </tr>
      </thead>
      <tbody>';

    $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
    include_once($documentRootPath . "/includes/crypter.php");
    $sessionSearchResultDecrypted = json_decode(Crypter::decrypt($_SESSION['search_result'][0]));
    foreach ($sessionSearchResultDecrypted->result as $key => $value) {
        $valueObj = (object) $value;
        echo '<tr><td>';
        echo '<p>';
        echo '<strong>Card No.:</strong> .<u> ' . $valueObj->patient_card_number . '</u><br>';
        echo '<strong>Name:</strong> ' . $valueObj->patient_first_name . '<br>';
        echo '<strong>Age:</strong> ' . $valueObj->patient_age . '<br>';
        echo '<strong>PhoneNr.:</strong> ' . $valueObj->patient_phone . '<br>';
        echo '<strong>Kebele:</strong> ' . $valueObj->patient_kebele . '<br>';
        echo '<strong>Wereda:</strong> ' . $valueObj->patient_wereda . '<br>';
        echo '</p><p>';
        echo '<a href="./triage-queue.php?card-no=' . Crypter::urlencode_encrypt($valueObj->patient_card_number) . '&department=OPD" class="btn btn-sm btn-primary">';
        echo '<i class="fa fa-arrow-left"></i> To OPD </a>';
        echo '<a href="./triage-queue.php?card-no=' . Crypter::urlencode_encrypt($valueObj->patient_card_number) . '&department=Emergency" class="btn btn-sm btn-danger">';
        echo '<i class="fa fa-arrow-right"></i> To Emergency </a>';
        echo '</p></td></tr>';
    }
    echo '
      </tbody>
    </table>
  </div>';
}
function athealth_show_patient($caller = null, $card_no = null)
{
    $patientViewSmall = [
        'index-reception.php',
        'lab-serology-coagulations.php',
        'lab-blood-request.php',
        'lab-blood-crossmatch.php',
        'lab-hematology-request.php',
        'lab-chemistry-request.php',
        'lab-urine-analysis-examination.php',
        'lab-stool-examination.php'
    ];
    if (in_array($caller, $patientViewSmall)) {
        athealth_show_patient_reception($caller);
    } else {
        if ($caller == 'patient-list-triage.php') {
            athealth_show_patient_triage($card_no);
        }
        athealth_show_patient_detail($caller);
    }
}

function athealth_show_patient_detail($caller = null)
{
    if (isset($_SESSION['pID']) && isset($_SESSION['patient_card_number'])) {
        $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
        include_once($documentRootPath . "/includes/crypter.php");
        $patientSession = (object)$_SESSION['patient_card_number'];
        // var_dump($patientSession);
        echo '<div class="item form-group x_panel" style="border-radius:5px;">';
        echo '<div class="row" style="width:100%;padding:2px;">';
        echo '<div class="col-md-12 col-sm-12 col-xs-12" style="text-align:right;padding:0;">';
        $finalCaller = '';
        if ($caller != null) {
            $finalCaller = '&caller=' . $caller;
        }
        echo '<p><a href="./session.php?card-no-close=' . Crypter::urlencode_encrypt($patientSession->patient_card_number)  . $finalCaller . '" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Close </a></p>';
        echo '</div>';


        echo '<div class="row">';
        echo '<div class="col-md-12 col-sm-12 col-xs-12">';
        echo '<p class="h5 text-primary"><i class="fa fa-user"></i> ' . $patientSession->patient_first_name . ', Age:' . $patientSession->patient_age . '</p>';
        echo '<p>';


        echo '
        <strong>Card No.:</strong> .<u> <strong>' . $patientSession->patient_card_number . '</strong></u><br>
        <strong>Name:</strong> ' . $patientSession->patient_first_name . ', <strong>Age:</strong>:' . $patientSession->patient_age . ', Dept: OPD,
        <strong>PhoneNr.:</strong> ' . $patientSession->patient_phone . '<br>
        <strong>Short Summary:</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit.!
          </p>';
        echo '</p>';
        echo '<div class="col-md-12 col-sm-12 col-xs-12" >';

        $hideDetailIf = ['patient-journal.php', 'patient-journal-full.php'];
        if (!in_array($caller, $hideDetailIf)) {
            if ($_SESSION['pID'] <= 2) {
                echo '<a href="./patient-journal.php?card-no=' . Crypter::urlencode_encrypt($patientSession->patient_card_number)  . '" class="btn btn-sm btn-primary">Show detail</a>';
            }
        }

        echo '</div>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

function athealth_show_patient_reception($caller = null)
{
    $finalCaller = '';
    if ($caller != null) {
        if ($caller == 'index-reception.php') {
            $finalCaller = '&caller=' . $caller;
        } else {
            $finalCaller = '&caller=index5.php';
        }
    }
    if (isset($_SESSION['pID']) && isset($_SESSION['patient_card_number'])) {
        $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
        include_once($documentRootPath . "/includes/crypter.php");
        $patientSession = (object)$_SESSION['patient_card_number'];
        // var_dump($patientSession);
        echo '<div class="item form-group x_panel" style="border-radius:5px;">';
        echo '<div class="row" style="width:100%;padding:5px;">';
        echo '<div class="col-md-12 col-sm-12 col-xs-12" style="text-align:right;padding:0;">';

        echo '<p><a href="./session.php?card-no-close=' . Crypter::urlencode_encrypt($patientSession->patient_card_number)  . $finalCaller . '" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Close </a></p>';
        echo '</div>';

        echo '<div class="row">';
        echo '<div class="col-md-12 col-sm-12 col-xs-12">';
        echo '<p class="h5 text-primary"><i class="fa fa-user"></i> ' . $patientSession->patient_first_name . ', Age:' . $patientSession->patient_age . ', Dept: OPD</p>';
        echo '<p>';
        echo '<strong>Card No.:</strong> .<strong>' . $patientSession->patient_card_number . '</strong><br>';
        echo '<strong>Name:</strong>' . $patientSession->patient_first_name . '<br>';
        echo '<strong>Age:</strong>' . $patientSession->patient_age . '<br>';
        echo '<strong>PhoneNr.:</strong> ' . $patientSession->patient_phone . '<br>';
        echo '<strong>Wereda.:</strong> ' . $patientSession->patient_kebele . '<br>';
        echo '<strong>Kebele.:</strong> ' . $patientSession->patient_kebele . '<br>';
        echo  '</p>';
        echo '<div class="col-md-12 col-sm-12 col-xs-12" >';
        if ($finalCaller == 'index-reception.php') {
            echo '<a href="./index_patient.php?card-no=' . Crypter::urlencode_encrypt($patientSession->patient_card_number)  . '" class="btn btn-sm btn-primary">To OPD</a>';
            echo '<a href="./index_patient.php?card-no=' . Crypter::urlencode_encrypt($patientSession->patient_card_number)  . '" class="btn btn-sm btn-primary">To Emergency</a>';
        }

        echo '</div>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    if (isset($_GET['request']) && $_GET['request'] == 'complete' && isset($_GET['department'])) {
        echo '<p class="h3 text-success">Complete! Patient routed to Centeral Triage.</p>';
    }
}

function athealth_show_patient_triage($card_number = null)
{
    $patient = new MePatientTable('*');
    $result = $patient->getResultSet();
    $result->data_seek(0);

    while ($row = $result->fetch_object()) {
        if ($card_number == $row->patient_card_number) {
            $_SESSION['patient_card_number'] = $row;
            break;
        }
    }
}
function athealth_useSelectiveTest()
{
    $useSelectiveTest = [];
    if (isset($_SESSION['pID']) && isset($_SESSION['patient_card_number'])) {
        if (isset($_GET['selective']) && isset($_SESSION['patient_card_number'])) {

            parse_str($_GET['selective'], $results);
            $resultObject = (object)array_filter($results);
            //var_dump($resultObject);

            $dataArray = array_values(json_decode($resultObject->data, true));
            $dataArray = array_map('intval', $dataArray);
            //var_dump($dataArray);

            foreach ($dataArray as $key => $value) {
                array_push($useSelectiveTest, $GLOBALS['labTableToId'][$resultObject->table]['data'][$value]);
            }
        }
        //var_dump($useSelectiveTest);
    }
    return $useSelectiveTest;
}
function athealth_headerLinks($title = null, $dir = null)
{

    if ($dir == null) {
        $dir = "..";
    }
    echo '
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="' . $dir . '/images/flag.ico">
    <title>' . $title . '</title>';

    if ($_SERVER['DOCUMENT_ROOT'] == "medic-ethiopia.com") {
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">';
    } else {
        echo '<!-- Bootstrap -->
        <link href="' . $dir . '/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">';
    }
    echo '<!-- Font Awesome -->
    <link href="' . $dir . '/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="' . $dir . '/vendors/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style
    <link href="' . $dir . '/build/css/custom.min.css" rel="stylesheet"> -->
    <link href="' . $dir . '/build/css/custom.css" rel="stylesheet">';
}

function athealth_main_container_top_navigation()
{
    echo '
    <div class="main_container">
     <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index1-athealth.php" class="site_title">
                    <!-- <i class="fa fa-building-o"></i> --> <span>@Health</span></a>
                <!-- <i class="fa fa-building-o"></i> -->
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2> Name Lastname</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <!-- <h3>Departments</h3> -->
                    <ul class="nav side-menu">
                        <!-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a> -->
                        <li><a href="index1.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>

                        ';


    athealth_main_navigation();

    echo '</ul>
                </div>
            </div>

        </div>
    </div>


<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <div class="col-md-8">
            ';
    if (isset($_SESSION['pID']) && isset($_SESSION['patient_card_number'])) {
        echo '<p class="h3 text-success" id="countdown">You have Active Patient Session!</p>';
    }
    echo '
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-md"></i> Name Lastname
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:;"> Profile</a>
                        <a class="dropdown-item" href="javascript:;">Help</a>
                        <a class="dropdown-item" href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>
<!-- /top navigation -->
    ';
}

function athealth_main_container_top_navigation_at_health()
{
    echo '
    <div class="main_container">
     <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index1.php" class="site_title">
                    <!-- <i class="fa fa-building-o"></i> --> <span>@Health</span></a>
                <!-- <i class="fa fa-building-o"></i> -->
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2> Name Lastname</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <!-- <h3>Departments</h3> -->
                    <ul class="nav side-menu">
                        <!-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a> -->
                        <li><a href="index1.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>

                        ';


    athealth_main_navigation();

    echo '</ul>
                </div>
            </div>

        </div>
    </div>


<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <div class="col-md-8">
            ';
    if (isset($_SESSION['pID']) && isset($_SESSION['patient_card_number'])) {
        echo '<p class="h3 text-success" id="countdown">You have Active Patient Session!</p>';
    }
    echo '
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-md"></i> Name Lastname
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:;"> Profile</a>
                        <a class="dropdown-item" href="javascript:;">Help</a>
                        <a class="dropdown-item" href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>
<!-- /top navigation -->
    ';
}
function athealth_main_navigation()
{
    $nav = [
        0 => '<li ><a href="index_search.php?search-clean=true"><i class="fa fa-search text-info"></i>Patient Search</a></li>',
        1 => '<li ><a href="index5.php"><i class="fa fa-flask text-light"></i>Laboratory</a></li>',
        2 => '<li ><a href="index6.php"><i class="fa fa-book text-primary"></i>All Forms</a></li>',
        3 => '<li ><a href="index8.php"><i class="fa fa-cubes text-danger"></i>Pharmacy</a></li>',
        4 => '<li ><a href="patient-journal.php"><i class="fa fa-user text-primary"></i>Patient Journal</a></li>',
        5 => '<li ><a href="athealth_doctor_list.php"><i class="fa fa-user text-primary"></i>Doctors List</a></li>'
    ];

    $useNavIndex = [];
    if (isset($_SESSION['pID'])) {
        if ($_SESSION['pID'] == 1) {
            $useNavIndex = [0, 1, 2, 3, 4, 5];
        } else if ($_SESSION['pID'] == 2) {
            $useNavIndex =   [0, 1, 2, 3, 4, 5];
        } else if ($_SESSION['pID'] == 3) {
            $useNavIndex = [1];
        } else if ($_SESSION['pID'] == 4) {
            $useNavIndex = [4];
        }
    } else {
        $useNavIndex = [0, 1, 2, 3, 4];
    }
    foreach ($useNavIndex as $key => $value) {
        echo $nav[$value];
    }
}

function athealth_patient_journal_navigation()
{
    if (!(isset($_SESSION['pID']) && isset($_SESSION['patient_card_number']))) {
        return;
    }
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . ("://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "");
    $fileName = basename($actual_link);
    $tabs = [
        0 => ['name' => 'Patient Bio', 'url' => 'patient-journal.php', 'class' => '', 'fa' => 'fa fa-user'],
        1 => ['name' => 'Patient Analysis', 'url' => 'patient-journal-full.php', 'class' => '', 'fa' => 'fa fa-pencil'],
        2 => ['name' => 'Patient Medication', 'url' => 'patient-journal-medication.php', 'class' => '', 'fa' => 'fa fa-cubes'],
        3 => ['name' => 'Patient Nursing Care', 'url' => 'patient-journal-nursing-care.php', 'class' => '', 'fa' => 'fa fa-scissors'],
        4 => ['name' => 'Patient Lab Request', 'url' => 'patient-journal-lab-request.php', 'class' => '', 'fa' => 'fa fa-flask'],
    ];
    $tempArray = array_column($tabs, 'url');
    if (in_array($fileName, $tempArray)) {
        $key = array_search($fileName, $tempArray);
        $tabs[$key]['class'] = 'style="background-color:#2A3F54;color:white;"';
    }

    echo '<div class="row">
    <ul class="tabs" role="tablist">';
    foreach ($tabs as $key => $value) {
        echo '
        <ol>
        <a href="' . $value['url'] . '" class="patient">
        <div class="x_panel" ' . $value['class'] . '>
            <div class="x_title">
                <div class="row" style="display: inline-block;">
                    <p class="h4 text-primary"><i class="' . $value['fa'] . '"></i> ' . $value['name'] . '</p>
                </div>
            </div>
        </div>
        </a>
        </ol>';
    }
    echo '</ul></div>';
}

function athealth_include_js()
{
    if ($_SERVER['DOCUMENT_ROOT'] == "medic-ethiopia.com") {
        echo '
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    ';
    } else {
        echo '
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Parsley -->
        <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>';
    }
}

function athealth_patient_search()
{
    echo '
    <form id="xxxx" data-parsley-validate class="form-horizontal form-label-left">
    <div class="item form-group">
        <label for="search_text" class="col-form-label col-md-3 col-sm-3 label-align">Card No.</label>
        <div class="col-md-6 col-sm-6">

            <div class="input-group" method="post">
                <input id="search_text" name="search_text" placeholder="Enter query" type="text" class="form-control" required="required">
                <input type="submit" value="Patient Search" class="btn btn-success">
                <span id="patient-allergiesHelpBlock" class="form-text text-muted">If
                    patient is registered in
                    New platform filled below will be filled by data result of the
                    search request</span>
            </div>
        </div>
    </div>
</form>';
}
//////////////////////////// DEFINES ///////////////////////////

$opd_clincs   = [
    1 => "Dermatology",
    2 => "Dental",
    3 => "Rmopd",
    4 => "Rsopd",
    5 => "Cough Clinic",
    6 => "NRC",
    7 => "NSRC",
    8 => "Pallitive Care Clinic",
    9 => "Opthalmology Clinic",
    10 => "Physiotherapy Clinic",
    11 => "RGOPD",
    12 => "PNC/GRC",
    13 => "EPI",
    14 => "RGOPD",
    15 => "PMTCT",
    16 => "ART",
    17 => "TB Clinic",
    18 => "MINOR OR",
    19 => "DM Clinic",
    20 => "HPN Clinic",
    21 => "Micsalenous Clinic",
    22 => "Psychatric Clinic",
    23 => "Substance Abuse Clinic",
    24 => "Cervical Cancer Clinic",
    25 => "plastic Surgery Clinic",
    26 => "SRC",
    27 => "Pedatrics Clinic",
    28 => "NICU\HRC"
];

$medication = [

    0 => "GI.000 GASTROINTESTINAL MEDICINES",
    1 => "GI.100 Antacids 1. Aluminum Hydroxide Tablet(chewable), 500 mg ",
    2 => "GI.100 Antacids 1. Aluminum Hydroxide Mixture/Gel 320 mg/5ml",
    3 => "GI.100 Antacids 1. Aluminum Hydroxide Suspension, 360mg/5ml",
    4 => "GI.100 Antacids 2. Aluminum Hydroxide + Magnesium Hydroxide Suspension, 220mg +195mg/5ml",
    5 => "GI.100 Antacids 2. Aluminum Hydroxide + Magnesium Hydroxide Tablet (chewable), 400mg + 400 mg",
    6 => "GI.100 Antacids 3. Magnesium Hydroxide Suspension, 375mg/5ml, 7.75%",
    7 => "GI.100 Antacids 3. Magnesium Hydroxide Tablet (chewable), 300mg, 311 mg",
    8 => "GI.200 Antiulcer Agents 1. Cimetidine Injection, 200mg/ml in 2ml ampoule",
    9 => "GI.200 Antiulcer Agents 1. Cimetidine Syrup, 200mg/5ml,",
    10 => "GI.200 Antiulcer Agents 1. Cimetidine Tablet, 200mg. 400mg, 800mg",
    11 => "GI.200 Antiulcer Agents 1. Cimetidine Tablet (chewable), 200mg",
    12 => "GI.200 Antiulcer Agents 2. Omeprazole Capsule (enclosing e/c granules),20mg",
    13 => "GI.200 Antiulcer Agents 2. Omeprazole Tablet, 20mg (enteric coated)",
    14 => "GI.200 Antiulcer Agents 3. Ranitidine Injection, 10mg/ml in 5ml ampoule; 25mg/ml in 10ml ampoule",
    15 => "GI.200 Antiulcer Agents 3. Ranitidine Tablet, 150mg, 300mg",
    16 => "GI.300 Antispasmodics/Spasmolytic Analgesics 1. Atropine sulphate Injection, 1mg/ml in 1ml ampoule",
    17 => "GI.300 Antispasmodics/Spasmolytic Analgesics 2. Hyoscine(Scopolamine)Butylbromide Injection, 20mg/ml",
    18 => "GI.300 Antispasmodics/Spasmolytic Analgesics 2. Hyoscine(Scopolamine)Butylbromide Tablet, 10mg",
    19 => "GI.300 Antispasmodics/Spasmolytic Analgesics 2. Hyoscine(Scopolamine)Butylbromide Drops, 5mg/5ml",
    20 => "GI.300 Antispasmodics/Spasmolytic Analgesics 2. Hyoscine(Scopolamine)Butylbromide Suppository, 7.5mg, 10mg",
    21 => "GI.300 Antispasmodics/Spasmolytic Analgesics 3. Hyoscine(Scopolamine)Hydrobromide Injection, 0.4mg/ml, 0.6mg/ml in 1ml ampoule",
    22 => "GI.300 Antispasmodics/Spasmolytic Analgesics 3. Hyoscine(Scopolamine)Hydrobromide Tablet, 0.6mg",
    23 => "GI.400 Antiemetics 1. Chlorpromazine Hydrochloride Drops, 25mg/ml",
    24 => "GI.400 Antiemetics 1. Chlorpromazine Hydrochloride Injection, 25mg/ml, 25mg/2ml,50mg/2ml in 1ml, and 2ml ampoules",
    25 => "GI.400 Antiemetics 1. Chlorpromazine Hydrochloride Syrup, 25mg/5ml",
    26 => "GI.400 Antiemetics 1. Chlorpromazine Hydrochloride Tablet, 25mg, 100mg (film/sugarcoated )",
    27 => "GI.402 Antiemetics 2. Dimenhydrinate Tablet, 50mg",
    28 => "GI.403 Antiemetics 3. Meclizine Hydrochloride Tablet, 12.5mg, 25mg",
    29 => "GI.404 Antiemetics 4. Metoclopramide Hydrochloride Injection, 5mg/ml, 5mg/2ml in 2ml ampoule ",
    30 => "GI.404 Antiemetics 4. Metoclopramide Hydrochloride Tablet, 10mg",
    31 => "GI.404 Antiemetics 4. Metoclopramide Hydrochloride Syrup, 5mg/5ml",
    32 => "GI.404 Antiemetics 4. Metoclopramide Hydrochloride Drops, 0.2mg/drop",
    33 => "GI.501 Cathartics and Laxatives Bisacodyl Suppository, 5mg, 10mg",
    34 => "GI.501 Cathartics and Laxatives Bisacodyl Tablet, 5mg, 10mg",
    35 => "GI.502 Cathartics and Laxatives Castor oil Liquid, 30ml, 60ml",
    36 => "GI.503 Cathartics and Laxatives Glycerine Suppository, 1gm, 1.36gm, 2gm, 2.76gm",
    37 => "GI.504 Cathartics and Laxatives Lactulose Enema, (300ml Lactulose+700ml Water)",
    38 => "GI.504 Cathartics and Laxatives Lactulose Syrup, 3.5mg/5ml",
    39 => "GI.505 Cathartics and Laxatives Magnesium Sulphate Oral powder in sachet",
    40 => "GI.601 Medicines Used in Diarrhea Loperamide Capsule, 2mg",
    41 => "GI.602 Medicines Used in Diarrhea Oral Rehydration Salt Powder",
    42 => "GI.701 Antiflatulents Activated Charcoal Tablet, 125mg, 250mg",
    43 => "GI.801 Antihaemorrhoidal Agents Bismuth Subgallate Compound* (Bismuth Subgallate + Bismuth Oxide +Peru Balsam+Zinc Oxide) Ointment, 2.25% + 0.875% + 1.875% + 10.75%",
    44 => "GI.801 Antihaemorrhoidal Agents Bismuth Subgallate Compound* (Bismuth Subgallate + Bismuth Oxide +Peru Balsam+Zinc Oxide)Suppository, 59mg +24mg +49mg +296mg",
    45 => "GI.802 Antihaemorrhoidal Agents Bismuth Subgallate Compound* With Hydrocortisone (Bismuth Subgallate + Bismuth Oxide + Peru Balsam + Zinc Oxide +Hydrocortisone Acetate+ Benzyl Benzoate) Ointment, 2.25% + 0.875% + 1.875% +10.75% +0.25% +1.25%",
    46 => "GI.802 Antihaemorrhoidal Agents Bismuth Subgallate Compound* With Hydrocortisone (Bismuth Subgallate + Bismuth Oxide + Peru Balsam + Zinc Oxide +Hydrocortisone Acetate+ Benzyl Benzoate) Suppository, 59mg + 24mg + 49mg +296mg +10mg + 33mg",
    47 => "CV.000 CARDIOVASCULAR MEDICINES",
    48 => "CV.101 Medicines Used for Congestive Cardiac Failure Captopril Tablet, 12.5mg, 25mg,50mg,100mg",
    49 => "CV.102 Medicines Used for Congestive Cardiac Failure Digoxin Elixir, 0.05mg/ml",
    50 => "CV.102 Medicines Used for Congestive Cardiac Failure Digoxin 0.1mg/ml in 1ml ampoule",
    51 => "CV.102 Medicines Used for Congestive Cardiac Failure Digoxin 0.25 mg/ml in 2ml ampoule",
    52 => "CV.102 Medicines Used for Congestive Cardiac Failure Digoxin Tablet, 0.25mg",
    53 => "CV.103 Medicines Used for Congestive Cardiac Failure Enalapril Maleate Tablet,2.5mg,5mg,10mg,20mg,40mg",
    54 => "CV.104 Medicines Used for Congestive Cardiac Failure Enalapril Maleate Frusemide Injection, 10mg/ml in 2ml ampoule",
    55 => "CV.104 Medicines Used for Congestive Cardiac Failure Enalapril Maleate Frusemide Tablet, 40mg, 80mg",
    56 => "CV.104 Medicines Used for Congestive Cardiac Failure Enalapril Maleate Frusemide Elixir, 10mg/ml",
    57 => "CV.105 Medicines Used for Congestive Cardiac Failure Hydrochlorothiazide Tablet, 25mg",
    58 => "CV.201 Antiarrhythmics Lidocaine Hydrochloride Injection,5mg/ml,10mg/ml,20mg/ml in 20ml vial",
    59 => "CV.202 Antiarrhythmics Procainamide Hydrochloride Injection, 100mg/ml in 10ml vial",
    60 => "CV.202 Antiarrhythmics Procainamide Hydrochloride Tablet,250mg",
    61 => "CV.203 Antiarrhythmics Propranolol Hydrochloride Injection, 1mg/ml in 1ml ampoule",
    62 => "CV.203 Antiarrhythmics Propranolol Hydrochloride Tablet, 10mg, 40mg",
    63 => "CV.204 Antiarrhythmics Quinidine Sulphate Tablet, 200mg",
    64 => "CV.205 Antiarrhythmics Verapamil Injection, 2.5mg/ml in 2ml ampoule",
    65 => "CV.205 Antiarrhythmics Verapamil Tablet, 40mg, 80mg, 120mg",
    66 => "CV.301 Antihypertensives Diazoxide Injection , 15mg/ml in 20ml ampoule",
    67 => "CV.302 Antihypertensives Enalapril Maleate Tablet, 2.5mg,5mg,10mg,20mg,40mg",
    68 => "CV.303 Antihypertensives Hydralazine Injection, 20mg/ml in 1ml ampoule",
    69 => "CV.303 Antihypertensives Hydralazine Tablet, 25mg, 50mg",
    70 => "CV.304 Antihypertensives Methyldopa Tablet, 250mg, 500mg",
    71 => "CV.305 Antihypertensives Nifedipine Capsule, 5mg, 10mg, 20mg,30mg (m/r)",
    72 => "CV.305 Antihypertensives Nifedipine Tablet,10mg,20mg,30mg,40mg,60mg,90mg(m/r)",
    73 => "CV.306 Antihypertensives Propranolol Tablet, 10mg, 40mg",
    74 => "CV.306 Antihypertensives Propranolol Injection, 1mg/ml in 1 ml ampoule",
    75 => "CV.400 Diuretics",
    76 => "CV.401 Diuretics Frusemide Injection, 10 mg/ml in 2ml ampoule",
    77 => "CV.401 Diuretics Frusemide Tablet, 40mg ",
    78 => "CV.401 Diuretics Frusemide Elixir, 10mg/ml",
    79 => "CV.402 Diuretics Hydrochlorthiazide Tablet, 25mg",
    70 => "CV.403 Diuretics Mannitol Injection , 25%,in 50ml, 20% in 250ml, 10% in 500ml",
    81 => "CV.404 Diuretics Spironolactone Tablet, 25mg, 100mg",
    82 => "CV.404 Diuretics Spironolactone Syrup, 5mg, 10mg, 25mg,50mg, 100mg/5ml",
    83 => "CV.500 Medicines Used for Angina/Ischemic Heart Disease",
    84 => "CV.501 Medicines Used for Angina/Ischemic Heart Disease Atenolol Tablet, 50mg, 100mg",
    85 => "CV.502 Medicines Used for Angina/Ischemic Heart Disease Glyceryl Trinitrate (Nitroglycerine) Tablet (sublingual), 0.3mg,0.4mg, 0.5mg, 0.6mg",
    86 => "CV.502 Medicines Used for Angina/Ischemic Heart Disease Glyceryl Trinitrate (Nitroglycerine) Tablet (Sustained release), 2.5mg",
    87 => "CV.601 Medicines Used in Vascular Shock Adrenaline(Epinephrine) Injection, 0.1%, 1:1000 1mg/ml",
    88 => "CV.602 Medicines Used in Vascular Shock Dopamine Hydrochloride Injection, 40mg/ml"
];


$hospital =
    [
        1036 => "Zeweditu Hospital",
        1000 => "Addis Ababa Fistula Hospital",
        1001 => "ALERT",
        1002 => "Bethel Teaching General Hospital",
        1003 => "Amin General Hospital",
        1004 => "Addis General Hospital [2]",
        1005 => "Addis Hiwot Plc",
        1006 => "Anania Mothers and Children Specialized Medical Center",
        1007 => "Armed Forces General Hospital",
        1008 => "Bella Defense Referral Hospital",
        1009 => "Besegah Mother and Child Health Hospitals",
        1010 => "Brass Mother and Child Health Hospital",
        1011 => "Dagmawi Minilik Hospital",
        1012 => "DBalch Hospital",
        1013 => "Dinberua Hospital",
        1014 => "Ethio Tebib Hospital",
        1015 => "Federal Police Referral Hospital",
        1016 => "Girum General Hospital",
        1017 => "Hawassa Alatyon Hospital",
        1018 => "Hayat Hospital",
        1019 => "ICMC General Hospital CMC",
        1020 => "Kadisco General Hospital [3]",
        1021 => "Landmark General Hospital",
        1022 => "MyungSung Christian Medical Centre/Korean Hospital/MCM General Hospital",
        1023 => "Nordic Medical Center",
        1024 => "Novocare American Clinic [4]",
        1025 => "Ras Desta Damitew Hospital",
        1026 => "Saint Gabriel General Hospital[5]",
        1027 => "Shedeho Higher Clinic Dr Belaynew Mogess",
        1028 => "St. Paulos Hospital",
        1029 => "St. Yared General Hospital",
        1030 => "Tibebu Hospital",
        1031 => "Tikur Anbesa Specialized Hospital(TASH)",
        1032 => "Tirunesh Beijing General Hospital",
        1033 => "Tzna General Hospital",
        1034 => "Yearrer hospital",
        1035 => "Zenbaba General Hospital",
        1037 => "Sr. Aklesia Memorial Hospital",
        1038 => "Adama General Hospital & Medical College",
        1039 => "Haile Mariam Hospital & Medical College",
        1040 => "Bahir Dar Mini-fistula Hospital",
        1041 => "Felge Hiwot Hospital",
        1042 => "Gamby Teaching Hospital Clinic",
        1043 => "Universal Clinic",
        1044 => "Adinas Clinic",
        1045 => "Boru Meda Hospital",
        1046 => "Dessie Hospital",
        1047 => "selam hospital",
        1048 => "ethio hospital",
        1049 => "bate hospital",
        1050 => "Tossa Hospital",
        1051 => "University of Gondar Hospital",
        1052 => "Ibex Hospital",
        1053 => "Harar",
        1054 => "Harar General Hospital",
        1055 => "Hiwot fana specialized University hospital",
        1056 => "Adare Hospital",
        1057 => "Alatiyon Hospital",
        1058 => "Asher Primary Hospital",
        1059 => "Awassa Referral Hospital",
        1060 => "Bete Abrham Primary Hospital",
        1061 => "Kibru Primary Hospital",
        1062 => "Yanet Internal Medicine Specialized Center",
        1063 => "Jig-jiga University Referral Hospital",
        1064 => "Karamara Hospital",
        1065 => "Dagahbour General Hospital",
        1066 => "Gode General Hospital",
        1067 => "Qabri Dahare General Hospital",
        1068 => "Warder General Hospital",
        1069 => "Filtu General Hospital",
        1070 => "Hargelle General Hospital",
        1071 => "Sitti General Hospital",
        1072 => "Adigrat Hospital",
        1073 => "Ayder Referral Hospital",
        1074 => "Lemelem Karl Hospital",
        1075 => "Mekelle Hospital",
        1076 => "St. Mary Hospital",
        1077 => "Quiha Hospital",
        1078 => "Sihul Hospital",
        1079 => "Abiadi Hospital",
        1080 => "Wukro Hospital",
        1081 => "korem Hospital",
        1082 => "Mearig Hospital/dansha",
        1083 => "Humera Hospital",
        1084 => "Alamata Hospital",
        1085 => "Adwa Hospital",
        1086 => "Aksum University Referral Hospital",
        1087 => "Dubbo Catholic Hospital",
        1088 => "Soddo Christhian Hospital",
        1089 => "Soddo General Hospital",
        1090 => "Soddo University Hospital",
        9999 => "Other"
    ];

$regions = [
    1 => "Addis Ababa (AA)",
    2 => "Afar Region (AF)",
    3 => "Amhara Region (AR)",
    4 => "Benishangul-Gumuz Region (BR)",
    5 => "Dire Dawa (City) (DD)",
    6 => "Gambela Region (GR)",
    7 => "Harari Region (HR)",
    8 => "Oromia Region (OR)",
    9 => "Sidama Region (SR)",
    10 => "Somalia Region (SR)",
    11 => "Southern Nations, Nationalities, and Peoples' Region (SNNP)",
    12 => "Tigray Region (TG)"
];




//////////////////////////////////////////////MEDICNE SECTION/////////////////////////////////////////////
$allergies =
    [
        "No Allergy" => "No Allergy",
        "Respiratory Allergies Spring Allergies" => "There's no cure but you can take steps to curb springtime allergies, from medication to household habits.",
        "Respiratory Allergies Summer Allergies" => "Summer allergies are usually triggered by pollen from grasses and weeds.",
        "Respiratory Allergies Fall Allergies" => "Ragweed, mold and dust mites are the biggest allergy triggers in the fall.",
        "Respiratory Winter Allergies" => "If you have indoor allergies such as mold and dust mites, you may notice symptoms more during winter, when you spend more time inside",
        "Respiratory Hay Fever" => "Hay fever, also known as allergic rhinitis, is an immune disorder characterized by an allergic response to pollen grains and other substances. There are two types: seasonal, which occurs only during the time of year in which certain plants pollinate, and perennial, which occurs year-round.",
        "Respiratory Pollen Allergies" => "More than 25 million Americans are allergic to pollen from trees, grass, or weeds.",
        "Respiratory Mold Allergy" => "All of us are exposed to some mold every day, and usually, there are no problems. But if you have allergies to it, you can have a reaction if you’re around too much of it",
        "Respiratory Dust Allergy" => "For creatures you can't even see, dust mites can stir up a lot of trouble.",
        "Respiratory Dog Allergy" => "For a person with dog allergies, life in a dog-loving country isn't easy. Approximately 37%-47% of American households have a dog.",
        "Respiratory Cat Allergy" => "About 10% of the U.S. population has pet allergies and cats are among the most common culprits. Cat allergies are twice as common as dog allergies.",
        "Food Allergies Is It an Allergy or an Intolerance?" => "Food allergies or food intolerances affect nearly everyone at some point. People often have an unpleasant reaction to something they ate and wonder if they have a food allergy.",
        "Food Allergies Milk Allergy" => "If you suffer from a milk allergy, strictly avoiding milk and food containing milk and milk products is the only way to prevent a reaction, which can include immediate wheezing, vomiting, and hives.",
        "Food Allergies Casein Allergy" => "If a glass of milk or slice of pizza causes swollen lips, hives, or other symptoms, you may have an allergy to casein, a protein in milk. Another milk protein associated with allergies is whey. Some people are allergic to both casein and whey.",
        "Food Allergies Egg Allergy" => "Egg allergies are more common in children than in adults. Reactions range from mild to severe.",
        "Food Allergies Wheat Allergy" => "It can be a challenge to avoid wheat because it’s in so many things",
        "Food Allergies Nut Allergy" => "If you suffer from a nut allergy, strictly avoiding nuts, including peanuts and tree nuts like cashews and walnuts, and food containing nuts is the only way to prevent a reaction",
        "Food Allergies Fish Allergy" => "If you’re allergic to one kind of fish, your doctor may have told you to avoid others. Here’s what to look out for.",
        "Food Allergies Shellfish Allergy" => "If you’re allergic to one type of shellfish, you may have problems with others. Take these steps to make sure you don’t have an allergic reaction.",
        "Food Allergies Sulfite Sensitivity" => "Sulfites are a group of sulfur-based compounds that may occur naturally or may be added to food as an enhancer and preservative. The FDA estimates that one out of 100 people is sensitive to the compounds.",
        "Food Allergies Soy Allergy" => "If all you needed to do for a soy allergy was skip the soy sauce and tofu, life would be a breeze! But soybeans are a big part of processed foods, too.",
        "Skin Allergies Contact Dermatitis" => "Something touches your skin, and your immune system thinks it's under attack. It overreacts and sends antibodies to help fight the invader, called an allergen. The result is a red, itchy rash where the substance landed.",
        "Skin Allergies Hives (Urticaria) and Angioedema" => "Hives, also known as urticaria, are an outbreak of swollen, pale red bumps, patches, or welts on the skin that appear suddenly -- as a result of allergies, or for other reasons. In angioedema, the swelling happens under the skin, not on the surface.",
        "Skin Allergies Allergies to Poison Ivy, Oak, and Sumac" => "Poison ivy, poison oak, and poison sumac are plants that contain an irritating, oily sap called urushiol. Urushiol triggers an allergic reaction when it comes into contact with skin, resulting in an itchy rash, which can appear within hours of exposure or up to several days later.",
        "Skin Allergies Allergies to Insect Stings" => "Bee, wasp, yellow jacket, hornet, or fire ant stings are the insect stings that most often trigger allergies. Most people are not allergic to insect stings and may mistake a normal sting reaction for an allergic reaction.",
        "Skin Allergies Can You Be Allergic to the Sun?" => "Most people's skin will burn if there is enough exposure to ultraviolet radiation. However, some people burn particularly easily or develop exaggerated skin reactions to sunlight.",
        "Skin Allergies Cosmetic Allergies" => "Some beauty products can cause skin irritation or allergic reactions. Certain ingredients used in cosmetics, such as fragrances and preservatives, can act as allergens, substances that trigger an allergic reaction.",
        "Skin Allergies Nickel Allergy" => "A nickel allergy is a skin reaction that develops after exposure to nickel or items containing the metal.",
        "Other Allergies Eye Allergies" => "Most of those millions have symptoms involving their eyes.",
        "Other Allergies Allergic Conjunctivitis (Pink Eye)" => "Conjunctivitis is one of the most common and treatable eye conditions in children and adults",
        "Other Allergies Drug Allergies" => "Many medications can cause side effects, and certain ones can trigger allergies.",
        "Other Allergies Aspirin (Salicylate) Allergy" => "If you're allergic to chemicals called salicylates, you may need to avoid certain foods, medicines, and other products.",
        "Other Allergies Penicillin Allergy" => "Since the 1940s, penicillin has been a go-to drug to clear up infections caused by bacteria. But some people get a bad reaction from taking it.",
        "Other Allegies" => "No listed here"
    ];

$clinicList = [
    "Rescuscitation Room",
    "Procedure Room",
    "Waiting Room",
    "Regular OPD",
    "Emergency care",
    "Anesthesia and intensive care",
    "Geriatrics",
    "Heart and physiology",
    "Internal medicine and infection",
    "Surgery and urology",
    "Gynecology and childbirth",
    "Medical specialist care",
    "Neurology",
    "Orthopedics",
    "Radiology",
    "Rehabilitation medicine",
    "Medical Emergency(RO)",
    "Medical Emergency(YG)",
    "Surgical Emergency ",
    "Gynecologic Emergency ",
    "Obstetric Emergency ",
    "Pediatrics Emergency"
];
$modifiedEarlyWarningScore = [
    "Mobility" => [
        "L3" => "",
        "L2" => "",
        "L1" => "",
        "N" => "Walking",
        "R1" => "With help",
        "R2" => "Stretcher/imobile",
        "R3" => "",
    ],
    "HR" => [
        "L3" => "",
        "L2" => "&#x2264;40",
        "L1" => "41 - 50",
        "N" => "51 - 100",
        "R1" => "101 - 110",
        "R2" => "111 - 129",
        "R3" => "&#8805;130",
    ],
    "RR" => [
        "L3" => "",
        "L2" => "&#x2264;8",
        "L1" => "",
        "N" => "9 - 14",
        "R1" => "15 - 20",
        "R2" => "21 - 29",
        "R3" => "&#8805;30",
    ],
    "SpO2" => [
        "L3" => "",
        "L2" => "",
        "L1" => "",
        "N" => "&#8805;94%",
        "R1" => "90 - 94%",
        "R2" => "&#x2264;90% <br>(Not for CO poisoning)",
        "R3" => "",
    ],
    "Temp" => [
        "L3" => "",
        "L2" => "&#x2264;35.5&#8451;",
        "L1" => "",
        "N" => "35.1&#8451; - 37.2&#8451;",
        "R1" => "37.3&#8451; - 37.9&#8451;",
        "R2" => "&#x2264;38.5&#8451;",
        "R3" => "",
    ],
    "CNS/AVPU" => [
        "L3" => "",
        "L2" => "Confused",
        "L1" => "",
        "N" => "Alert",
        "R1" => "Response to voice",
        "R2" => "Response to pain",
        "R3" => "Unresponsive",
    ],
    "SBP" => [
        "L3" => "&#x2264;70",
        "L2" => "71 - 80",
        "L1" => "80 - 100",
        "N" => "101 - 199",
        "R1" => "",
        "R2" => "&#8805;200",
        "R3" => "",
    ],
    "Trauma" => [
        "L3" => "",
        "L2" => "",
        "L1" => "",
        "N" => "No",
        "R1" => "Yes",
        "R2" => "",
        "R3" => "",
    ],
    "Pain Score" => [
        "L3" => "",
        "L2" => "",
        "L1" => "",
        "N" => "No Pain",
        "R1" => "1 - 3/10 mild",
        "R2" => "4 - 7/10 moderate",
        "R3" => "&#8805; 7/10 Severe",
    ]
];

$GLOBALS['MEWS'] = $modifiedEarlyWarningScore;


$labSupply = [
    "reception" => [
        ["name" => "Applicator stick wooden 15cm long size with cotton (1x1000)", "unit" => "Pk", "amc" => 10, "max-stock" => 10.5, "min-stock" => 9.5, "q4-consumption-b" => 31.5, "annual-consumption-c" => 126],
        ["name" => "Blood lancet safety, depth 2mm,tip width1.5mm", "unit" => "Pk", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Examination glove", "unit" => "box", "amc" => 120, "max-stock" => 150, "min-stock" => 90, "q4-consumption-b" => 450, "annual-consumption-c" => 1800],
        ["name" => "Guaze surgical 90cm*100cm", "unit" => "roll", "amc" => 4, "max-stock" => 5, "min-stock" => 3, "q4-consumption-b" => 15, "annual-consumption-c" => 60],
        ["name" => "Blood glucose of 1*50 of test strips", "unit" => "Pk", "amc" => 20, "max-stock" => 25, "min-stock" => 15, "q4-consumption-b" => 75, "annual-consumption-c" => 300],
        ["name" => "Syringe 10ml of 100", "unit" => "Box", "amc" => 10, "max-stock" => 12.5, "min-stock" => 7.5, "q4-consumption-b" => 37.5, "annual-consumption-c" => 150],
        ["name" => "Cotton 500g", "unit" => "Roll", "amc" => 30, "max-stock" => 33, "min-stock" => 27, "q4-consumption-b" => 132, "annual-consumption-c" => 528],
        ["name" => "Alcohol Prepad of 200", "unit" => "Pk ", "amc" => 30, "max-stock" => 33, "min-stock" => 27, "q4-consumption-b" => 132, "annual-consumption-c" => 528],
        ["name" => "Serum separation tube yellow top 5ml of 100", "unit" => "Pk", "amc" => 25, "max-stock" => 26.25, "min-stock" => 23.75, "q4-consumption-b" => 78.75, "annual-consumption-c" => 315],
        ["name" => "Sodium citrate of 4ml  test  tube of 100", "unit" => "Pk", "amc" => 4, "max-stock" => 5, "min-stock" => 3, "q4-consumption-b" => 15, "annual-consumption-c" => 60],
        ["name" => "Safety box of (1x25pcs) ", "unit" => "pk", "amc" => 4, "max-stock" => 5, "min-stock" => 3, "q4-consumption-b" => 15, "annual-consumption-c" => 60],
        ["name" => "Urine cup of 100", "unit" => "Bag", "amc" => 25, "max-stock" => 31.25, "min-stock" => 18.75, "q4-consumption-b" => 93.75, "annual-consumption-c" => 375],
        ["name" => "Stool cup of 100", "unit" => "Bag", "amc" => 8, "max-stock" => 10, "min-stock" => 6, "q4-consumption-b" => 30, "annual-consumption-c" => 120],
        ["name" => "Syringe 5ml of 100 ", "unit" => "Box", "amc" => 50, "max-stock" => 62.5, "min-stock" => 37.5, "q4-consumption-b" => 187.5, "annual-consumption-c" => 750],
        ["name" => "Color coded waste segregation bin", "unit" => "each", "amc" => "-", "max-stock" => "-", "min-stock" => "-", "q4-consumption-b" => "-", "annual-consumption-c" => 20],
        ["name" => "K2 EDTA test tube of 4ml of 100", "unit" => "Pk", "amc" => 60, "max-stock" => 75, "min-stock" => 45, "q4-consumption-b" => 225, "annual-consumption-c" => 900],
        ["name" => "Plain tube of 100", "unit" => "pk", "amc" => 4, "max-stock" => 5, "min-stock" => 3, "q4-consumption-b" => 15, "annual-consumption-c" => 60],
        ["name" => "ESR tube of 100", "unit" => "pk", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "ESR thermal paper", "unit" => "rool", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Alcohol  70% of  1000ml", "unit" => "bottle", "amc" => 4, "max-stock" => 5, "min-stock" => 3, "q4-consumption-b" => 15, "annual-consumption-c" => 60]
    ],
    "Coagulation reagent" => [
        ["name" => "Fibrin and fibrinogen degradant  reagent 1(6*3ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Fibrin and fibrinogen degradant  reagent 2(2*3ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Fibrin and fibrinogen degradant control 1(1*1ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Fibrin and fibrinogen degradant control 2(1*1ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Fibrin and fibrinogen degradant calibrator(1*1ml)", "unit" => "Box", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Thrombin time reagent(10*2ml)", "unit" => "box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.95, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "APTT reagent 1(10*2ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.95, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "APTT reagent 2(1*30ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.95, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Fibrinogen reagent 1(5*2ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Fibrinogen reagent  2(1*100ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Fibrinogen reagent  3(1*1ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Prothrombin time reagent(10*2ml)", "unit" => "Box", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "D-Dimer reagent 1(6*3ml)", "unit" => "Box", "amc" => 0.5, "max-stock" => 0.5, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "D-dimer reagent 2(2*3ml)", "unit" => "Box", "amc" => 0.5, "max-stock" => 0.5, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "D-dimer control 1(1*1ml)", "unit" => "Box", "amc" => 0.5, "max-stock" => 0.5, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "D-dimer control 2(1*1ml)", "unit" => "Box", "amc" => 0.5, "max-stock" => 0.5, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "D- dimer calibrator(1*1ml)", "unit" => "Box", "amc" => 0.5, "max-stock" => 0.5, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "Clot Cleaner of 30 ml", "unit" => "Each", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Sample cup of 100", "unit" => "pk", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Test cuvet of 100", "unit" => "pk", "amc" => 1, "max-stock" => 1, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
    ],
    "GB Electrolyte reagent" => [
        ["name" => "Electrode washing solution of 5ml", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 5],
        ["name" => "Reference electrode filing solution", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 3],
        ["name" => "Electrode ion filing solution of 110ml", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 3],
        ["name" => "Activation solution cleaning solution of 110ml", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 5],
        ["name" => "QC solution of 110ml", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Test cuvet of 100", "unit" => " pk", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Electrode (Na,K,Ca,Cl)", "unit" => "each", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Maintenance kit", "unit" => "box", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 6],
        ["name" => "Calibration A of 430 ml", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 3],
        ["name" => "Calibration B of 110 ml", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 3],
    ],

    "Beck man coulter" => [
        ["name" => "Diluents of 10 L", "unit" => "Bag", "amc" => 32, "max-stock" => 40, "min-stock" => 24, "q4-consumption-b" => 120, "annual-consumption-c" => 480],
        ["name" => "Diff pack ", "unit" => "pk", "amc" => 4, "max-stock" => 5, "min-stock" => 3, "q4-consumption-b" => 15, "annual-consumption-c" => 60],
        ["name" => "Cleaner  ", "unit" => "pk", "amc" => 4, "max-stock" => 5, "min-stock" => 3, "q4-consumption-b" => 15, "annual-consumption-c" => 60],
        ["name" => "Retick pack  ", "unit" => "pk", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Lyse", "unit" => "pk", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Coulter latron", "unit" => "each", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Coulter body fluid(level 1, 2, 3)", "unit" => "PK", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Coulter retic-x cell( level 1, 2, 3)", "unit" => "pk", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Coulter 6C cell( level 1, 2, 3)", "unit" => "pk", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Giemsa stain soln of 500 ml", "unit" => "Bottle ", "amc" => 0.5, "max-stock" => 0.525, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6.3],
        ["name" => "Write stain of 500 ml", "unit" => "Bottle ", "amc" => 0.5, "max-stock" => 0.525, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6.3],
        ["name" => "Blood group  each of 10 ml Anti-A", "unit" => "Vial", "amc" => 12, "max-stock" => 12.6, "min-stock" => 11.4, "q4-consumption-b" => 37.8, "annual-consumption-c" => 151],
        ["name" => "Blood group  each of 10 ml Anti-B", "unit" => "Vial", "amc" => 12, "max-stock" => 12.6, "min-stock" => 11.4, "q4-consumption-b" => 37.8, "annual-consumption-c" => 151],
        ["name" => "Blood group  each of 10 ml Anti-D", "unit" => "Vial", "amc" => 12, "max-stock" => 12.6, "min-stock" => 11.4, "q4-consumption-b" => 37.8, "annual-consumption-c" => 151],

    ],
    "5150 mindray hematology machine reagents" => [
        ["name" => "H. pylori Ag test of  25 strip  ", "unit" => "Pk", "amc" => 10, "max-stock" => 12, "min-stock" => 8, "q4-consumption-b" => 36, "annual-consumption-c" => 144],
        ["name" => "Frosted slides, 27x75mm,thickness 1.2mm", "unit" => "Pk", "amc" => 10, "max-stock" => 12, "min-stock" => 8, "q4-consumption-b" => 36, "annual-consumption-c" => 144],
        ["name" => "Non frosted slide, 27x75mm,thickness 1.2mm", "unit" => "pk", "amc" => 20, "max-stock" => 21, "min-stock" => 19, "q4-consumption-b" => 63, "annual-consumption-c" => 252],
        ["name" => "Normal saline of 1000ml ", "unit" => "Bag", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Occult blood test strip of 25", "unit" => "pk", "amc" => 4, "max-stock" => 5, "min-stock" => 3, "q4-consumption-b" => 15, "annual-consumption-c" => 60],
        ["name" => "Pregnancy test of  50 strips ", "unit" => "Pk", "amc" => 3, "max-stock" => 3.75, "min-stock" => 2.25, "q4-consumption-b" => 11.25, "annual-consumption-c" => 45],
        ["name" => "Urine multi test 10 parameters test of 150 (comber test)", "unit" => "Pk", "amc" => 20, "max-stock" => 25, "min-stock" => 15, "q4-consumption-b" => 75, "annual-consumption-c" => 252],

    ],
    "Molecular and TB laboratory" => [
        ["name" => "Sputum cup of (1x100}", "unit" => "Box", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Carbolfuchsin of 1L", "unit" => "Bottle ", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Acid alcohol 3% of 1L", "unit" => "Bottle ", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Methylene blue 1% of 1L", "unit" => "Box", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "G0xpert cartidlege", "unit" => "box", "amc" => 6, "max-stock" => 6.3, "min-stock" => 5.7, "q4-consumption-b" => 18.9, "annual-consumption-c" => 75],
        ["name" => "DBS cartiradje", "unit" => "box", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],

    ],
    "Serology reagent" => [
        ["name" => "RF(Rheumatoid factor)of 5 ml", "unit" => "vial", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "C-reactive protein", "unit" => "vial", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Hepatitis B (HBSAg) tests  of  25strips", "unit" => "Box", "amc" => 20, "max-stock" => 24, "min-stock" => 16, "q4-consumption-b" => 72, "annual-consumption-c" => 288],
        ["name" => "Hepatitis C (HC antibody) tests of 25 strips", "unit" => "Box", "amc" => 20, "max-stock" => 24, "min-stock" => 16, "q4-consumption-b" => 72, "annual-consumption-c" => 288],
        ["name" => "RPR syphilis  rapid test kit of 25", "unit" => "Pk", "amc" => 10, "max-stock" => 12, "min-stock" => 8, "q4-consumption-b" => 36, "annual-consumption-c" => 144],
        ["name" => "Anti streptolysin O (ASO)", "unit" => "vial", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "H.pylori Ab test  of 25", "unit" => "box", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
    ],
    "Siemens dimension chemistry reagents, control and calibrator" => [
        ["name" => "Glucose flex of 1440", "unit" => "Cartilage", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "ALT of 240", "unit" => "Cartilage", "amc" => 1010, "max-stock" => 12.5, "min-stock" => 7.5, "q4-consumption-b" => 37.5, "annual-consumption-c" => 150],
        ["name" => "AST of 360", "unit" => "Cartilage", "amc" => 7.5, "max-stock" => 9.375, "min-stock" => 5.625, "q4-consumption-b" => 28.125, "annual-consumption-c" => 112],
        ["name" => "ALP of 360", "unit" => "Cartilage", "amc" => 7.5, "max-stock" => 9.375, "min-stock" => 5.625, "q4-consumption-b" => 28.125, "annual-consumption-c" => 112],
        ["name" => "Creatine of 480", "unit" => "Cartilage", "amc" => 5, "max-stock" => 6, "min-stock" => 4, "q4-consumption-b" => 18, "annual-consumption-c" => 72],
        ["name" => "BUN/urea of 480", "unit" => "Cartilage", "amc" => 5, "max-stock" => 6, "min-stock" => 4, "q4-consumption-b" => 18, "annual-consumption-c" => 72],
        ["name" => "Uric acid of 480", "unit" => "Cartilage", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Total protein of 480", "unit" => "Cartilage", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "UCFP of 80", "unit" => "Cartilage", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Total cholesterol of 480", "unit" => "Cartilage", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "HDL of 480", "unit" => "Cartilage", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "LDL  of 120", "unit" => "Cartilage", "amc" => 8, "max-stock" => 8.4, "min-stock" => 7.6, "q4-consumption-b" => 22.8, "annual-consumption-c" => 91],
        ["name" => "TG of 480", "unit" => "Cartilage", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Total bilirubin 480", "unit" => "Cartilage", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.95, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Direct bilirubin 320", "unit" => "Cartilage", "amc" => 0.75, "max-stock" => 0.7875, "min-stock" => 0.7125, "q4-consumption-b" => 2.3625, "annual-consumption-c" => 9],
        ["name" => "Alpha amylase of 240", "unit" => "Cartilage", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "HBA1c of 120", "unit" => "Cartilage", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "CK of 480", "unit" => "Cartilage", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 3],
        ["name" => "CK0MB of 120", "unit" => "Cartilage", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 8],
        ["name" => "LIP of 120", "unit" => "Cartilage", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.95, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Pancreatic amylase of 50 ml", "unit" => "bottle", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Albumin of 480", "unit" => "Cartilage", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "LDH of 480", "unit" => "Cartilage", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Quiklyte integrated multi sensor of 4", "unit" => "box", "amc" => 1.5, "max-stock" => 1.875, "min-stock" => 1.125, "q4-consumption-b" => 5.625, "annual-consumption-c" => 22],
        ["name" => "Calcium  of 480", "unit" => "Cartilage", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 6],
        ["name" => "Magnesium of 120", "unit" => "Cartilage", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Phosphate  480", "unit" => "Cartilage", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Salt bridge of 3*150", "unit" => "pck", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Check flex of 8", "unit" => "pk", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Printer paper of 4", "unit" => "pk", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Cuvete cartilage", "unit" => "pk", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Flush solution of 1000ml", "unit" => "bag", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "Sample dilution of 500ml", "unit" => "bottle", "amc" => 1.5, "max-stock" => 1.875, "min-stock" => 1.125, "q4-consumption-b" => 5.625, "annual-consumption-c" => 22],
        ["name" => "Dilution check of 50 ml", "unit" => "bottle", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Lyphochek chemistry assay control L1, L2 of 12 ", "unit" => "pack", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "Cardiac marker plus control L1, L2, L3", "unit" => "box", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Diabetes control (L1, L2)", "unit" => "Pk", "amc" => 2, "max-stock" => 2.5, "min-stock" => 1.5, "q4-consumption-b" => 7.5, "annual-consumption-c" => 30],
        ["name" => "Liquichek urine chemistry control L1, L2", "unit" => "Pk", "amc" => 1, "max-stock" => 1.25, "min-stock" => 0.75, "q4-consumption-b" => 3.75, "annual-consumption-c" => 15],
        ["name" => "Chem. I calibrato of6*2ml", "unit" => "Pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "Chem II calibrator ", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 0],
        ["name" => "Enzyme II calibrator(6*1.5ml)", "unit" => "Pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "Enzyme verifier of 6*2ml", "unit" => "pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "ALP calibrator(1,2,3) of  6*1ml", "unit" => "pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "ALB/TP calibrator of 6*2ml", "unit" => "pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "CHOL calibrator of 6*1ml", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "HDL calibrator of 6*1ml", "unit" => "pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "LDL calibrator", "unit" => "pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "Bilirubin calibrator of 2*L2 &2*L3", "unit" => "pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "HB1c calibrator of 5*2ml", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "CK/MB Calibrator", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Lipase calibrator", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Enzyme I calibrator of 4*1.5ml", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Urine & CSF calibrator of 10*4ml", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Quiklyte standard A  of 3*1000", "unit" => "pk", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],
        ["name" => "Quiklyte standard B of  3*300", "unit" => "PK", "amc" => 0.5, "max-stock" => 0.625, "min-stock" => 0.375, "q4-consumption-b" => 1.875, "annual-consumption-c" => 7],

    ],
    "CD4 and viral load" => [
        ["name" => "Fulcon  tube of 25", "unit" => "Pk", "amc" => 4, "max-stock" => 4.2, "min-stock" => 3.8, "q4-consumption-b" => 12.6, "annual-consumption-c" => 50],
        ["name" => "Micropipette tips yellow of (1*1000)", "unit" => "Bag       ", "amc" => 4, "max-stock" => 4.2, "min-stock" => 3.8, "q4-consumption-b" => 12.6, "annual-consumption-c" => 50],
        ["name" => "Micropipette tips blue of (1*1000)", "unit" => "Bag", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.9, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Facs presto cartilage", "unit" => "box", "amc" => 5, "max-stock" => 5.25, "min-stock" => 4.75, "q4-consumption-b" => 15.75, "annual-consumption-c" => 63],

    ],
    "Hormonalysis vidas reagent" => [
        ["name" => "AFP, 60 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "CA 125, 30 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "CA01503,30 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "CA 1909,30 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "CEA,30 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Etradiol, 60 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "FSH, 60 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "LH, 60  tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Testosterone II 30 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "FPSA , 30 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Progesterone, 60 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Prolactin ,60 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "TPSA , 60 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Total 250 OH vitamin D, 60 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 6],
        ["name" => "HS troponin I , 60 tests per kit", "unit" => "Kit", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 8],
        ["name" => "FT3, 60 tests per kit", "unit" => "Kit", "amc" => 3, "max-stock" => 3.75, "min-stock" => 2.25, "q4-consumption-b" => 11.25, "annual-consumption-c" => 45],
        ["name" => "FT4 , 60 tests per kit", "unit" => "Kit", "amc" => 3, "max-stock" => 3.75, "min-stock" => 2.25, "q4-consumption-b" => 11.25, "annual-consumption-c" => 45],
        ["name" => "TSH, 60 tests per kit", "unit" => "Kit", "amc" => 3, "max-stock" => 3.75, "min-stock" => 2.25, "q4-consumption-b" => 11.25, "annual-consumption-c" => 45],

    ],
    "Microbiology reagent and media" => [
        ["name" => "Crystal Violet soln  2% of 1L", "unit" => "bottle", "amc" => 0.5, "max-stock" => 0.525, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "Grams iodine 1% of 1L", "unit" => "bottle", "amc" => 0.5, "max-stock" => 0.525, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "Acetone Alc.50 % of 1L", "unit" => "bottle", "amc" => 0.5, "max-stock" => 0.525, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "Safranin 0.25% of 1L", "unit" => "bottle", "amc" => 0.5, "max-stock" => 0.525, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "WBC diluting fluid of 100 ml", "unit" => "bott", "amc" => 0.5, "max-stock" => 0.525, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "Immersion oil with refractive index 1.5 of 250 ml", "unit" => "bott", "amc" => 0.5, "max-stock" => 0.525, "min-stock" => 0.475, "q4-consumption-b" => 1.575, "annual-consumption-c" => 6],
        ["name" => "Heavy Duty Aluminium Foil 37.5 meter ", "unit" => "Roll ", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.9, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Disposable Sterile plastic loops (1µl)", "unit" => "Box ", "amc" => 2, "max-stock" => 2.1, "min-stock" => 1.9, "q4-consumption-b" => 6.3, "annual-consumption-c" => 25],
        ["name" => "Disposable Sterile plastic loops (2µl)", "unit" => "Box ", "amc" => 2, "max-stock" => 2.1, "min-stock" => 1.9, "q4-consumption-b" => 6.3, "annual-consumption-c" => 25],
        ["name" => "Disposable Sterile plastic loops,(10µl)", "unit" => "Box ", "amc" => 2, "max-stock" => 2.1, "min-stock" => 1.9, "q4-consumption-b" => 6.3, "annual-consumption-c" => 25],
        ["name" => "Pasteur Pipette of 500", "unit" => "pk", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.9, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "KOH 10%of 1000ml", "unit" => "Bottel", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 0],
        ["name" => "Surgical blood ", "unit" => "pk", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.9, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Amies Transport Media of 500 gm", "unit" => "Tin ", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Xylose Lysine Deoxycholate Agar of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 4],
        ["name" => "Stuart transport medium of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Thayer martin medium of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Simmons Citrate Agar, Dehydrated of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Transport media(carry blair) of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Triple Sugar Iron Agar of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "PYR reagent disc of 50", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Catalase reagent (3% H2O2)", "unit" => "2x5ml", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "GC Agar Base of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Isovitalex/Vitox Enrichment", "unit" => "Box ", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Kligler Iron Agar of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Bile esculin agar of 500 gm", "unit" => "tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Kovach’s Reagent of 100ml", "unit" => "bottle", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.9, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Mackonkey Agar( with lactose and crystal violet) of 500 gm", "unit" => "Tin", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.9, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Mannitol Salt Agar of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Motility (S.I.M) Medium of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Mueller – Hinton Agar of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Nutrient Agar of 500 gm", "unit" => "Tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Oxidase reagents 0.75ml with droppers", "unit" => "50x.75ml", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Rabbit Plasma, 1x3.5ml in pack", "unit" => "pack", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Sheep Blood Agar Base of 500 gm", "unit" => "tin", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.9, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Tiosulphate Citrate Bile Salt Agar (TCBS) agar of 500 gm", "unit" => "tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Tryptone Soya Agar of 500 gm", "unit" => "tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Urea 40% Solution(5x10ml)", "unit" => "pk", "amc" => 1, "max-stock" => 1.05, "min-stock" => 0.9, "q4-consumption-b" => 3.15, "annual-consumption-c" => 12],
        ["name" => "Urea Agar Base of 500 gm", "unit" => "tin", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Vitox media supplements with hydration 10x10ml fluid", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "VCNT inhibitor selective supplement of 10 vial", "unit" => "pk", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "X  and V factors", "unit" => "each", "amc" => 2, "max-stock" => 2.1, "min-stock" => 1.9, "q4-consumption-b" => 6.3, "annual-consumption-c" => 25],
    ],
    "Microbiology antibiotics discs" => [
        ["name" => "Amikacin of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Amoxicillin of 2µg ", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Meropenem of 30 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Amoxicillin/clavulanic acid of 30µg disk ", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Bacitracin of 100unit", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Cefazolin 30 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Cefepime of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Cefixime of 50µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Cefotaxime of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Cefotetan of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Cefoxitin of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Ceftazidime of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Ceftriaxone of 5µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Cefuroxine sodium of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Cephalothin of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Chloramphenicol of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Ciprofloxacin of 5µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Clarithromycin of 15µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Clindamycin of 5µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Sulphamthoxazole/trimethoprip 19:1", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Doxycycline of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Erythromycin of 15µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Gentamicin of 10µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Furazolidone of 100 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Imipenem of 10µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Methicillin (5 µg) disk", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Nalidixic acid of 30µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Nitrofurantoin of 300µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Norfloxacin of 10µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Novobiocin of 5 µg ", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Optochin discs (DD0001)", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Oxacillin of 1µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Penicillin G of 10units", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Piperacillin of 100µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Piperacillin0 tazobactam of 100/10 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Spectinomycin of 100 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Streptomycin of 10 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Tetracycline of 30 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 1, "annual-consumption-c" => 4],
        ["name" => "Ticarcillin of 75 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Tobramycin of 10 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Vancomycin of 30 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Streptomycin of 10 µg", "unit" => "cartridge", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],

    ],
    "Equipment" => [
        ["name" => "WBC manual counting chamber", "unit" => "each", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 2],
        ["name" => "Digital Thermometer", "unit" => "each", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 10],
        ["name" => "Dray Oven ", "unit" => "Each", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
        ["name" => "Microbiology Incubator large size (50 L)", "unit" => "each", "amc" => 0, "max-stock" => 0, "min-stock" => 0, "q4-consumption-b" => 0, "annual-consumption-c" => 1],
    ]
];

$drugListSepInhouse = [
    ["name" => "Acetazolamide - 250mg - Tablet", "type" => "Tablet"],
    ["name" => "Acetylsalicylic Acid - 300mg - Tablet", "type" => "Tablet"],
    ["name" => "Acetylsalicylic Acid - 81mg - Tablet( Enteric Coated)", "type" => "Tablet"],
    ["name" => "Acyclovir - 200mg/5ml - Oral Suspension", "type" => "120ml"],
    ["name" => "Acyclovir - 3% - Eye Ointment", "type" => "4.5gm"],
    ["name" => "Adenosine - 3mg/ml in 2ml Ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Adrenaline (Epinephrine) - 0.1% in 1ml ampoule - Injection", "type" => "Each"],
    ["name" => "Albendazole - 200mg - Tablet", "type" => "Tablet"],
    ["name" => "Aluminium Hydroxide + Magnesium Hydroxide + Simethicon - (225mg + 200mg + 50mg)/5ml - Suspension", "type" => "200ml"],
    ["name" => "Aluminium Hydroxide + Magnesium Trisilicate - (120mg + 250mg) - Tablet (Chewable)", "type" => "Tablet"],
    ["name" => "Aminophyline - 250mg/10ml in 10ml Ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Amiodarone - 100mg - Tablet", "type" => "Tablet"],
    ["name" => "Amitriptyline - 25mg - Tablet", "type" => "Tablet"],
    ["name" => "Amlodipine - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Amoxicillin - 125mg - Tablet (Dispersible)", "type" => "Tablet"],
    ["name" => "Amoxicillin - 125mg/5ml - Oral Suspension", "type" => "100ml"],
    ["name" => "Amoxicillin - 250mg - Capsule", "type" => "capsule"],
    ["name" => "Amoxicillin - 250mg/5ml - Oral Suspension", "type" => "100ml"],
    ["name" => "Amoxicillin - 500mg - Capsule", "type" => "capsule"],
    ["name" => "Amoxicillin + Clavulanic Acid - (125mg + 31.25mg)/5ml - Oral Suspension", "type" => "100ml"],
    ["name" => "Amoxicillin + Clavulanic Acid - 500mg + 125mg - Tablet (Film Coated)", "type" => "Tablet"],
    ["name" => "Amphotericin B - 50mg in vial - Powder for injection", "type" => "Vial"],
    ["name" => "Ampicillin Sodium - 500mg in Vial - Injection", "type" => "Vial"],
    ["name" => "Anti-Rho (D) Immune Globulin - 300mcg in 2ml Vial - Injection with 0.9% Sodium Chloride", "type" => "Ampoule"],
    ["name" => "Atenolol - 50mg - Tablet", "type" => "Tablet"],
    ["name" => "Atracurium Besylate - 10mg/ml in 5ml ampoule - Injection", "type" => "Each"],
    ["name" => "Atropine Sulphate - 0.50% - Eye Drop", "type" => "15ml"],
    ["name" => "Atropine Sulphate - 1% eye drop -", "type" => "15ml"],
    ["name" => "Atropine Sulphate - 1mg/ml in 1ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Atrovastatin - 20mg - Tablet", "type" => "Tablet"],
    ["name" => "Atrovastatin - 40mg - Tablet", "type" => "Tablet"],
    ["name" => "Azithromycin - 500mg - Tablet", "type" => "Tablet"],
    ["name" => "Azithromycine - 200mg/5ml - Oral Suspension", "type" => "15ml"],
    ["name" => "Benzhexol (Trihexyphenidyl HCL) - 2mg - Tablet", "type" => "Tablet"],
    ["name" => "Benzhexol (Trihexyphenidyl HCL) - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Bromazepam - 1.5mg - Tablet", "type" => "Tablet"],
    ["name" => "Bromazepam - 3mg - Tablet", "type" => "Tablet"],
    ["name" => "Bupivacaine - 0.5% in 10ml ampoule - Injection", "type" => "Each"],
    ["name" => "Calamine - 5% - Lotion", "type" => "Bottle"],
    ["name" => "Calcium Gluconate - 10% in 10ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Candesartan - 8mg - Tablet", "type" => "Tablet"],
    ["name" => "Carbamazepine - 100mg/5ml - Syrup", "type" => "100ml"],
    ["name" => "Carbamazepine - 200mg - Tablet", "type" => "Tablet"],
    ["name" => "Castor Oil - - Oral Solution", "type" => "60ml"],
    ["name" => "Cefixime - 400mg - Tablet", "type" => "Tablet"],
    ["name" => "Ceftazidime - 1g in vial - Powder for injection", "type" => "Each"],
    ["name" => "Ceftriaxone - 1gm in Vial - Injection", "type" => "Each"],
    ["name" => "Cephalexine - 125mg/5ml - Oral Suspension", "type" => "100ml"],
    ["name" => "Cephalexine - 500mg - Capsule", "type" => "capsule"],
    ["name" => "Cetrizine - 10mg - Tablet", "type" => "Tablet"],
    ["name" => "Chlorpheniramine Maleate - 2mg/5ml - Syrup", "type" => "100ml"],
    ["name" => "Chlorpheniramine Maleate - 4mg - Tablet", "type" => "Tablet"],
    ["name" => "Chlorpromazine HCL - 100mg - Tablet", "type" => "Tablet"],
    ["name" => "Cimetidine - 200mg/ml in 2ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Ciprofloxacin - 0.30% - Eye Drop", "type" => "5ml"],
    ["name" => "Ciprofloxacin - 2mg/ml in 100ml - Intravenous Infusion (as lactate)", "type" => "Each"],
    ["name" => "Ciprofloxacin - 500mg - Tablet", "type" => "Tablet"],
    ["name" => "Clarithromycin - 500mg - Tablet", "type" => "Tablet"],
    ["name" => "Clotrimazole - 1% - Cream", "type" => "20gm"],
    ["name" => "Clotrimazole - 100mg - Tablet (Vaginal)", "type" => "Tablet"],
    ["name" => "Cloxacillin Sodium - 125 mg/5 ml - Syrup", "type" => "Bottle"],
    ["name" => "Cloxacillin Sodium - 250mg - Capsule", "type" => "capsule"],
    ["name" => "Cloxacillin Sodium - 250mg/5ml - Oral Suspension", "type" => "100ml"],
    ["name" => "Dexamethasone - 0.10% - Eye Drop", "type" => "10ml"],
    ["name" => "Dexamethasone - 4mg/ml - Injection", "type" => "Ampoule"],
    ["name" => "Dextromethorphan Hydrobromide - 15mg/5ml - Syrup", "type" => "125ml"],
    ["name" => "Dextrose - 40% in 20ml - Intravenous Infusion", "type" => "Ampoule"],
    ["name" => "Diazepam - 5 mg/ml in 2ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Diazepam - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Diclofenac Sodium - 25mg/ml in 3ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Diclofenac Sodium - 50mg - Powder", "type" => "Sachet"],
    ["name" => "Diclofenac Sodium - 50mg - Tablet", "type" => "Tablet"],
    ["name" => "Digoxin - 0.25mg - Tablet", "type" => "Tablet"],
    ["name" => "Digoxin - 0.25mg/ml in 2ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Dimenhydrinate - 50mg - Tablet", "type" => "Tablet"],
    ["name" => "Dopamine Hydrochloride - 40mg/ml in 5ml Ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Doxycycline - 100mg - Capsule", "type" => "capsule"],
    ["name" => "Enalapril Maleate - 10mg - Tablet", "type" => "Tablet"],
    ["name" => "Enalapril Maleate - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Erythromycin Stearate - 250 mg - Tablet", "type" => "Tablet"],
    ["name" => "Esomeprazole - 40mg/5ml in Vial - Injection (Lypophlized)", "type" => "Each"],
    ["name" => "Felodipine - 10mg - Tablet", "type" => "Tablet"],
    ["name" => "Felodipine - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Ferrous Gluconate - 300mg - Tablet", "type" => "Tablet"],
    ["name" => "Ferrous Sulphate - 200mg/5ml - Syrup", "type" => "100ml"],
    ["name" => "Ferrous Sulphate + Folic Acid - (150mg + 0.5mg) - Tablet (enteric coated)", "type" => "Tablet"],
    ["name" => "Fluoxetine - 20mg - Capsule", "type" => "capsule"],
    ["name" => "Folic Acid - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Frusemide - 10mg/ml in 2ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Frusemide - 40mg - Tablet", "type" => "Tablet"],
    ["name" => "Gentamicin - 0.3% - Eye/Ear drop", "type" => "10 ml"],
    ["name" => "Gentamicin - 40mg/ml in 2ml Ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Glibenclamide - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Glycerin - 900mg - Suppository", "type" => "Suppository"],
    ["name" => "Haloperidol - 1.5mg - Tablet", "type" => "Tablet"],
    ["name" => "Haloperidol - 2mg - Tablet", "type" => "Tablet"],
    ["name" => "Haloperidol - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Haloperidol - 5mg/ml in 1ml Ampule - Injection", "type" => "Ampoule"],
    ["name" => "Halothane - 250 ml - Inhalation", "type" => "250ml"],
    ["name" => "Heparin Sulphate - 5000IU/ml in 1ml Ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Hydralazine - 20mg/ml in 1ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Hydrochlorothiazide - 25mg - Tablet", "type" => "Tablet"],
    ["name" => "Hydrocortisone Sodium Succinate - 50mg/ml in 2ml ampoule - Injection", "type" => "Each"],
    ["name" => "Hyoscine (Scopolamine) Butylbromide - 20mg/ml in 1ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Ibuprofen - 400mg - Tablet", "type" => "Tablet"],
    ["name" => "Icthamol - 10% - Topical Ointment", "type" => "20gm"],
    ["name" => "Imipramine - 25mg - Tablet", "type" => "Tablet"],
    ["name" => "Indomethacin - 100mg - Suppository", "type" => "Suppository"],
    ["name" => "Insulin Isophane Human - 100IU/ml in 10ml Vial - Injection(Suspension)", "type" => "Each"],
    ["name" => "Insulin Soluble Human - 100IU/ml in 10ml Vial - Injection(Solution)", "type" => "Each"],
    ["name" => "Insulin Zinc Suspension/Insulin Lente - 100 Units/ml - Injection", "type" => "Vial"],
    ["name" => "Insuline Isophane Biphasic (Soluble/Isophane Mixture) - (30 + 70)IU/ml in 10ml Vial - Injection (Suspension)", "type" => "Each"],
    ["name" => "Isoflurane - 250ml - Inhalation", "type" => "250ml"],
    ["name" => "Pancuronium Bromide - 2 mg/ml in 2ml Ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Paracetamol - 120mg/5ml - Syrup", "type" => "60ml"],
    ["name" => "Paracetamol - 125mg - Suppository", "type" => "Suppository"],
    ["name" => "Paracetamol - 500mg - Tablet", "type" => "Tablet"],
    ["name" => "Penicillin G, Benzanthin - 1.2 MIU - Injection", "type" => "Vial"],
    ["name" => "Penicillin G, Benzanthin - 2.4 MIU - Injection", "type" => "Vial"],
    ["name" => "Pethidine HCL - 50mg/ml in 1ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Phenobarbitone (Phenobarbital) - 100mg - Tablet", "type" => "Tablet"],
    ["name" => "Phenobarbitone (Phenobarbital) - 120mg/ml - Injection", "type" => "Ampoule"],
    ["name" => "Phenobarbitone (Phenobarbital) - 30mg - Tablet", "type" => "Tablet"],
    ["name" => "Phenytoin (Diphenhydantoin) Sodium - 250mg in Vial - Powder for injection", "type" => "Each"],
    ["name" => "Phenytoin (Diphenhydantoin) Sodium - 50mg - Tablet", "type" => "Tablet"],
    ["name" => "Pilocarpine HCL - 2% - Eye Drop", "type" => "15ml"],
    ["name" => "Potassium Chloride - 600mg - Tablet", "type" => "Tablet"],
    ["name" => "Praziquantel - 600mg - Tablet", "type" => "Tablet"],
    ["name" => "Prednisolone - 5 mg - Tablet", "type" => "Tablet"],
    ["name" => "Promethazine HCL - 25mg/ml in 2ml - Injection", "type" => "Ampoule"],
    ["name" => "Propofol - 10mg/ml in 20ml - Injection", "type" => "Ampoule"],
    ["name" => "Propranolol - 10mg - Tablet", "type" => "Tablet"],
    ["name" => "Propranolol - 40mg - Tablet", "type" => "Tablet"],
    ["name" => "Propylthiouracil - 50mg - Tablet", "type" => "Tablet"],
    ["name" => "Resperidone - 4mg - Tablet", "type" => "Tablet"],
    ["name" => "Risperidone - 4mg - Tablet", "type" => "Tablet"],
    ["name" => "Salbutamol (Albuterol) - 0.1mg/dose - Aerosol (Oral Inhalation)", "type" => "200metered doses"],
    ["name" => "Salbutamol (Albuterol) - 2mg/5ml - Syrup", "type" => "100ml"],
    ["name" => "Spironolactone - 25mg - Tablet", "type" => "Tablet"],
    ["name" => "Sulphamethoxazole + Trimethoprim - (400mg + 80mg)/5ml - Injection", "type" => "Ampoule"],
    ["name" => "Suxamethonium Chloride (Succinylcholine) - 50 mg/ml in 10ml Vial - Powder for injection", "type" => "Vial"],
    ["name" => "Tetanus Antitoxin (TAT), Equine - 1,500 IU/ml in 1ml Ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Tetracycline - 0.01 - Eye Ointment", "type" => "4gm"],
    ["name" => "Tetracycline - 1% - Eye Ointment", "type" => "Each"],
    ["name" => "Theophylline + Ephedrine - (120mg + 11mg) - Tablet", "type" => "Tablet"],
    ["name" => "Thiopental Sodium - 0.5 g - Powder for injection", "type" => "Vial"],
    ["name" => "Thyroxine Sodium - 0.05mg - Tablet", "type" => "Tablet"],
    ["name" => "Thyroxine Sodium - 0.1mg - Tablet", "type" => "Tablet"],
    ["name" => "Tramadol HCl - 50mg - Capsule", "type" => "capsule"],
    ["name" => "Tramadol HCl - 50mg/ml in 2ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Tropicamide - 0.01 - Eye Drop", "type" => "10ml"],
    ["name" => "Valsartan - 160mg - Tablet", "type" => "Tablet"],
    ["name" => "Verapamil - 40mg - Tablet", "type" => "Tablet"],
    ["name" => "Vitamin B Complex Preparations - - Tablet", "type" => "Tablet"],
    ["name" => "Vitamin B1 + Vitamin B6 + Vitamin B12 - (100mg + 200mg + 1000mcg) - Tablet", "type" => "Tablet"],
    ["name" => "Warfarin Sodium - 5mg - Tablet", "type" => "Tablet"],
    ["name" => "Vancomycin - 500mg - Injection", "type" => "Each"],
    ["name" => "Vancomycine - 1gm in Vial - Injection", "type" => "Each"],
    ["name" => "Vecuronium Bromide - 10 mg in vial - Powder for injection", "type" => "Each"],
    ["name" => "Vitamin B Complex Preparations - - Injection", "type" => "Ampoule"],
    ["name" => "Vitamin B12 - 100Âµg/ml;1000Âµg/ml in 1 ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Vitamin K1 (Phytomenadione) - 10mg/ml in 1ml ampoule - Injection", "type" => "Ampoule"],
    ["name" => "Water For Injection - 5ml - Injection", "type" => "Ampoule"],
    ["name" => "White Petrolatum - - Ointment", "type" => "1Kg"],
    ["name" => "Zinc Oxide - 0.15 - Ointment", "type" => "1Kg"],
];
