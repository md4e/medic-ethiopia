<?php
session_start();
spl_autoload_register(function ($class_name) {
    include '../classes/' . $class_name . '.php';
});

function session_handler()
{
    if (isset($_POST['submit'])) {
        $employeeID = $_POST['employeeID'];
        $employeePassword = $_POST['employeePassword'];

        if ($employeeID == 'ceo123' && $employeePassword == 'pass123') {
            $_SESSION['pID'] = 1;
        } else if ($employeeID == 'doc123' && $employeePassword == 'pass123') {
            $_SESSION['pID'] = 2;
        } else if ($employeeID == 'lab123' && $employeePassword == 'pass123') {
            $_SESSION['pID'] = 3;
        } else if ($employeeID == 'recp123' && $employeePassword == 'pass123') {
            $_SESSION['pID'] = 4;
        } else {
            header('Location: ../login.php');
        }
    }
    // if (isset($_GET['search_text']) && isset($_GET['card-no'])) {
    //     if (!isset($_SESSION['pID'])) {
    //         $_SESSION['pID'] = $_GET['card-no'];
    //     }
    // }
    // if (isset($_GET['action']) && ($_GET['action'] == 'end-session')) {
    //     // Removing session data
    //     if (isset($_SESSION["pID"])) {
    //         unset($_SESSION["pID"]);
    //     }
    // }
}
function show_patient_form($caller = null)
{
    show_patient($caller);
    $search_text = isset($_GET['search_text']) ? $_GET['search_text'] : null;
    echo '
    <form id="xxxx" data-parsley-validate class="form-horizontal form-label-left" method="post" action="./search.php?caller=' . $caller . '">
    <div class="item form-group x_panel" style="background-color:#333;color:#fff">
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

    if (isset($search_text)) {
        if (isset($_SESSION['search_result']) && sizeof($_SESSION['search_result']) == 1 && $_SESSION['search_result'][0] != '') {
            show_list_of_matching_patient($caller);
        } else {
            echo '<p class="h4 text-danger">No Patient mathing input <strong>' . $search_text . '</strong></p>';
            unset($_SESSION['search_result']);
        }
    }
    echo '</form>';
}

function show_list_of_matching_patient($caller = null)
{
    if ($caller == 'index-reception.php') {
        searchTableResultReception($caller);
    } else {
        searchTableResultDetail();
    }
}


function searchTableResultDetail()
{
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
          <td><a href="./session.php?card-no=' . Crypter::urlencode_encrypt($valueObj->patient_card_number) . '" class="btn btn-primary">';
        echo '<i class="fa fa-lock"></i> Open Journal ' . $valueObj->patient_card_number . '</a></td></tr>';
    }
    echo '
      </tbody>
    </table>
  </div>';
}

function searchTableResultReception($caller = null)
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
function show_patient($caller = null, $card_no = null)
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
        show_patient_reception($caller);
    } else {
        if ($caller == 'patient-list-triage.php') {
            show_patient_triage($card_no);
        }
        show_patient_detail($caller);
    }
}

