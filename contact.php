<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

require_once dirname(__FILE__) . '/php/CommonHtml.php';

$emailAddress = 'emergingartmelbourne@gmail.com';

list($headerHtml, $indent) = CommonHtml::getHtmlPlusIndentForHeader();

echo $headerHtml;
echo "$indent<p>\n";
echo "$indent Please direct all enquiries about this website to\n";
echo "$indent <a target='_blank' href='mailto:$emailAddress'>$emailAddress</a>.\n";
echo "$indent</p>\n";

echo CommonHtml::getHtmlForFooter();
?>
