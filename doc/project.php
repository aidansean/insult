<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/insult" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=insult" ;
$project = new project_object("insult", "Insulter", "https://github.com/aidansean/insult", "http://aidansean.com/projects/?tag=insult", "insult/images/project.jpg", "insult/images/project_bw.jpg", "This is another simple and frivolous project.  A student showed me a page illustrated a table with three columns that could be used to make an insult.  It looked liek it should be coded up, and I had 15 minutes to spare, so I did.", "Frivolous", "CSS,HTML,PHP") ;
?>