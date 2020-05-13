<?php



$courseName = 'PHP';

//$courseName2 = 'Modelleren';
//$courseName3 = 'DigitalaVaardigheden';
//$courseName4 = 'HardwareAO';
//$courseName5 = 'PHP';
//$courseName6 = 'HTMLCSS';
//$courseName7 = 'JavaScript';
//$courseName8 = 'Usability';
//$courseName9 = 'Nederlands';
//$courseName10 = 'ComputerTekenen';
//$courseName11 = 'Engels';
//$courseName12 = 'ASP';
//$courseName13 = 'Rekenen';
//$courseName14 = 'Burgerschap';

//$teacherName2 = 'Visser';
//$teacherName3 = 'Bergen';
//$teacherName4 = 'Wetering';
//$teacherName5 = 'Evers';
//$teacherName6 = 'Ende';
//$teacherName7 = 'Mitrovic';
//$teacherName8 = 'Saebu';
//$teacherName9 = 'Gijsbrechts';
////$teacherName9 = 'Pielage';

switch ($courseName) {
    case "Modelleren":
        $teacherName = "Gijsbrechts";
        break;

    case "DigitaleVaardigheden":
        $teacherName = 'Pielage';
        break;
    case "Computertekenen":
        $teacherName = 'Bergen';
        break;
    case "Database":
        $teacherName = 'Wetering';
        break;
    case "HardwareAO":
        $teacherName = 'Saebu';
        break;
    case "HTMLCSS":
        $teacherName = 'Wetering';
        break;
    case "Javascript":
        $teacherName = 'Evers';
        break;
    case "ASP":
        $teacherName = 'Gijsbrechts';
        break;
    case "Usability":
        $teacherName = "Gijsbrechts";
        break;
    case "PHP":
        $teacherName = 'Saebu';
        break;
    case "Nederlands":
        $teacherName = 'Ende';
        break;
    case "Engels":
        $teacherName = 'Mitrovic' ;
        break;
    case "Rekenen":
        $teacherName = 'Wetering';
        break;
    case "Burgerschap":
        $teacherName = 'Vissser';
        break;
}
