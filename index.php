<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

require_once dirname(__FILE__) . '/php/CommonHtml.php';

$imageFilenames = glob('exhibitions/images/*');

list($headerHtml, $indent) = CommonHtml::getHtmlPlusIndentForHeader
(
   array('js/current_exhibition.js'),
   array('css/current_exhibition.css.php')
);

echo $headerHtml;

echo "$indent<div class='image-gallery'>\n";

$subheadingText = "'Amorphous Bodily Stuff'<br/>- by Georgia Matthey";

echo "$indent <div class='subheading'>";
echo          "<h1>$subheadingText</h1><img src='images/finger_drag_two_sides_512.png'/>";
echo         "</div>\n";

foreach ($imageFilenames as $imageFilename)
{
   echo "$indent <div class='img-container-div'>";
   echo          "<img src='$imageFilename' width='500px' height='400px'/>";
   echo         "</div>\n";
}

echo "$indent</div>\n";

echo CommonHtml::getHtmlForFooter();
?>
