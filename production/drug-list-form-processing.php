<?php
include_once "./config.php";
headerLinks("Order Sheet");
if (isset($_GET) && isset($_GET['drug-name']) && isset($_GET['drug-type'])) {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . ("://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "");
    $get_array = [];
    parse_str(parse_url($actual_link, PHP_URL_QUERY), $get_array);
    $id = $get_array['drug-id'];
    $name = $get_array['drug-name'];
    $type = $get_array['drug-type'];
    $quantity = $get_array['drug-quantity'];
    if ($id == 'new') {
        $drug = new MeDrugListInhouse();
        $drug->setName($name);
        $drug->setType($type);
        $drug->setEmplyeeId('000001');
        $drug->setQuantity($quantity);
        $drug->setStatus("limited");
        $drug->insert();
    } else {
        $drug = new MeDrugListInhouse((int)$id);
        $drug->setName($name);
        $drug->setType($type);
        $drug->setQuantity($quantity);
        $drug->updateCurrent();
    }

    header('Refresh:4; url=./index8.php');
    echo '<p class="h3 text-success">Drug information updated successfully!<br>';
    echo $name . '<br>';
    echo $type . '<br>';
    echo $quantity . '<br>';
    echo '<style>
    @keyframes blink {50% { color: transparent }}
.loader__dot { animation: 1s blink infinite }
.loader__dot:nth-child(2) { animation-delay: 250ms }
.loader__dot:nth-child(3) { animation-delay: 500ms }

    </style>';
    echo '<div class="loader h3 text-success">Redirecting to Drug Admistration Page <span class="loader__dot">.</span><span class="loader__dot h3 text-success">.</span><span class="loader__dot">.</span></div>';
    echo '</p>';
}
