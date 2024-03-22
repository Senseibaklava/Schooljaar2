<?php
require_once("../vendor/autoload.php");

use Opdracht7\classes\Teacher;
use Opdracht7\classes\Student;
use Opdracht7\classes\Schooltrip;
use Opdracht7\classes\Group;


$SOD2A = new Group("SOD2A");
$SOD2B = new Group("SOD2B");

$myTeacher = new Teacher("Jan van der Brugge");
$myTeacher->SetSalary(2384.73);
$myTeacher = new Teacher("Barry van Helden");
$myTeacher->SetSalary(2235.36);
$myTeacher = new Teacher("Rob Wigmans");
$myTeacher->SetSalary(2138.23);

$mySchooltrip = new Schooltrip("Walibi", 5);
$mySchooltrip->AddStudent(new Student("Ali Shwani", $SOD2A));
$mySchooltrip->AddStudent(new Student("Hamza Taha", $SOD2A, true));
$mySchooltrip->AddStudent(new Student("Akram Daidoune", $SOD2A));
$mySchooltrip->AddStudent(new Student("Rohan Dayal", $SOD2A));
$mySchooltrip->AddStudent(new Student("Papa Dayal", $SOD2A, true));
$mySchooltrip->AddStudent(new Student("Yassine Casino", $SOD2A));
$mySchooltrip->AddStudent(new Student("FUFUMEISTER2000 Shwani", $SOD2B, true));
$mySchooltrip->AddStudent(new Student("Lionel Messi", $SOD2B, true));
$mySchooltrip->AddStudent(new Student("Penaldo", $SOD2A, true));
$mySchooltrip->AddStudent(new Student("karim Benzema", $SOD2B));
$mySchooltrip->AddStudent(new Student("Bob Marley", $SOD2A));
$mySchooltrip->AddStudent(new Student("Amin OBS", $SOD2B));
$mySchooltrip->AddStudent(new Student("Tupac Shakur", $SOD2A, true));

// var_dump($mySchooltrip);
echo($mySchooltrip->GetTable());
?>