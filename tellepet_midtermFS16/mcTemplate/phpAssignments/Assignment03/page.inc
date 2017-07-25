<?php
class Page
{
  // class Page's attributes
  public $content;
  public $title = "Assignment 03";
  public $keywords = "Evan, Tellep, Phenom, Awesomeness";
  public $buttons = array("Home"   => "assignment03.php",
                        "Contact"  => "contact.php", 
                        "Services" => "services.php", 
                        "Resume" => "resume.php");

  // class Page's operations
  public function __set($name, $value)
  {
    $this->$name = $value;
  }

  public function Display()
  {
    echo "<html>\n<head>\n";
    $this -> DisplayTitle();
    $this -> DisplayKeywords();
    $this -> DisplayStyles();
    echo "</head>\n<body>\n";
    $this -> DisplayHeader();
    $this -> DisplayMenu($this->buttons);
    echo $this->content;
    $this -> DisplayFooter();
    echo "</body>\n</html>\n";
  }

  public function DisplayTitle()
  {
    echo "<title>".$this->title."</title>";
  }

  public function DisplayKeywords()
  {
    echo "<meta name=\"keywords\" 
          content=\"".$this->keywords."\"/>";
  }

  public function DisplayStyles()
  { 
?>   
  <style>
    body {
      width: 75%;
      margin: auto;
    }
    h1 {
    	color:white; font-size:24pt; text-align:center;
        font-family:arial,sans-serif
    }
    .menu {
    	color:white; font-size:12pt; text-align:center; 
        font-family:arial,sans-serif; font-weight:bold
    }
    td {	
    	background:darkgrey;
        border: solid darkblue 2px;
    }
    p {
    	color:black; font-size:12pt; text-align:justify;
       	font-family:arial,sans-serif
    }
    p.foot {
    	color:white; font-size:9pt; text-align:center; 
        font-family:arial,sans-serif; font-weight:bold
    }
    a:link,a:visited,a:active {
    	color:white
    }
    img.resize {
      width:50px; /* you can use % */
      height: auto;
    }
    img.buttons {
      width:40px; /* you can use % */
      height: auto;
    }
    img.side {
      width:40px; /* you can use % */
      height: auto;
      -ms-transform: rotate(90deg); /* IE 9 */
      -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
      transform: rotate(90deg);
    }
    ul {
      background-color: darkblue;
      width: 50%;
      margin: auto;
    }
    li {
      background-color: blue;
      border: solid black 1px;
      padding: 5px;
    }
  </style>
<?php
  }

  public function DisplayHeader()
  { 
?>
<div class="header">
  <table width="100%" cellpadding="12" 
         cellspacing="0" border="0">
  <tr bgcolor ="black">
    <td align ="left"><img class="resize" src = "StorySymbolTransperancy.png" /></td>
    <td>
        <h1>Evan Tellep</h1>
    </td>
    <td align ="right"><img class="resize" src = "StorySymbolTransperancy.png" /></td>
  </tr>
  </table>
</div>
<?php
  }

  public function DisplayMenu($buttons)
  {
    echo "<table width=\"100%\" bgcolor=\"white\" 
          cellpadding=\"4\" cellspacing=\"4\">\n";
    echo "<tr>\n";

    //calculate button size
    $width = 100/count($buttons);

    while (list($name, $url) = each($buttons)) {
      $this -> DisplayButton($width, $name, $url, 
               !$this->IsURLCurrentPage($url));
    }
    echo "</tr>\n";
    echo "</table>\n";
  }

  public function IsURLCurrentPage($url)
  {
    if(strpos($_SERVER['PHP_SELF'], $url )==false)
    {
      return false;
    }
    else
    {
      return true;
    }
  }

  public function DisplayButton($width,$name,$url,$active = true)
  {
    if ($active) {
      echo "<td width = \"".$width."%\">
      <a href=\"".$url."\">
      <img class=\"buttons\" src=\"StorySymbolTransperancy.png\" alt=\"".$name."\" border=\"0\" /></a>
      <a href=\"".$url."\"><span class=\"menu\">".$name."</span></a>
      </td>";
    } else {
      echo "<td width=\"".$width."%\">
      <img class=\"side\" src=\"StorySymbolTransperancy.png\">
      <span class=\"menu\">".$name."</span>
      </td>";
    }  
  }

  public function DisplayFooter()
  {
?>
<table width="100%" bgcolor="black" cellpadding="12" border="0">
<tr>
<td>
    <p class="foot">&copy; Evan Tellep Awesome Person Extraordinaire</p>
    <p class="foot">CLick here to return to <a href ="http://homepages.uc.edu/~tellepet/">The Real Homepage</a></p>
</td>
</tr>
</table>
<?php
  }
}
?>
