function loadcontentlist(catagory){
$handle=$('.box:first');
$handle.nextAll().remove();
$handle.children('.movie').empty();

switch (catagory)
{
case "movieid":
$itemid="latest";
break;

case "movierate":
$itemid="toprated";
break;

case "moviecomments":
$itemid="mostcommented";
break;
}

$out="#sub-navigation ul li a#"+$itemid;
$("#sub-navigation ul li a").css("color","white");
$($out).css("color","#d91d2a");

$handle.load('ajax/contentlist.php',{cat:catagory},function(){$handle.prepend("<div class='head'><h2></h2></div>");$handle.append("<div class='cl'>&nbsp;</div>");effect();});


}


