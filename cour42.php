<?php

  /*
    Control Structure
    - Including Files

    Include
    Require
  */
/*requier use that is script dount run if we dnt have requier
include -<maybe somethin i can delete it  script dont need it contenue as normal
*/
  include_once("test.php"); // $a = 10; 1 fois

  echo $a . '<br>';

  $a = 20;

  include_once("test.php"); // $a = 10;

  echo $a . '<br>';//20

  echo "Continue";

  //if it was include a la place of include_one =>10/10/contenue