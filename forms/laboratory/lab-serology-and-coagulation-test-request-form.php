<?php
include_once "./lab-chemistry-test-list.php";
include_once "../../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../../images/flag.ico">
<meta charset="utf-8">
    <title>Lab:Serology</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php headerInfo("Lab: Serology & Coagulation Test Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Lab: Serology & Coagulation Test Form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style-blood-lab">
                    <div class="form-group row">
                        <label for="patient-id" class="col-4 col-form-label">Patient ID</label>
                        <div class="col-4">
                            <input id="patient-id" name="patient-id" placeholder="Patient001" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-date" class="col-4 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="serology-coagulation-sheet-date" name="serology-coagulation-sheet-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-time" class="col-4 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="serology-coagulation-sheet-time" name="serology-coagulation-sheet-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-specimen" class="col-4 col-form-label">Type of Specimen</label>
                        <div class="col-8">
                            <input id="serology-coagulation-sheet-specimen" name="serology-coagulation-sheet-specimen" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-specimen-collection" class="col-4 col-form-label">Type of Specimen Collection</label>
                        <div class="col-3">
                            <input id="serology-coagulation-sheet-specimen-collection" name="serology-coagulation-sheet-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                        <label for="serology-coagulation-sheet-result-release" class="col-3 col-form-label">Time of result release</label>
                        <div class="col-2">
                            <input id="serology-coagulation-sheet-specimen-collection-time" name="serology-coagulation-sheet-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="5" style="border:1px solid black;text-align:center; background-color:black; color:white">SEROLOGY</th>
                                    </tr>
                                    <tr>
                                        <td scope="col" style="border:1px solid black;;font-weight:bold">TYPE OF TEST</th>
                                        <td scope="col" colspan="4" style="border:1px solid black;;font-weight:bold">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($serologyTestArray as $key => $value) {
                                        //echo '<tr><td class="list-td"><a href="#" title="' . $value['fullname'] . '">' . $value['name'] . '</a></td>';
                                        echo '<tr><td class="list-td">' . $value['name'] . '</td>';
                                        echo '<td class="list-td"><input id="serology-test-' . $key . '" name="serology-test-' . $key . '" type="number" min="' . $value['range'][1] . '" step="' . $value['range'][0] . '" max=' . $value['range'][2] . ' class="form-control" required="required"></td>';
                                        // echo '<td class="list-td"><select id="chem-units" name="chem-units" class="custom-select" required="required">';
                                        // foreach ($chemistryLabTestUnitsArray as $key2 => $value2) {
                                        //     echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                        // }
                                        // echo '</select>';
                                        // echo '</td>';
                                        echo '<td class="list-td">
                                            <select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                        foreach ($verdict as $key3 => $value3) {
                                            echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                        }
                                        echo '</select>';
                                        echo '</td>';
                                        echo '<td class="list-td">Range not specified</td>';
                                        //echo '<td class="list-td">' . $value['range'][1] . ' - ' . $value['range'][2] . ' ' . $value['unit'] . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="5" style="border:1px solid black;text-align:center; background-color:black; color:white">COAGULATION TEST</th>
                                    </tr>
                                    <tr>
                                        <td scope="col" style="border:1px solid black;font-weight:bold">TYPE OF TEST</td>
                                        <td scope="col" colspan="2" style="border:1px solid black;;font-weight:bold">RESULT (verdict and Reference Range (minimum - maximum) </td>
                                        <td scope="col" class="list-td">Equipment ID: <br><input id="coagulation-test-equipment-id" name="coagulation-test-equipment-id" type="number" class="form-control" required="required"></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($coagulationTestArray as $key => $value) {
                                        //echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
                                        echo '<tr><td class="list-td">' . $value['name'] . '</td>';
                                        echo '<td class="list-td"><input id="coagulation-test-' . $key . '" name="coagulation-test-' . $key . '" type="number" min="' . $value['range'][1] . '" step="' . $value['range'][0] . '" max=' . $value['range'][2] . ' class="form-control" required="required"></td>';
                                        // echo '<td class="list-td"><select id="chem-units" name="chem-units" class="custom-select" required="required">';
                                        // foreach ($chemistryLabTestUnitsArray as $key2 => $value2) {
                                        //     echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                        // }
                                        // echo '</select>';
                                        // echo '</td>';
                                        echo '<td class="list-td">
                                            <select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                        foreach ($verdict as $key3 => $value3) {
                                            echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                        }
                                        echo '</select>';
                                        echo '</td>';
                                        $second = "";
                                        if ($value['name'] !== "INR") {
                                            $second = " SEC";
                                        }
                                        echo '<td class="list-td">' . $value['range'][1] . ' - ' . $value['range'][2] . $second . '</td>
                                            </tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12  all-form-style-blood-lab">
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <div class="col-12" style="text-align: right;">
                                    <button name="submit" type="submit" class="btn btn-lg btn-danger" style="padding:1em;">Save Serology & Coagulations Results</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <footer>
            <?php footer(); ?>
        </footer>
    </main>

</body>

</html>