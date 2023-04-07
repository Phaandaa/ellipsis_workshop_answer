<?php
$modules = [
    "SD" => ["Compulsory Track Course" => ["IT Solution Architecture","Object Oriented Programming"], 
            "Track Elective" => ["Alogrithmic Thinking", "Cloud Computing and SaaS Solutions", "Foundataion of Cybersecurity", "Mobile Applications"]],
    "DBS" => ["Track Elective" => ["Digital Transformation Strategy", "Enterprise Business Solutions", "Internet of Things", "System for Intelligent Cities"]], 
    "BA" => ["Compulsory Track Course" => ["Analytics Foundataion"], 
            "Track Elective" => ["Data Mining", "Geospatial Analytics & Applications", "Social Analytics", "Visual Analytics"]],
    "AI" => ["Compulsory Track Course" => ["Introduction to Artificial Intelligence"],
            "Track Elective" => ["Image Perception", "Introduction to Machine Learning", "National Language Communication", "Heurisitc Search and Optimization"]],
    "CS" => ["Compulsory Track Course" => ["Foundation of Cybersecurity"],
            "Track Elective" => ["Data Security & Privacy", "Network Security", "Software & Systems Security", "Strategic Cybersecurity"]],
    "FT" => ["Compulsory Track Course" => ["Digital Banking Enterprise Architecture"],
            "Track Elective" => ["Digital Payment & Innovation", "Fiancial Markets Processes & Technology", "Retail Banking", "Corporate Banking Technology"]]
];

$compulsory_table = "<"

# Write your code here
# Do not hardcore

$selected = $_POST["selected_mod"];
$table_data = $modules[$selected];
var_dump($table_data);

echo "
<h1>Here are the list of pre-requisite modules</h1>
<table>
</table>
"






?>



