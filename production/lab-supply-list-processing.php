<?php
include_once "./config.php";
headerLinks("Order Sheet");
if (isset($_GET) && isset($_GET['supply-name']) && isset($_GET['supply-id'])) {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . ("://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "");
    $get_array = [];
    parse_str(parse_url($actual_link, PHP_URL_QUERY), $get_array);

    $supply = new MeLabSupplyList((int)$get_array['supply-id']);
    $supply->setName($get_array['supply-name']);
    $supply->setCurrentAmount((float)$get_array['supply-amc']);
    $supply->setMaxStock((float)$get_array['supply-maxStock']);
    $supply->setMinStock((float)$get_array['supply-minStock']);
    $supply->setQ4ConsumptionB((float)$get_array['supply-q4b']);
    $supply->setAnnualConsumptionC((float)$get_array['supply-ac']);
    $supply->setCreatedOn(date("d/m/Y H:i:s"));
    $supply->updateCurrent();
    header('Refresh:2; url=./lab-supply-list.php');
    echo '<p class="h3 text-success">Supply information updated successfully!<br>';
    echo '<style>
    @keyframes blink {50% { color: transparent }}
.loader__dot { animation: 1s blink infinite }
.loader__dot:nth-child(2) { animation-delay: 250ms }
.loader__dot:nth-child(3) { animation-delay: 500ms }

    </style>';
    echo '<div class="loader h3 text-success">Redirecting to Labratory Supply List <span class="loader__dot">.</span><span class="loader__dot h3 text-success">.</span><span class="loader__dot">.</span></div>';
    echo '</p>';
}
