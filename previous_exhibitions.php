<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

require_once dirname(__FILE__) . '/php/CommonHtml.php';

$imageFilenames = glob('exhibitions/images/*');

list($headerHtml, $indent) = CommonHtml::getHtmlPlusIndentForHeader
(
   array('js/current_exhibition.js'),
   array('css/about.css.php')
);

echo $headerHtml;
echo "$indent<p>No previous exhibitions yet.</p>\n";
echo CommonHtml::getHtmlForFooter();
?>
