<?php
function include_link()
{
    echo '    <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- starrr -->
        <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">';
}
function include_js()
{
    echo '   <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
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
        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>';
}

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
