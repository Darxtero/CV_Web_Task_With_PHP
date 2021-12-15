<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link href="indexCSS.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">


</head>
<body>

    <?php
    $jsonArray = json_decode(file_get_contents("workExp-json.json"));
    ?>
    <section class="WorkExperience">
    <div id="WorkExperience">
        <h4 class="WorkExperienceHead">Work Experience:</h4>
        <div class="table-box">
            <table cellpadding="10">
                <thead>
                <tr>
                    <th>Icon</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Title</th>
                    <th>Duretion</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tbody>
                <?php
                foreach ($jsonArray as $variable => $value){
                    echo "<tr>";
                    echo "<td><img src='$value->Image' alt='image' height='50px' width='50px'></td>";
                    echo "<td>$value->Name</td>";
                    echo "<td>$value->Address</td>";
                    echo "<td>$value->Title</td>";
                    echo "<td>$value->Duration</td>";
                    echo "<td>$value->Description</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
    </section>
</body>
</html>