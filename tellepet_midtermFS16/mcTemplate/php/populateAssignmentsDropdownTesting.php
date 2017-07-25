<?php
/**
 * Created by PhpStorm.
 * User: libstaff
 * Date: 9/8/2016
 * Time: 11:19 AM
 */
//$document = new DOMDocument();
//$document->loadPHPfile('index.php');
//if ($document->getElementById('php')) {
    echo "Hello from a php statement inside of html";
    $from = getcwd();
    $to = '/Volumes/UCFSsan31/Users/t/tellepet/Sites/phpAssignments';
    $relPathToPHPAssignments = getRelativePath($from, $to);

    print "<p>$relPathToPHPAssignments</p><br/>";

    $allFiles = scandir($relPathToPHPAssignments);
    print sizeof($allFiles);
    print "<br/>";
    print "allFiles: ";
    print_r($allFiles);

    $Assignments = [];
    for ($i = 0; $i < sizeof($allFiles); $i++) {
        if (strpos($allFiles[$i], "ssignment")) {
            array_push($Assignments,$allFiles[$i]);
        }
    }
    print "<br/>";
    print "Assignments: ";
    print_r($Assignments);
    print "<br/>";
    $allAssignmentFiles = [];
    $assignmentFiles = [];
    $pattern = '/assignment[0-9][0-9].php$/';

    //strpos($allAssignmentFiles[$i], "+ssignment[0-9][0-9].php+")
    for ($i = 0; $i < sizeof($Assignments); $i++) {
        $allAssignmentFiles = scandir($relPathToPHPAssignments . $Assignments[$i]);
        print "allAssignmentFiles: ";
        print_r($allAssignmentFiles);
        print "<br/>";
        for ($j = 0; $j < sizeof($allAssignmentFiles); $j++) {
            //print "$allAssignmentFiles[$j]";
            //print "</br>";
            if (preg_match($pattern, $allAssignmentFiles[$j])) {
                array_push($assignmentFiles,$allAssignmentFiles[$j]);
                print "assignmentFiles: ";
                print_r($assignmentFiles);
                print "<br/>";
            };
        }
    }
    print "out-of-loop assignmentFiles: ";
    print_r($assignmentFiles);
    print "<br/>";
    //$assignmentFiles = scandir("$relPathToPHPAssignments/$Assignments[2]");
    //print "assignmentFiles: ";
    //print_r($assignmentFiles);
    print "<br/>";

    for ($i = 0; $i < sizeof($Assignments); $i++) {
            $path = $relPathToPHPAssignments . $Assignments[$i] . "/" . $assignmentFiles[$i];
            print "<a href=\"$path\">$Assignments[$i]</a>";
            print "<br/>";
    }
//}
/*else if ($document->getElementById('js')) {
    $allFiles = scandir("javaScriptAssignments/");
    $Assignments = array_diff($allFiles, array('.', '..'));
    $assignmentFiles = scandir("javaScriptAssignments/$Assignments[2]");

    for ($i = 2; $i < sizeof($allFiles); $i++) {
        $assignmentFiles = scandir("javaScriptAssignments/$Assignments[$i]");
        $path = "javaScriptAssignments/" . $Assignments[$i] . "/" . $assignmentFiles[2];
        echo "<a href=\"$path\">$allFiles[$i]</a>";
        //echo "<br/>";
    }*/
//}

function getRelativePath($from, $to)
{
    // some compatibility fixes for Windows paths
    $from = is_dir($from) ? rtrim($from, '\/') . '/' : $from;
    $to   = is_dir($to)   ? rtrim($to, '\/') . '/'   : $to;
    $from = str_replace('\\', '/', $from);
    $to   = str_replace('\\', '/', $to);

    $from     = explode('/', $from);
    $to       = explode('/', $to);
    $relPath  = $to;

    foreach($from as $depth => $dir) {
        // find first non-matching dir
        if($dir === $to[$depth]) {
            // ignore this directory
            array_shift($relPath);
        } else {
            // get number of remaining dirs to $from
            $remaining = count($from) - $depth;
            if($remaining > 1) {
                // add traversals up to first matching dir
                $padLength = (count($relPath) + $remaining - 1) * -1;
                $relPath = array_pad($relPath, $padLength, '..');
                break;
            } else {
                $relPath[0] = './' . $relPath[0];
            }
        }
    }
    return implode('/', $relPath);
}
?>