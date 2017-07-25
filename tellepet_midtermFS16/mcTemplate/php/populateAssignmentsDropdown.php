<?php
/**
 * Created by PhpStorm.
 * User: LibStaff
 * Date: 10/12/2016
 * Time: 11:13 AM
 */
//Using the getRelativePath method at the bottom of the page to grab the relative path from where I am currently at to my phpAssignments folder
$from = getcwd();
$to = '/Volumes/UCFSsan31/Users/t/tellepet/Sites/phpAssignments';
$relPathToPHPAssignments = getRelativePath($from, $to);

//Scanning all files withing the phpAssignments folder into an array called allFiles
$allFiles = scandir($relPathToPHPAssignments);

//Making an Assignments array to hold the assignment folders
unset($Assignments);
$Assignments = [];
//Looping through allFiles to grab the assignment folders and placing those into the Assignments array
for ($i = 0; $i < sizeof($allFiles); $i++) {
    if (strpos($allFiles[$i], "ssignment")) {
        array_push($Assignments,$allFiles[$i]);
    }
}
//allAssignmentFiles contains all files within an assignment folder
unset($allAssignmentFiles);
$allAssignmentFiles = [];
//assignmentFiles contains only the actual main php file for each assignment
unset($assignmentFiles);
$assignmentFiles = [];
//Making a regex pattern to grab only the assignment files ending in php (My naming conventions currently have me naming the css file the same as the assignment file)
$pattern = '/assignment[0-9][0-9]shop.php$/';
//Cycling through each Assignment folder and scanning its contents into the allAssignmentFiles array
for ($i = 0; $i < sizeof($Assignments); $i++) {
    $allAssignmentFiles = scandir($relPathToPHPAssignments . $Assignments[$i]);
    //Then looping through the allAssignmentFiles array to search for the actual assignment file using the pattern declared above
    for ($j = 0; $j < sizeof($allAssignmentFiles); $j++) {
        //If a files matches a pattern push it into the assignmentFiles array
        if (preg_match($pattern, $allAssignmentFiles[$j])) {
            array_push($assignmentFiles,$allAssignmentFiles[$j]);
        };
    }
}
//Finally print out the hyper links
for ($i = 0; $i < sizeof($Assignments); $i++) {
    $path = $relPathToPHPAssignments . $Assignments[$i] . "/" . $assignmentFiles[$i];
    echo "<a href=\"$path\">$Assignments[$i]</a>";
    //echo "<br/>";
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

//Method I found online that gets the relative path between two directories
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