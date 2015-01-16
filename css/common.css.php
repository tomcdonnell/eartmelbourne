<?php
/*
 * vim: ts=3 sw=3 et wrap co=100 go-=b
 */

header('Content-Type: text/css');
?>
@font-face
{
   font-family: Ostrich;
   src: url('../fonts/Ostrich Sans Inline-regular.otf') format('opentype');
}

*
{
   padding: 0;
   margin: 0;
   border: 0;
}

body
{
   background-image: url('../images/white_wall_with_floor.jpeg');
   background-size: 100% 850px;
   background-repeat: no-repeat;
   width: 1000px;
   margin-left: auto;
   margin-right: auto;
   height: 100%;
}

h2
{
   font-family: Ostrich, Arial, Helvetica, sans-serif;
   font-weight: normal;
   font-size: 80px;
   padding-left: 20px;
   padding-top: 20px;
}

div.header
{
   height: 100px;
}

div.content
{
   height: 675px;
}

div.footer
{
   height: 40px;
   background: black;
   opacity: 0.4;
   border-radius: 15px;
}

div.footer:hover
{
   opacity: 1.0;
}

div.footer ul
{
   font-size: small;
   padding-top: 10px;
   width: 100%;
   white-space: nowrap;
}

div.footer ul li
{
   display: inline;
}

div.footer ul li a
{
   color: white;
   text-decoration: none;
}
