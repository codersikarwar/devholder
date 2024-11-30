<?php

require __DIR__.'/vendor/autoload.php';

use Intervention\Image\Image;
use Intervention\Image\ImageManagerStatic as ImageManager;

function generateImage($width, $height, $format, $text, $fontColor, $fontSize, $bg, $fontName) {


  $fontPath = __DIR__.'/fonts/'.$fontName.'-Regular.ttf';

  if ($format !== 'svg') {

    $image = ImageManager::canvas($width, $height, $bg);
    $x = $width / 2;
    $y = $height / 2;

    $image->text($text, $x, $y, function($font) use ($fontPath, $fontSize, $fontColor) {
      $font->file($fontPath);
      $font->size($fontSize);
      $font->color($fontColor);
      $font->align('center');
      $font->valign('middle');
    });

    header('Content-type: image/'.$format);
    echo $image->encode($format);
    $image->destroy();

  } else {

    header('Content-Type: image/svg+xml');

    $svgCode = '<svg width="'.$width.'" height="'.$height.'" xmlns="http://www.w3.org/2000/svg">

  <rect x="0" y="0" width="'.$width.'" height="'.$height.'" fill="#'.$bg.'"/>
  <!-- Specify the custom font family -->
  <style>
    <![CDATA[
      @font-face {
        font-family: "CustomFont";
        src: url("/assets/fonts/'.$fontName.'-Regular.ttf");
      }
    ]]>
  </style>
  <!-- Text in the center -->
  <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="CustomFont"  fill="#'.$fontColor.'" font-size="'.$fontSize.'">'.$text.'</text>
</svg>';

    echo $svgCode;

  }

}



?>