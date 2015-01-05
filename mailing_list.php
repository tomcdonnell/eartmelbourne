<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

require_once dirname(__FILE__) . '/php/CommonHtml.php';

$imageFilenames = glob('exhibitions/images/*');

list($headerHtml, $indent) = CommonHtml::getHtmlPlusIndentForHeader(array('css/mailing_list.css.php'));

echo $headerHtml;

echo "$indent<p>Enter your email address below to receive monthly updates on which artists will be exhibiting works.</p>\n";
echo "$indent<br/>\n";
echo "$indent<form action='save_email_address.php' method='post'>\n";
echo "$indent <input type='text' name='email-address'/>\n";
echo "$indent <input type='submit' value='Submit'/>\n";
echo "$indent</form>\n";

if (array_key_exists('message', $_GET))
{
   echo "$indent <br/>\n";
   echo "$indent <p class='transient-message'>{$_GET['message']}</p>\n";
}

echo CommonHtml::getHtmlForFooter();
?>
