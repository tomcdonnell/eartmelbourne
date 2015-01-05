<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

header('Content-Type: text/css');
?>
div.content div.image-gallery
{
   height: 550px;
   overflow: hidden;
   white-space: nowrap;
   width: 100%;
}

div.content div.image-gallery div
{
   display: inline-block;
   height: 400px;
   width: 500px;
   margin-left: 250px;
   margin-top: 50px;
}

div.content div.image-gallery div.subheading
{
   font-family: sans-serif;
   vertical-align: top;
   font-size: 55px;
   padding-top: 130px;
   padding-left: 200px;
   padding-right: 200px;
}

div.content div.image-gallery div.subheading h1
{
   display: inline-block;
   font-size: 50px;
}

div.content div.image-gallery div.subheading img
{
   width: 60px;
   height: 60px;
   padding-top: 30px;
   margin: 0;
   vertical-align: top;
}

div.content div.image-gallery div.subheading img:hover,
div.content div.image-gallery img:hover
{
   cursor: pointer;
}
