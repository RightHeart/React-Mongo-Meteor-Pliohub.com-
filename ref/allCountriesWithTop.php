<?php
// To use this file, include countriesStatesProvinces.php above

// Top countries
$topCountriesList[]=246; // US
$topCountriesList[]=245; // UK
$topCountriesList[]=42; // Canada
$topCountriesList[]=14; // Australia
$topCountriesList[]=210; // Singapore
$topCountriesList[]=115; // Ireland
$topCountriesList[]=168; // New Zealand
$topCountriesList[]=187; // Philippines
$topCountriesList[]=225; // Sweden
$topCountriesList[]=81; // Finland

// Master names taken $topCountriesListText,$allCountriesWithTop_Text,$topCountriesListCode,$allCountriesWithTop_Code

// names
for($i=0;$i<count($topCountriesList);$i++){$topCountriesListText[]=$allCountriesText[$topCountriesList[$i]];}
$allCountriesWithTop_Text=array_merge($topCountriesListText,$allCountriesText);
// values (value+1)
for($i=0;$i<count($topCountriesList);$i++){$topCountriesListCode[]=$topCountriesList[$i]+1;}
$allCountriesWithTop_Code=array_merge($topCountriesListCode,$allCountriesCode);
/*echo count($allCountriesCodeN)."<br />";
outputThisArray($allCountriesCodeN);*/
?>