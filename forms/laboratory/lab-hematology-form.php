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
    <title>Lab:Hematology</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php headerInfo("Lab: Hematology Request Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Lab: Hematology Request Form</p>
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
                        <label for="hematology-request-form-date" class="col-2 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="hematology-request-form-date" name="hematology-request-form-date" type="date" class="form-control" required="required">
                        </div>

                        <label for="hematology-request-form-time" class="col-2 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="hematology-request-form-time" name="hematology-request-form-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hematology-request-form-sample" class="col-2 col-form-label">Type of Sample</label>
                        <div class="col-4">
                            <input id="hematology-request-form-sample" name="hematology-request-form-sample" type="text" class="form-control" required="required">
                        </div>
                        <label for="hematology-request-form-sample-equipment" class="col-2 col-form-label">Equipment ID</label>
                        <div class="col-4">
                            <?php
                            echo '<select id="hematology-request-form-sample-equipment" name="hematology-request-form-sample-equipment" class="custom-select" required="required">';
                            echo '<option value="unknown">Choose Equipment</option>';
                            for ($i = 10000; $i < 50000; $i += 1000) {
                                echo '<option value="' . $i . '">ZMRH-EQP-' . $i . '</option>';
                            }
                            echo '<option value="10000000">Not listed</option>';
                            echo '</select>';
                            ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                    <tr>
                                        <th scope="col" style="border:1px solid black;">TYPE OF TEST</th>
                                        <th scope="col" colspan="3" style="border:1px solid black;">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($hematologyTestArray as $key => $value) {
                                        echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
                                        echo '<td class="list-td"><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="number" min="' . $value['range']['Female'][1] . '" step="' . $value['range']['Female'][0] . '" max=' . $value['range']['Male'][2] . ' class="form-control" required="required"></td>';
                                        echo '<td class="list-td">';
                                        echo '<select id="hematology-request-form-chem-units" name="hematology-request-form-chem-units" class="custom-select" required="required">';
                                        foreach ($hematologyLabTestUnitsArray as $key2 => $value2) {
                                            echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                        }
                                        echo '</select>';
                                        echo '</td>';
                                        // echo '<td class="list-td">
                                        //     <select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                        // foreach ($verdict as $key3 => $value3) {
                                        //     echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                        // }
                                        // echo '</select>';
                                        // echo '</td>';

                                        echo '<td class="list-td">';

                                        echo  "Female = " . '(' . $value['range']['Female'][1] . ' - ' . $value['range']['Female'][2] . ') ';
                                        echo  "Male   = " . '(' . $value['range']['Male'][1] . ' - ' . $value['range']['Male'][2] . ')';
                                        echo '</td>';
                                        echo '</tr>';
                                    }



                                    foreach ($hematologyTestOtherSpecialArray as $sokey => $sovalue) {
                                        echo '<tr><td class="list-td"><a href="#">' . $sovalue . '</a></td>';
                                        echo '<td class="list-td" colspan="2" ><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                        echo '<td class="list-td" ><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                        echo '</tr>';
                                    }

                                    foreach ($hematologyTestSpecialArray as $skey => $svalue) {
                                        echo '<tr><td class="list-td"><a href="#">' . $skey . '</a></td>';
                                        echo '<td class="list-td" colspan="2"><select id="hematology-request-form-chem-units" name="hematology-request-form-chem-units" class="custom-select" required="required">';
                                        foreach ($svalue as $key3 => $value3) {
                                            echo '<option value="hematology-request-form-chem-unit-' . $key3 . '">' . $value3 . '</option>';
                                        }
                                        echo '</select>';
                                        echo '</td>';
                                        echo '<td class="list-td" ><input id="hematology-request-form-chem-test-' . $key . '" name="hematology-request-form-chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                        echo '</tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <div class="col-md-12 all-form-style-blood-lab">
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <div class="col-12" style="text-align: right;">
                                            <button name="submit" type="submit" class="btn btn-lg btn-danger" style="padding:1em;">Save Hematology Request Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <p class="h5">Reference<p>
                                            <a target="blank" title="open in new tab" rel="noopener noreferrer" href="https://www.healthlinkbc.ca/health-topics/zd1440">
                                                <p class="h6">Units of Measurement</p>
                                            </a>
                                            <a target="blank" title="open in new tab" rel="noopener noreferrer" href="../../doc/Clinical_Laboratory_Reference_Values_ref.pdf">
                                                <p class="h6">Clinical Laboratory Reference Values</p>
                                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <footer>
            <?php footer(); ?>
        </footer>
    </main>

</body>

</html>