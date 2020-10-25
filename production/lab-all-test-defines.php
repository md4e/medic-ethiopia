<?php
$verdict = [
    0 => ["Choose verdict", "background-color:white;color:black"],
    1 => ["Normal", "background-color:green;color:black"],
    2 => ["Low", "background-color:orange;color:black"],
    3 => ["High", "background-color:red;color:white"]
];
$chemistryLabTestUnitsArray = ["Unit", "Mg/dl", "lu/L", "Mcg/l", "Meq/l"];
$chemistryLabTestArray = [
    99 => ["name" => "ALL", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    0 => ["name" => "BLOOD GLUCOSE", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    1 => ["name" => "CREATININE",  "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [0.1, 0.5, 1.1]],
    2 => ["name" => "BUN/UREA",  "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 10, 50]],
    3 => ["name" => "SGOT",  "type" => "number", "fullname" => "", "unit" => "lu/L", "range" => [1, 0, 33]],
    4 => ["name" => "SGPT",  "type" => "number", "fullname" => "", "unit" => "lu/L", "range" => [1, 0, 33]],
    5 => ["name" => "ALP",   "type" => "number", "fullname" => "", "unit" => "lu/L", "range" => [1, 90, 306]],
    6 => ["name" => "GGT",   "type" => "number", "fullname" => "Gamma-glutamyl Transferase", "unit" => "lu/L", "range" => [1, 8, 78]],
    7 => ["name" => "SERUM AMYLAS", "type" => "number", "fullname" => "", "unit" => "lu/L", "range" => [1, 0, 100]],
    8 => ["name" => "TOTAL BILIRUBIN",  "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [0.1, 0.2, 1.1]],
    9 => ["name" => "URIC ACID",  "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [0.1, 2.5, 7]],
    10 => ["name" => "DIRECT BILIRUBIN", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [0.01, 0, 0.2]],
    11 => ["name" => "TOTAL PROTEIN", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 6, 8]],
    12 => ["name" => "ALBUMIN",  "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 3, 5]],
    13 => ["name" => "TOTAL CHOLESTROL", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 220]],
    14 => ["name" => "TRIGLYSERIDE", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 220]],
    15 => ["name" => "HDL",  "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 25, 58]],
    16 => ["name" => "LDL", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 200]],
    17 => ["name" => "T-CK", "type" => "number", "fullname" => "", "unit" => "Mcg/l", "range" => [1, 38, 120]],
    18 => ["name" => "CK-MD",  "type" => "number", "fullname" => "", "unit" => "Mcg/l", "range" => [1, 0, 3]],
    19 => ["name" => "CSF PROTEIN", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 95, 110]],
    20 => ["name" => "SODIUM(Na)", "type" => "number", "fullname" => "", "unit" => "Meq/l", "range" => [1, 137, 147]],
    21 => ["name" => "CALCIUM(Ca)",  "type" => "number", "fullname" => "", "unit" => "Meq/l", "range" => [0.1, 8.5, 10.5]],
    22 => ["name" => "POTASIUM(K)",  "type" => "number", "fullname" => "", "unit" => "Meq/l", "range" => [0.1, 2.5, 4.5]],
    23 => ["name" => "CHOLRIDE",  "type" => "number", "fullname" => "", "unit" => "Meq/l", "range" => [1, 98, 110]],
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

$serologyAndCoagulationTestArray = [
    0  => ["name" => "H-Pylori Ab", "type" => "number", "fullname" => $a0, "unit" => "Mg/dl", "range" => [1, 70, 115]],
    1  => ["name" => "H-Pylori Stool Ag", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    2  => ["name" => "HBs Ag", "type" => "number", "fullname" => $a2, "unit" => "Mg/dl", "range" => [1, 70, 115]],
    3  => ["name" => "HCV", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    4  => ["name" => "Serum HCG (Pregnancy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    5  => ["name" => "Widal (SH)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    6  => ["name" => "Widal (SO)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    7  => ["name" => "Porteus OX-19", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    8  => ["name" => "Rheumatoid Factor", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    9  => ["name" => "ASO", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    10 => ["name" => "RPR/VDRL", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    11 => ["name" => "C-reactive Protien", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    12 => ["name" => "Combus Test", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    13 => ["name" => "Anti-nucleate anitbody", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    14 => ["name" => "PT  (Coagulation) [10 - 12 seconds]", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 10, 12]],
    15 => ["name" => "PTT (Coagulation) [25 - 35 seconds]", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 25, 35]],
    16 => ["name" => "INR (Coagulation) [0.8 - 1.2] ", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0.8, 1.2]],
];

$serologyTestArray = [
    0  => ["name" => "H-Pylori Ab", "type" => "number", "fullname" => $a0, "unit" => "Mg/dl", "range" => [1, 70, 115]],
    1  => ["name" => "H-Pylori Stool Ag", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    2  => ["name" => "HBs Ag", "type" => "number", "fullname" => $a2, "unit" => "Mg/dl", "range" => [1, 70, 115]],
    3  => ["name" => "HCV", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    4  => ["name" => "Serum HCG (Pregnancy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    5  => ["name" => "Widal (S\'H\')", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    6  => ["name" => "Widal (S\'O\')", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    7  => ["name" => "Porteus OX-19", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    8  => ["name" => "Rheumatoid Factor", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    9  => ["name" => "ASO", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    10 => ["name" => "RPR/VDRL", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    11 => ["name" => "C-reactive Protien", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    12 => ["name" => "Combus\'s Test", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
    13 => ["name" => "Anti-nucleate anitbody", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 70, 115]],
];

$coagulationTestArray = [
    0 => ["name" => "PT", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 10, 12]],
    1 => ["name" => "PTT", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 25, 35]],
    2 => ["name" => "INR", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0.8, 1.2]],
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
    0 => "0",
    1 => "CRC (<strong>C</strong>yclic <strong>R</strong>edundancy <strong>C</strong>heck)",
    2 => "FFP (<strong>F</strong>resh <strong>F</strong>rozen <strong>P</strong>lasma)"
];
$bloodRequestFormOtherBloodComponentsArray = [
    "Platelets",
    "Cryoprecipitate",
];

$hematologyLabTestUnitsArray = ["Unit", "K/μL", "%", "M/μL", "g/dl", "fl", "Pg", "106cell/μL", "mm/hr"];

$hematologyTestArray = [
    0  => ["name" => "CBC", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [0, 0, 0], "Male" => [0, 0, 0]]],
    1  => ["name" => "WBC", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [0.001, 4.1, 10.9], "Male" => [0.001, 4.1, 10.9]]],
    2  => ["name" => "Lymphocyte", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 20, 45], "Male" => [1, 20, 45]]],
    3  => ["name" => "Eosinophil", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 1, 6], "Male" => [1, 1, 6]]],
    4  => ["name" => "Monocyte", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 2, 10], "Male" => [1, 2, 10]]],
    5  => ["name" => "Basophil", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [0.001, 0, 2], "Male" => [0.001, 0, 2]]],
    6  => ["name" => "Granulocyte", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 40, 75], "Male" => [1, 40, 75]]],
    7  => ["name" => "RBC", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [0.001, 4.2, 6.3], "Male" => [0.001, 4.2, 6.3]]],
    8  => ["name" => "Hemoglobin", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 12, 16], "Male" => [1, 14, 18]]],
    9  => ["name" => "Hematocrit", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 12, 16], "Male" => [1, 14, 18]]],
    10 => ["name" => "MVC", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 80, 97], "Male" => [1, 80, 97]]],
    11 => ["name" => "MCH", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 26, 32], "Male" => [1, 26, 32]]],
    12 => ["name" => "MCHC", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 31, 36], "Male" => [1, 31, 36]]],
    13 => ["name" => "Platelet", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 140, 440], "Male" => [1, 140, 440]]],
    14 => ["name" => "Recticlocyte", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 12, 16], "Male" => [1, 14, 18]]],
    15 => ["name" => "Recti#", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 12, 16], "Male" => [1, 14, 18]]],
    16 => ["name" => "ESR", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 0, 20], "Male" => [1, 0, 20]]],
    17 => ["name" => "Blood Parasite", "type" => "skip", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 0, 20], "Male" => [1, 0, 20]]],
    18 => ["name" => "Blood group & Rh Factor", "type" => "skip", "fullname" => "", "unit" => "Mg/dl", "range" => ["Female" => [1, 0, 20], "Male" => [1, 0, 20]]],


];
$hematologyTestSpecialArray = ["Blood group & Rh Factor" => $bloodRequestFormArray];
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
$bloodTestType = ["CRC", "FFP"];
$urineAnalysisWithMicroscopyTestArray = [
    0  => ["name" => "Leucocyte", "type" => "number", "fullname" => $a0, "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    1  => ["name" => "Nitrite", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    2  => ["name" => "Urobilinogen", "type" => "number", "fullname" => $a2, "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    3  => ["name" => "Protien", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    4  => ["name" => "pH", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    5  => ["name" => "Blood", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    6  => ["name" => "Specific gravity", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [0.001, 1.005, 1.025]],
    7  => ["name" => "Ketone", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    8  => ["name" => "Bilirubin", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    9  => ["name" => "Glucose", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    10 => ["name" => "WBC1 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    11 => ["name" => "RBC2 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    12 => ["name" => "EpithelialCell3 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    13 => ["name" => "Cast4 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    14 => ["name" => "MucusTrade5 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    15 => ["name" => "Bacteria6 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    16 => ["name" => "Crystals7 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    17 => ["name" => "Parasite8 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    18 => ["name" => "Other9 (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    19 => ["name" => "HCG1 (Pregnancy) (Microscopy)", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
];


$urineAnalysisTestArray = [
    0  => ["name" => "Leucocyte", "type" => "number", "fullname" => $a0, "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    1  => ["name" => "Nitrite", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    2  => ["name" => "Urobilinogen", "type" => "number", "fullname" => $a2, "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    3  => ["name" => "Protien", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    4  => ["name" => "pH", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    5  => ["name" => "Blood", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    6  => ["name" => "Specific gravity", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [0.001, 1.005, 1.025]],
    7  => ["name" => "Ketone", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    8  => ["name" => "Bilirubin", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]],
    9  => ["name" => "Glucose", "type" => "number", "fullname" => "", "unit" => "Mg/dl", "range" => [1, 0, 1000]]
];

$urineAnalysisTestMicroscopyArray = [
    "WBC1" => "WBC",
    "RBC2" => "RBC",
    "EpithelialCell3" => "Epithelial Cell",
    "Cast4" => "Cast",
    "MucusTrade5" => "Mucus trade",
    "Bacteria6" => "Bacteria",
    "Crystals7" => "Crystals",
    "Parasite8" => "Parasite",
    "Other9" => "Other",
    "HCG1" => "HCG (Pregnancy)",
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

$labTableToId = [
    'lab-serology-form' =>
    [
        'id' => 1,
        'name' => 'lab-serology-form',
        'data' => $serologyAndCoagulationTestArray,
        'url' => 'lab-serology-coagulations.php',
        'alias' => 'Serology & Coagulation'
    ],
    'lab-blood-form' =>
    [
        'id' => 2,
        'name' => 'lab-blood-form',
        'data' => $bloodTestType,
        'url' => 'lab-blood-request.php',
        'alias' => 'Blood Request and Blood Crossmatch'
    ],
    'lab-hematology-form' =>
    [
        'id' => 3,
        'name' => 'lab-hematology-form',
        'data' => $hematologyTestArray, 'url' =>
        'lab-hematology-request.php',
        'alias' => 'Hematology'
    ],
    'lab-chemistry-form' =>
    [
        'id' => 4,
        'name' => 'lab-chemistry-form',
        'data' => $chemistryLabTestArray,
        'url' => 'lab-chemistry-request.php',
        'alias' => 'Chemistry'
    ],
    'lab-urine-analysis-form' =>
    [
        'id' => 5,
        'name' =>
        'lab-urine-analysis-form',
        'data' => $urineAnalysisWithMicroscopyTestArray,
        'url' => 'lab-urine-analysis-examination.php',
        'alias' => 'Urine Examination'
    ]
];

$GLOBALS['labTableToId'] = $labTableToId;
