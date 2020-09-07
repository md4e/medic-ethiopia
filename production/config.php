<?php
function headerLinks($title = null,$dir=null)
{
    if($dir == null)
    {
        $dir="..";
    }
    echo '
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="'. $dir .'/images/flag.ico">
    <title>' . $title . '</title>

    <!-- Bootstrap -->
    <link href="'. $dir .'/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="'. $dir .'/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="'. $dir .'/build/css/custom.min.css" rel="stylesheet">';

    // echo '    <!-- Bootstrap -->
    //     <link href="'. $dir .'/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    //     <!-- Font Awesome -->
    //     <link href="'. $dir .'/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    //     <!-- NProgress -->
    //     <link href="'. $dir .'/vendors/nprogress/nprogress.css" rel="stylesheet">
    //     <!-- iCheck -->
    //     <link href="'. $dir .'/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    //     <!-- bootstrap-wysiwyg -->
    //     <link href="'. $dir .'/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    //     <!-- Select2 -->
    //     <link href="'. $dir .'/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    //     <!-- Switchery -->
    //     <link href="'. $dir .'/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    //     <!-- starrr -->
    //     <link href="'. $dir .'/vendors/starrr/dist/starrr.css" rel="stylesheet">
    //     <!-- bootstrap-daterangepicker -->
    //     <link href="'. $dir .'/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">';
}
function main_container_top_navigation()
{
    echo '
    <div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index.php" class="site_title">
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
                        <li><a href="index1.php"><i class="fa fa-dashboard"></i>DASHBOARD</a></li>
                        <li style="background-color:red;font-weight:bold"><a href="index2.php" style="font-weight:bold;"><i class="fa fa-plus h2"></i>EMERGENCY</a></li>
                        <li style="background-color:#2565AE;font-weight:bold"><a href="index3.php" style="font-weight:bold;"><i class="fa fa-paper-plane text-primary"></i>OPD</a></li>
                        <li style="background-color:yellow;font-weight:bold"><a href="index4.php" style="font-weight:bold;;color:black"><i class="fa fa-exclamation-triangle"></i>RADIOLOGY</a></li>
                        <li style="background-color:;font-weight:bold"><a href="index5.php" style="font-weight:bold;"><i class="fa fa-flask text-light"></i>LABORATORY</a></li>
                        <li style="background-color:;font-weight:bold"><a href="index6.php" style="font-weight:bold;"><i class="fa fa-book text-primary"></i>M-FORMS</a></li>
                        <li style="background-color:;font-weight:bold"><a href="index7.php" style="font-weight:bold;"><i class="fa fa-users text-info"></i>ALL PATIENTS</a></li>
                    </ul>
                </div>
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
<!-- /top navigation -->
    ';
}
function include_js()
{
    echo '
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Parsley -->
        <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>';
    /*
                <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../vendors/iCheck/icheck.min.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap-wysiwyg -->
        <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
        <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="../vendors/google-code-prettify/src/prettify.js"></script>
        <!-- jQuery Tags Input -->
        <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
        <!-- Switchery -->
        <script src="../vendors/switchery/dist/switchery.min.js"></script>
        <!-- Select2 -->
        <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
        <!-- Parsley -->
        <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
        <!-- Autosize -->
        <script src="../vendors/autosize/dist/autosize.min.js"></script>
        <!-- jQuery autocomplete -->
        <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
        <!-- starrr -->
        <script src="../vendors/starrr/dist/starrr.js"></script>

         */
}

