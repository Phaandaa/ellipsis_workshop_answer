<?php
#List of majors in SIS

$majors = [
        "SD" => "Software Development",
        "DBS" => "Digital Business Solutioning", 
        "BA" => "Business Analytics",
        "AI" => "Artificial Intelligence",
        "CS" => 'Cyber Security',
        "FT" => "Fintech"
];

$option_html = "";

foreach($majors as $major=>$kepanjangan){
        $option_html .= "<option value='$major'>$kepanjangan</option>";
}

# Write your code here
# Do not hardcore

echo "
<h1>Major Requirements</h1>

<form action='module_tracking.php' method='POST'>
        Major: <select name='selected_mod'>
        $option_html
        </select>
        <input type='submit' value='Submit'>
</form>
"







?>