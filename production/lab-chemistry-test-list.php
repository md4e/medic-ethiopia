<?php
$verdict = [
    0 => ["Choose verdict", "background-color:white;color:black"],
    1 => ["Normal", "background-color:green;color:black"],
    2 => ["Low", "background-color:orange;color:black"],
    3 => ["High", "background-color:red;color:white"]
];
$chemistryLabTestUnitsArray = ["Unit", "Mg/dl", "lu/L", "Mcg/l", "Meq/l"];
$chemistryLabTestArray = [
    0 => ["name" => "BLOOD GLUCOSE", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    1 => ["name" => "CREATININE",  "fullname" => "", "unit" => "Mg/dl", "range" => [0.1, 0.5, 1.1]],
    2 => ["name" => "BUN/UREA",  "fullname" => "", "unit" => "Mg/dl", "range" => [1, 10, 50]],
    3 => ["name" => "SGOT",  "fullname" => "", "unit" => "lu/L", "range" => [1, 0, 33]],
    4 => ["name" => "SGPT",  "fullname" => "", "unit" => "lu/L", "range" => [1, 0, 33]],
    5 => ["name" => "ALP",   "fullname" => "", "unit" => "lu/L", "range" => [1, 90, 306]],
    6 => ["name" => "GGT",   "fullname" => "Gamma-glutamyl Transferase", "unit" => "lu/L", "range" => [1, 8, 78]],
    7 => ["name" => "SERUM AMYLAS", "fullname" => "", "unit" => "lu/L", "range" => [1, 0, 100]],
    8 => ["name" => "TOTAL BILIRUBIN",  "fullname" => "", "unit" => "Mg/dl", "range" => [0.1, 0.2, 1.1]],
    9 => ["name" => "URIC ACID",  "fullname" => "", "unit" => "Mg/dl", "range" => [0.1, 2.5, 7]],
    10 => ["name" => "DIRECT BILIRUBIN", "fullname" => "", "unit" => "Mg/dl", "range" => [0.01, 0, 0.2]],
    11 => ["name" => "TOTAL PROTEIN", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 6, 8]],
    12 => ["name" => "ALBUMIN",  "fullname" => "", "unit" => "Mg/dl", "range" => [1, 3, 5]],
    13 => ["name" => "TOTAL CHOLESTROL", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 220]],
    14 => ["name" => "TRIGLYSERIDE", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 220]],
    15 => ["name" => "HDL",  "fullname" => "", "unit" => "Mg/dl", "range" => [1, 25, 58]],
    16 => ["name" => "LDL", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 200]],
    17 => ["name" => "T-CK", "fullname" => "", "unit" => "Mcg/l", "range" => [1, 38, 120]],
    18 => ["name" => "CK-MD",  "fullname" => "", "unit" => "Mcg/l", "range" => [1, 0, 3]],
    19 => ["name" => "CSF PROTEIN", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 95, 110]],
    20 => ["name" => "SODIUM(Na)", "fullname" => "", "unit" => "Meq/l", "range" => [1, 137, 147]],
    21 => ["name" => "CALCIUM(Ca)",  "fullname" => "", "unit" => "Meq/l", "range" => [0.1, 8.5, 10.5]],
    22 => ["name" => "POTASIUM(K)",  "fullname" => "", "unit" => "Meq/l", "range" => [0.1, 2.5, 4.5]],
    23 => ["name" => "CHOLRIDE",  "fullname" => "", "unit" => "Meq/l", "range" => [1, 98, 110]],
];

$a0 = "This test measures the levels of Helicobacter pylori (H. pylori) antibodies in your blood. H. pylori are bacteria that can invade your gut. H. pylori infection is one of the major causes of peptic ulcer disease. This happens when inflammation caused by the bacteria affects the mucus coating of your stomach or duodenum, the first section of your small intestine. This leads to sores on this lining and is called peptic ulcer disease.";
$a1 = "";
$a2 = "This test looks for hepatitis B surface antigens in your blood. The test is used to find out whether you have a recent or long-standing infection from the hepatitis B virus (HBV). HBV has proteins called antigens on its surface that cause your immune system to make antibodies. Hepatitis B surface antigens can be found in your blood within several weeks after the infection starts. They are one of the earliest signs of a hepatitis B infection. HBV is one of 5 hepatitis viruses. The others are hepatitis A, C, D, and E. Most hepatitis infections are caused by these 5 viruses. HBV is spread through blood, seminal fluid, and vaginal secretions. It can take several months to develop symptoms of hepatitis B after you become infected. The virus causes an infection in the liver. In most cases, this virus clears up on its own within 6 months. But in a small portion of adults and a larger portion of children, the virus does not go away. This is especially true for newborns. This is called having a chronic infection. It may lead to liver cell damage; scarring, or cirrhosis; or liver cancer. Hepatitis B surface antigens are an early sign of an acute infection, and they are also present during chronic, or long-term, infection.";
$a3 = "";
$a4 = "";
$a5 = "";
$a6 = "";
$a7 = "";
$a8 = "";
$a9 = "";
$a10 = "";
$a11 = "";
$a12 = "";
$a13 = "";


