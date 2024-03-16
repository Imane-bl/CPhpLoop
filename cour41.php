<?php

  /*
    Control Structure
    - Loop

    Break, Continue
    - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
    - Skip Current Iteration
  */

  foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {
//dont print usa 
    if ($country == "USA") {

      break;

    }

    echo $country . "<br>";

  }

  echo "########## <br>";

  foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country == "USA") {
  //dont print usa but it will continue after usa 
      continue;

    }

    echo $country . "<br>";

  }