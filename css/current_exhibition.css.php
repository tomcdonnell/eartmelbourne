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
   font-size: 55px;
   margin: 0;
   padding-top: 130px;
   text-align:right;
   vertical-align: top;
   width: 100%;
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

div.content div.image-gallery div.img-container-div img
{
   padding-right: 250px;
}

div.content div.image-gallery div.subheading img:hover,
div.content div.image-gallery img:hover
{
   cursor: pointer;
}
