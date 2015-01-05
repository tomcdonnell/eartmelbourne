<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

require_once dirname(__FILE__) . '/php/CommonHtml.php';

$imageFilenames = glob('exhibitions/images/*');

list($headerHtml, $indent) = CommonHtml::getHtmlPlusIndentForHeader();

echo $headerHtml;

echo "$indent<p>Please direct all enquiries about this website to emergingart@gmail.com.</p>\n";

echo CommonHtml::getHtmlForFooter();
?>
