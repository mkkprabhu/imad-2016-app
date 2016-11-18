<meta property="og:image" content="http://themcn.in/img/325x325.png" />
<meta property="og:title" content="MM PRABHU" />
<meta property="og:description" content="Available in 8 major
Indian Languages:: Tamil, English, Hindi, Malayalam, Urdu, Telugu, Bengali, Kannada " />
<meta name="description" content="MM PRABHU">
    <meta name="author" content="MM PRABHU">
<?php 
function loadPage()
{
if(!isset($_GET['lang']) or !in_array(($lang=trim($_GET['lang'])), array('TA','HI','MA','TE','KA','BE','UR','FR')))
{
$lang = 'EN';
}
if(!isset($_GET['page']) or !in_array(($page=trim($_GET['page'])), array('page1','page2','page3','page4','page5','page6','page7','page8')))
{
$page = 'main';
}

include($page."_".$lang.".html");
}

echo loadPage();

 ?>