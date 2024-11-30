<?php

include('assets/imgGenerator.php');

function explodeDimensions($dimensionString) {
  $dimensions = explode('x', $dimensionString);

  $width = $dimensions[0];

  if (count($dimensions) === 2) {
    if (!empty($dimensions[1])) {
      $height = $dimensions[1];
    } else {
      $height = $width;
    }
  } else {
    $height = $width;
  }

  return ["width" => $width,
    "height" => $height];
}

function checkFormat($format) {
  $format = strtolower($_GET['format']);
  if ($format === 'svg' || $format === 'png' || $format === 'jpg') {
    return true;
  } else {
    return false;
  }
}


if (isset($_GET['size'])) {

  $dimensions = explodeDimensions($_GET['size']);
  if (is_numeric($dimensions['width']) && is_numeric($dimensions['height'])) {

    if ($dimensions['width'] > 4000) {
      $width = 4000;
    } elseif ($dimensions['width'] < 20) {
      $width = 20;
    } else {
      $width = $dimensions['width'];
    }

    if ($dimensions['height'] > 4000) {
      $height = 4000;
    } elseif ($dimensions['height'] < 20) {
      $height = 20;
    } else {
      $height = $dimensions['height'];
    }

    if (!empty($_GET['format'])) {
      if (checkFormat($_GET['format'])) {
        $format = $_GET['format'];
      } else {
        $format = '404';
      }
    } else {
      $format = 'svg';
    }

    if (!empty($_GET['bg'])) {
      $bg = $_GET['bg'];
    } else {
      $bg = 'C5C5C5';
    }

    if (!empty($_GET['txt-clr'])) {
      $txt_clr = $_GET['txt-clr'];
    } else {
      $txt_clr = '000000';
    }

    if (!empty($_GET['txt'])) {
      $text = $_GET['txt'];
    } else {
      $text = $width .' × '. $height;
    }

    if (!empty($_GET['txt-size'])) {
      $txt_size = $_GET['txt-size'];
    } else {
      $txt_size = 70;
    }

    if (!empty($_GET['font'])) {
      if ($_GET['font'] == 'Outfit' || $_GET['font'] == 'Montserrat' || $_GET['font'] == 'Poppins') {
        $font = $_GET['font'];
      } else {
        $font = 'Outfit';
      }
    } else {
      $font = 'Outfit';
    }


    if ($format !== '404') {

      echo generateImage($width, $height, $format, $text, $txt_clr, $txt_size, $bg, $font);

    } else {
      echo '404 format not found';
    }

  } else {
    echo '404';
  }

}

?>