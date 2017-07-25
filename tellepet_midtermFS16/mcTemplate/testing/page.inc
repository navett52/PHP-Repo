<?php
class Page
{
    // class Page's attributes
    public $content;
    public $title = "Assignment 03";
    public $keywords = "PHP, assignment03, stuff, morestuff";
    public $buttons = array(
        "Home" => "home.php",
        "PHPAssignments" => "http://homepages.uc.edu/~tellepet/PHPAssignmentsPage.php",
        "Shop" => "#",
        "Rules" => "#",
        "Forum" => "#",
        "Lore" => "#",
        "Map" => "#"
    );

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
        echo "<div class=\"middle\">" . $this->content . "</div>";
        $this -> DisplayFooter();
        echo "</body>\n</html>\n";
    }

    public function DisplayTitle()
    {
        echo "<title>" . $this->title . "</title>\n";
    }

    public function DisplayKeywords()
    {
        echo "<meta name=\"keywords\" 
          content=\"".$this->keywords."\"/>";
    }

    public function DisplayStyles()
    {
        echo ">";
    }

    public function DisplayHeader()
    {
        ?>
        <div class="header">
            <div class="banner">
                <img src="../templates/Banner.png" alt="AgonCraft">
            </div>
            <div class="login">
                <form action="#" method="post"> <!-- using post method cause this is private data that needs to be securely transferred to the next page -->
                    E-Mail: <input type="email" id="email" placeholder="example@example.com" name="email"><br>
                    Password: <input type="password" id="password" placeholder="#1234abcd" name="password"><br>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
            <div class="ip" align="center">
                <input type="image" src="../WebsiteResources/ip.png" alt="mc.agoncraft.net">
            </div>
        <?php
    }

    public function DisplayMenu($buttons)
    {
        ?>
            <div class="navigation">
                <ul>
                    <li><a href="http://homepages.uc.edu/~tellepet">Home</a></li>
                    <li><a href="http://homepages.uc.edu/~tellepet/PHPAssignmentsPage.php">PHP Assignments</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Rules</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Lore</a></li>
                    <li><a href="#">Map</a></li>
                </ul>
            </div>
        </div>
        <?php
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
      <img src=\"s-logo.gif\" alt=\"".$name."\" border=\"0\" /></a>
      <a href=\"".$url."\"><span class=\"menu\">".$name."</span></a>
      </td>";
        } else {
            echo "<td width=\"".$width."%\">
      <img src=\"side-logo.gif\">
      <span class=\"menu\">".$name."</span>
      </td>";
        }
    }

    public function DisplayFooter()
    {
        ?>
        <div class="footer">
            <p>Ilaris Unbound &copy;</p>
            <p>designed by Phenom</p>
        </div>
        <?php
    }
}
?>