function patient_search()
{
    echo '
    <form id="xxxx" data-parsley-validate class="form-horizontal form-label-left">
    <div class="item form-group">
        <label for="card-number" class="col-form-label col-md-3 col-sm-3 label-align">Card No.</label>
        <div class="col-md-6 col-sm-6">

            <div class="input-group" method="post" action="paitent-search.php">
                <input id="card-number" name="card-number" placeholder="Enter Patient by Card No." type="text" class="form-control" required="required">
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
   0 => "Choose your hospital",
   1036 => "Addis Ababa - Zeweditu Hospital",
1000 => "Addis Ababa - Addis Ababa Fistula Hospital",
1001 => "Addis Ababa - ALERT",
1002 => "Addis Ababa - Bethel Teaching General Hospital",
1003 => "Addis Ababa - Amin General Hospital",
1004 => "Addis Ababa - Addis General Hospital [2]",
1005 => "Addis Ababa - Addis Hiwot Plc",
1006 => "Addis Ababa - Anania Mothers and Children Specialized Medical Center",
1007 => "Addis Ababa - Armed Forces General Hospital",
1008 => "Addis Ababa - Bella Defense Referral Hospital",
1009 => "Addis Ababa - Besegah Mother and Child Health Hospitals",
1010 => "Addis Ababa - Brass Mother and Child Health Hospital",
1011 => "Addis Ababa - Dagmawi Minilik Hospital",
1012 => "Addis Ababa - DBalch Hospital",
1013 => "Addis Ababa - Dinberua Hospital",
1014 => "Addis Ababa - Ethio Tebib Hospital",
1015 => "Addis Ababa - Federal Police Referral Hospital",
1016 => "Addis Ababa - Girum General Hospital",
1017 => "Addis Ababa - Hawassa Alatyon Hospital",
1018 => "Addis Ababa - Hayat Hospital",
1019 => "Addis Ababa - ICMC General Hospital CMC",
1020 => "Addis Ababa - Kadisco General Hospital [3]",
1021 => "Addis Ababa - Landmark General Hospital",
1022 => "Addis Ababa - MyungSung Christian Medical Centre/Korean Hospital/MCM General Hospital",
1023 => "Addis Ababa - Nordic Medical Center",
1024 => "Addis Ababa - Novocare American Clinic [4]",
1025 => "Addis Ababa - Ras Desta Damitew Hospital",
1026 => "Addis Ababa - Saint Gabriel General Hospital[5]",
1027 => "Addis Ababa - Shedeho Higher Clinic Dr Belaynew Mogess",
1028 => "Addis Ababa - St. Paulos Hospital",
1029 => "Addis Ababa - St. Yared General Hospital",
1030 => "Addis Ababa - Tibebu Hospital",
1031 => "Addis Ababa - Tikur Anbesa Specialized Hospital(TASH)",
1032 => "Addis Ababa - Tirunesh Beijing General Hospital",
1033 => "Addis Ababa - Tzna General Hospital",
1034 => "Addis Ababa - Yearrer hospital",
1035 => "Addis Ababa - Zenbaba General Hospital",
1037 => "Adama - Sr. Aklesia Memorial Hospital",
1038 => "Adama - Adama General Hospital & Medical College",
1039 => "Adama - Haile Mariam Hospital & Medical College",
1040 => "Bahir Dar - Bahir Dar Mini-fistula Hospital",
1041 => "Bahir Dar - Felge Hiwot Hospital",
1042 => "Bahir Dar - Gamby Teaching Hospital Clinic",
1043 => "Bahir Dar - Universal Clinic",
1044 => "Bahir Dar - Adinas Clinic",
1045 => "Desse - Boru Meda Hospital",
1046 => "Desse - Dessie Hospital",
1047 => "Desse - selam hospital",
1048 => "Desse - ethio hospital",
1049 => "Desse - bate hospital",
1050 => "Desse - Tossa Hospital",
1051 => "Gondar - University of Gondar Hospital",
1052 => "Gondar - Ibex Hospital",
1053 => "Gondar - Harar",
1054 => "Gondar - Harar General Hospital",
1055 => "Gondar - Hiwot fana specialized University hospital",
1056 => "Hawassa - Adare Hospital",
1057 => "Hawassa - Alatiyon Hospital",
1058 => "Hawassa - Asher Primary Hospital",
1059 => "Hawassa - Awassa Referral Hospital",
1060 => "Hawassa - Bete Abrham Primary Hospital",
1061 => "Hawassa - Kibru Primary Hospital",
1062 => "Hawassa - Yanet Internal Medicine Specialized Center",
1063 => "Somali Region - Jig-jiga University Referral Hospital",
1064 => "Somali Region - Karamara Hospital",
1065 => "Somali Region - Dagahbour General Hospital",
1066 => "Somali Region - Gode General Hospital",
1067 => "Somali Region - Qabri Dahare General Hospital",
1068 => "Somali Region - Warder General Hospital",
1069 => "Somali Region - Filtu General Hospital",
1070 => "Somali Region - Hargelle General Hospital",
1071 => "Somali Region - Sitti General Hospital",
1072 => "Tigray - Adigrat Hospital",
1073 => "Tigray - Ayder Referral Hospital",
1074 => "Tigray - Lemelem Karl Hospital",
1075 => "Tigray - Mekelle Hospital",
1076 => "Tigray - St. Mary Hospital",
1077 => "Tigray - Quiha Hospital",
1078 => "Tigray - Sihul Hospital",
1079 => "Tigray - Abiadi Hospital",
1080 => "Tigray - Wukro Hospital",
1081 => "Tigray - korem Hospital",
1082 => "Tigray - Mearig Hospital/dansha",
1083 => "Tigray - Humera Hospital",
1084 => "Tigray - Alamata Hospital",
1085 => "Tigray - Adwa Hospital",
1086 => "Tigray - Aksum University Referral Hospital",
1087 => "Wolayta - Dubbo Catholic Hospital",
1088 => "Wolayta - Soddo Christhian Hospital",
1089 => "Wolayta - Soddo General Hospital",
1090 => "Wolayta - Soddo University Hospital",
9999 => "Other"];