$serologyTestArray = [
    0  => ["name" => "H-Pylori Ab", "fullname" => $a0, "unit" => "Mg/dl", "range" => [1, 70, 115]],
    1  => ["name" => "H-Pylori Stool Ag", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    2  => ["name" => "HBs Ag", "fullname" => $a2, "unit" => "Mg/dl", "range" => [1, 70, 115]],
    3  => ["name" => "HCV", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    4  => ["name" => "Serum HCG (Pregnancy)", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    5  => ["name" => "Widal (S'H')", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    6  => ["name" => "Widal (S'O')", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    7  => ["name" => "Porteus OX-19", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    8  => ["name" => "Rheumatoid Factor", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    9  => ["name" => "ASO", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    10 => ["name" => "RPR/VDRL", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    11 => ["name" => "C-reactive Protien", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    12 => ["name" => "Combus's Test", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    13 => ["name" => "Anti-nucleate anitbody", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
];

$coagulationTestArray = [
    0 => ["name" => "PT", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 10, 12]],
    1 => ["name" => "PTT", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 25, 35]],
    2 => ["name" => "INR", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0.8, 1.2]],
];


$bloodRequestFormArray = [
    0 => "Choose blood group & Rh-factor",
    1 => "A Rh+",
    2 => "B Rh+",
    3 => "AB Rh+",
    4 => "O Rh+",
    5 => "A Rh-",
    6 => "B Rh-",
    7 => "AB Rh-",
    8 => "O Rh-",
];
$bloodRhFactorArray = [
    0 => "Rh Factor",
    1 => "Rh+",
    2 => "Rh-",
];

$bloodGroupArray = [
    0 => "Blood group",
    1 => "A",
    2 => "B",
    3 => "AB",
    4 => "O",
];

$bloodRequestFormCrcAndFfpArray = [
     0=>"0",
     1=>"CRC (<strong>C</strong>yclic <strong>R</strong>edundancy <strong>C</strong>heck)",
     2=>"FFP (<strong>F</strong>resh <strong>F</strong>rozen <strong>P</strong>lasma)"
 ];
$bloodRequestFormOtherBloodComponentsArray = [
    "Platelets",
    "Cryoprecipitate",
];

$hematologyLabTestUnitsArray = ["Unit", "K/μL", "%", "M/μL", "g/dl", "fl", "Pg", "106cell/μL", "mm/hr"];

$hematologyTestArray = [
    0  => ["name" => "CBC", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[0, 0, 0],"Male"=>[0, 0, 0]]],
    1  => ["name" => "WBC", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[0.001, 4.1, 10.9],"Male"=>[0.001, 4.1, 10.9]]],
    2  => ["name" => "Lymphocyte", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 20, 45],"Male"=>[1, 20, 45]]],
    3  => ["name" => "Eosinophil", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 1, 6],"Male"=>[1, 1, 6]]],
    4  => ["name" => "Monocyte", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 2, 10],"Male"=>[1, 2, 10]]],
    5  => ["name" => "Basophil", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[0.001, 0, 2],"Male"=>[0.001, 0, 2]]],
    6  => ["name" => "Granulocyte", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1,40, 75],"Male"=>[1,40, 75]]],
    7  => ["name" => "RBC", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[0.001, 4.2, 6.3],"Male"=>[0.001, 4.2, 6.3]]],
    8  => ["name" => "Hemoglobin", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 12, 16],"Male"=>[1, 14, 18]]],
    9  => ["name" => "Hematocrit", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 12, 16],"Male"=>[1, 14, 18]]],
    10 => ["name" => "MVC", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 80, 97],"Male"=>[1, 80, 97]]],
    11 => ["name" => "MCH", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 26, 32],"Male"=>[1, 26, 32]]],
    12 => ["name" => "MCHC", "fullname" => "", "unit" => "Mg/dl", "range" =>["Female"=>[1, 31, 36],"Male"=>[1, 31, 36]]],
    13 => ["name" => "Platelet", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 140, 440],"Male"=>[1, 140, 440]]],
    14 => ["name" => "Recticlocyte", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 12, 16],"Male"=>[1, 14, 18]]],
    15 => ["name" => "Recti#", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 12, 16],"Male"=>[1, 14, 18]]],
    16 => ["name" => "ESR", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female"=>[1, 0, 20],"Male"=>[1, 0, 20]]],
];
$hematologyTestSpecialArray = ["Blood group & Rh Factor"=>$bloodRequestFormArray];
$hematologyTestOtherSpecialArray = ["Blood Parasite"];


$negativePositive = [
    0 => ["Choose verdict", "background-color:white;color:black"],
    1 => ["Negative", "background-color:green;color:black"],
    2 => ["Positive", "background-color:red;color:white"]
];
$pH = [
    0 => ["Choose verdict", "background-color:white;color:black"],
    1 => ["Alkaline", "background-color:#000099;color:white"],
    2 => ["Basic", "background-color:green;color:white"],
    3 => ["Acidic", "background-color:#CC0000;color:white"]
];

$urineAnalysisTestArray = [
    0  => ["name" => "Leucocyte","fullname" => $a0, "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    1  => ["name" => "Nitrite", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    2  => ["name" => "Urobilinogen", "fullname" => $a2, "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    3  => ["name" => "Protien","fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    4  => ["name" => "pH", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    5  => ["name" => "Blood","fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    6  => ["name" => "Specific gravity","fullname" => "", "unit" => "Mg/dl", "range" => [0.001, 1.005, 1.025]],
    7  => ["name" => "Ketone", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    8  => ["name" => "Bilirubin", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    9  => ["name" => "Glucose","fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]]
];

$urineAnalysisTestMicroscopyArray = [
    1 => "WBC",
    2 => "RBC",
    3 => "Epithelial Cell",
    4 => "Cast",
    5 => "Mucus trade",
    6 => "Bacteria",
    7 => "Crystals",
    8 => "Parasite",
    9 => "Other",
    10 => "HCG (Pregnancy)",
];

$oxygenDeviceAirArray = [
    "A" => "Atmospheric",
    "N" => "Nasal Cannulae",
    "FM" => "Face Mask",
    "RM" => "Reservoir Mask",
    "TM" => "Trachcotomy Maks",
    "CPAP" => "CPAP system",
    "OTH" => "Other device"
];