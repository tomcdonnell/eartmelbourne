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
echo "$indent<div class='text-background-div'>\n";
echo "$indent<p>\n";
echo "$indent The Melbourne Emerging Artists' Initiative is a new online gallery space that is\n";
echo "$indent aimed at promoting, exposing and facilitating the sale of work by Melbourne's\n";
echo "$indent emerging and unrepresented artists.\n";
echo "$indent</p>\n";
echo "$indent<p>\n";
echo "$indent The website exhibits an artists' body of work for a two week period and includes a\n";
echo "$indent recorded interview with each artist about their concept and art practise. We're\n";
echo "$indent thrilled to see what new ideas and conversations arise on creating this additional\n";
echo "$indent context within our online gallery space.\n";
echo "$indent</p>\n";
echo "$indent<p>\n";
echo "$indent The Melbourne emerging artists' initiative is an artist-first project; certain\n";
echo "$indent aspects of the contemporary art market are perceived as inaccessible to emerging\n";
echo "$indent artists, and this makes for some very predictable results. We aim to put artists'\n";
echo "$indent voices before the market and create a digital archive which will be a crucial\n";
echo "$indent record of Melbourne's current emerging art scene.\n";
echo "$indent</p>\n";
echo "$indent<p>\n";
echo "$indent In focusing on the individual we are aiming to promote the credibility of\n";
echo "$indent Melbourne's unrecognized and underexposed artists and give them a chance to\n";
echo "$indent exhibit and sell their work in a professional and supportive environment. Proceeds\n";
echo "$indent from sales made on the site will be given directly to the artist, besides a 5%\n";
echo "$indent commission on all sales that will be maintained by Melbourne Emerging Artists’\n";
echo "$indent Initiative. We will be directing the commission made on any sold works towards the\n";
echo "$indent maintenance of the site and towards initiating a tangible exhibition for our\n";
echo "$indent artists as often as possible.\n";
echo "$indent</p>\n";
echo "$indent<p>\n";
echo "$indent In our opinion, in the networked culture we're living in, the gallery has become\n";
echo "$indent a transitional place rather than a destination. And we believe in order to create\n";
echo "$indent a dynamic and thought provoking arts culture in Melbourne we need to create a more\n";
echo "$indent democratic approach to the representation of artists. We need the artists to\n";
echo "$indent dictate the discourse, not the market.\n";
echo "$indent</p>\n";
echo "$indent</div>\n";
echo CommonHtml::getHtmlForFooter();
?>
