<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

function pre($v)
{
   echo "<pre>\n";
   var_dump($v);
   echo "</pre>\n";
}

class CommonHtml
{
   function __construct()
   {
      throw new Exception('This class is not intended to be instantiated.');
   }

   public static function getHtmlPlusIndentForHeader
   (
      $jsFilenames = array(), $cssFilenames = array()
   )
   {
      $jsFilenames = array_merge
      (
         array
         (
            '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
            'js/common.js'
         ),
         $jsFilenames
      );

      $cssFilenames = array_merge
      (
         array('css/common.css.php'),
         $cssFilenames
      );

      $html  = "<!DOCTYPE html>\n";
      $html .= "<html>\n";
      $html .= " <head>\n";
      $html .= "  <title>emergeart.com</title>\n";

      foreach ($cssFilenames as $cssFilename)
      {
         $html .= "  <link rel='stylesheet' type='text/css' href='$cssFilename'/>\n";
      }

      foreach ($jsFilenames as $jsFilename)
      {
         $html .= "  <script type='text/javascript' src='$jsFilename'></script>\n";
      }

      $html .= " </head>\n";
      $html .= " <body>\n";
      $html .= "  <div class='header'>\n";
      $html .= "   <h2>Melbourne Emerging Artists' Initiative</h2>\n";
      $html .= "  </div>\n";
      $html .= "  <div class='content'>\n";

      return array($html, '   ');
   }

   public static function getHtmlForFooter()
   {
      $html  = "  </div>\n";
      $html .= "  <div class='footer'>\n";
      $html .= "   <ul>\n";
      $html .= "    <li><a href='index.php'>Current exhibition</a></li>\n";
      $html .= "    <li><a href='about.php'>About</a></li>\n";
      $html .= "    <li><a href='previous_exhibitions.php'>Previous exhibitions</a></li>\n";
      $html .= "    <li><a href='mailing_list.php'>Mailing List</a></li>\n";
      $html .= "    <li><a href='contact.php'>Contact</a></li>\n";
      $html .= "    <li><a href='https://www.facebook.com/emergingartmelbourne'>Facebook</a></li>\n";
      $html .= "   </ul>\n";
      $html .= "  </div>\n";
      $html .= " </body>\n";
      $html .= "</html>\n";

      return $html;
   }
}
?>