function show_patient_detail($caller = null)
{
    if (isset($_SESSION['pID']) && isset($_SESSION['patient_card_number'])) {
        $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
        include_once($documentRootPath . "/includes/crypter.php");
        $patientSession = (object)$_SESSION['patient_card_number'];
        // var_dump($patientSession);
        echo '<div class="item form-group x_panel" style="border-radius:5px;">';
        echo '<div class="row" style="width:100%;padding:5px;">';
        echo '<div class="col-md-12 col-sm-12 col-xs-12" style="text-align:right;padding:0;">';
        if ($caller != null) {
            $caller = '&caller=' . $caller;
        }
        echo '<p><a href="./session.php?card-no-close=' . Crypter::urlencode_encrypt($patientSession->patient_card_number)  . $caller . '" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Close </a></p>';
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
        if ($_SESSION['pID'] <= 2)
            echo '<a href="./index_patient.php?card-no=' . Crypter::urlencode_encrypt($patientSession->patient_card_number)  . '" class="btn btn-sm btn-primary">Show detail</a>';
        echo '</div>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

function show_patient_reception($caller = null)
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

function show_patient_triage($card_number = null)
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
function useSelectiveTest()
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
function headerLinks($title = null, $dir = null)
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
    <!-- Custom Theme Style
    <link href="' . $dir . '/build/css/custom.min.css" rel="stylesheet"> -->
    <link href="' . $dir . '/build/css/custom.css" rel="stylesheet">';
}

function main_container_top_navigation()
{
    echo '
    <div class="main_container">
     <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index1.php" class="site_title">
                    <!-- <i class="fa fa-building-o"></i> --> <span>Zewditu
                        Hospital</span></a>
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
                    <h2>Dr. Name Lastname</h2>
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


    main_navigation();

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
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-md"></i>Dr. Name Lastname
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:;"> Profile</a>
                        <a class="dropdown-item" href="javascript:;">Help</a>
                        <a class="dropdown-item" href="../login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
function main_navigation()
{
    $nav = [
        0 => '<li ><a href="index_search.php?search-clean=true"><i class="fa fa-search text-info"></i>Patient Search</a></li>',
        1 => '<li ><a href="index-reception.php"><i class="fa fa-bullseye text-primary"></i>Reception</a></li>',
        2 => '<li ><a href="index-central-triage.php"><i class="fa fa-exchange text-primary"></i>Central Triage</a></li>',
        3 => '<li ><a href="index2.php"><i class="fa fa-plus text-danger"></i>Emergency</a></li>',
        4 => '<li ><a href="index3.php"><i class="fa fa-paper-plane text-primary"></i>OPD</a></li>',
        5 => '<li ><a href="index4.php"><i class="fa fa-exclamation-triangle text-warning"></i>Radiology</a></li>',
        6 => '<li ><a href="index5.php"><i class="fa fa-flask text-light"></i>Laboratory</a></li>',
        7 => '<li ><a href="index6.php"><i class="fa fa-book text-primary"></i>All Forms</a></li>',
        8 => '<li ><a href="index7.php"><i class="fa fa-users text-info"></i>All Patients</a></li>'
    ];

    $useNavIndex = [];
    if (isset($_SESSION['pID'])) {
        if ($_SESSION['pID'] == 1) {
            $useNavIndex = [0, 1, 2, 3, 4, 5, 6, 7, 8];
        } else if ($_SESSION['pID'] == 2) {
            $useNavIndex =   [0, 1, 2, 3, 4, 5, 6, 7, 8];
        } else if ($_SESSION['pID'] == 3) {
            $useNavIndex = [6];
        } else if ($_SESSION['pID'] == 4) {
            $useNavIndex = [1];
        }
    } else {
        $useNavIndex = [0, 1, 2, 3, 4, 5, 6, 7];
    }
    foreach ($useNavIndex as $key => $value) {
        echo $nav[$value];
    }
}
function include_js()
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

function patient_search()
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
    1=>"Dermatology",
    2=>"Dental",
    3=>"Rmopd",
    4=>"Rsopd",
    5=>"Cough Clinic",
    6=>"NRC",
    7=>"NSRC",
    8=>"Pallitive Care Clinic",
    9=>"Opthalmology Clinic",
    10=> "Physiotherapy Clinic",
    11=> "RGOPD",
    12=> "PNC/GRC",
    13=> "EPI",
    14=> "RGOPD",
    15=> "PMTCT",
    16=> "ART",
    17=> "TB Clinic",
    18=> "MINOR OR",
    19=> "DM Clinic",
    20=> "HPN Clinic",
    21=> "Micsalenous Clinic",
    22=> "Psychatric Clinic",
    23=> "Substance Abuse Clinic",
    24=> "Cervical Cancer Clinic",
    25=> "plastic Surgery Clinic",
    26=> "SRC",
    27=> "Pedatrics Clinic",
    28=> "NICU\HRC"
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
