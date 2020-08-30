<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
include_once $document_root . '/includes/defines.php';

function footer(){
echo '<div class="container-fluid">
        <div class="row" style="text-align:center;padding:4em;">
            <div class="col-12 col-xs-12 ">
                Copyright © 2020 <br>Powered by <a target="blank" href="http://www.medic-ethiopia.com">medic-ethiopia</a>
                <p class="text-muted"><em> under construction - v1.0 alpha</em></p>
            </div>

        </div>

      </div>';
}

function headerInfo($formName=null){

    echo '<div class="row" style="text-align:center">
    <div class="col-md-12">
      <p class="h3" style="padding-bottom: 20px;font-weight:bold;">ZEWDITU MEMORIAL REFERAL HOSPITAL</p>
      <p class="h6" style="padding-bottom: 20px;">Addis Ababa Kirkos Subcity, Wereda: 7 <br> Telephone: +251-0115518085 P.O.Box 316</p>
    </div>
    <div class="col-md-12">

    <form class="search" id="section-search">
    <div class="row">
      <form>
        <label for="patient-search" class="col-md-4 col-sm-12 col-xs-12 col-form-label">Search Patient</label>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <input id="patient-search" name="patient-search" placeholder="Enter here Card Id,  Adress (Kebele/Wereda), phone, etc ..." type="text" class="form-control" required="required">

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12" style="text-align:left">
            <button name="patient-search-submit" type="submit" class="btn btn-md btn-warning">Search Patient</button>
        </div>
    </div>

    <div class="form-group row">
      <div class="col-md-12 col-sm-12 col-sm-12">
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="search-filter" id="search-filter_0" type="checkbox" class="custom-control-input" value="all" aria-describedby="search-filterHelpBlock">
          <label for="search-filter_0" class="custom-control-label">All Filter</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="search-filter" id="search-filter_1" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filterHelpBlock">
          <label for="search-filter_1" class="custom-control-label">By Id</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="search-filter" id="search-filter_2" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filterHelpBlock">
          <label for="search-filter_2" class="custom-control-label">By Name</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="search-filter" id="search-filter_3" type="checkbox" class="custom-control-input" value="telephone" aria-describedby="search-filterHelpBlock">
          <label for="search-filter_3" class="custom-control-label">By Telephone</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="search-filter" id="search-filter_4" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filterHelpBlock">
          <label for="search-filter_4" class="custom-control-label">By Address</label>
        </div>

        <span id="search-filterHelpBlock" class="form-text text-muted">Choose Filter for searching patient and enter</span>
      </div>
    </div>
  </form>
  </div>
  </div>
  </div>';
}