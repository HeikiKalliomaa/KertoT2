<?php
if (!session_id()) session_start();
include_once 'asetukset.php';
include 'db.php';
include 'header.php';
if (isset($_SERVER['HTTP_REFERER'])) {
    $previousPage = $_SERVER['HTTP_REFERER'];
} else {
    $previousPage = 'javascript:history.go(-1)';
}
echo "<br>br><br><br><br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto; /* Add this line to center the table */
        }
        
        th {
            background-color: cornsilk;
            border-radius: 5px;
            border: 3px solid black;
            text-align: center; /* Add this line to center the labels */
        }

        td {
            border: 2px solid black;
            text-align: center; /* Add this line to center the text */
        }

        table {
            border: 1px solid black;
            overflow-y: auto;
            max-height: 85vh;
        }
        .responsive-table {
            width: 50%;
            border-collapse: collapse;
        }
        .even-row {
            background-color: #f2f2f2;
        }
        .odd-row {
            background-color: #e6e6e6;
        }

        /* Add this media query for responsive width */
        @media (max-width: 600px) {
            .responsive-table {
                width: 90%;
            }
        }
    </style>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin: 0 auto; /* Add this line to center the table */
                    }
                    
                    th {
                        background-color: cornsilk;
                        border-radius: 5px;
                        border: 3px solid black;
                    }

                    td {
                        border: 2px solid black;
                        text-align: center; /* Add this line to center the text */
                    }

                    table {
                        border: 1px solid black;
                        overflow-y: auto;
                        max-height: 85vh;
                    }
                    .responsive-table {
                        width: 50%;
                        border-collapse: collapse;
                    }
                    .even-row {
                        background-color: #f2f2f2;
                    }
                    .odd-row {
                        background-color: #e6e6e6;
                    }

                    /* Add this media query for responsive width */
                    @media (max-width: 600px) {
                        .responsive-table {
                            width: 90%;
                        }
                    }
                </style>
                </head>
                <body>
                <?php    
                $queri = "SELECT results.points, users.firstname, users.lastname
                    FROM results
                    INNER JOIN users ON results.users_id = users.id
                    ORDER BY results.points DESC";
                $result = query_oma($yhteys, $queri);

                if ($result->num_rows > 0) {
                    echo "<table class='responsive-table'><tr><th>Rank</th><th>Points</th><th>Firstname</th><th>Lastname</th></tr>";
                    $rowColor = 0;
                    $rank = 1;
                    while($row = $result->fetch_assoc()) {
                        $rowColorClass = ($rowColor % 2 == 0) ? 'even-row' : 'odd-row';
                        echo "<tr class='$rowColorClass'><td>" . $rank . "</td><td>" . $row["points"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td></tr>";
                        $rowColor++;
                        $rank++;
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                ?>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="<?php echo $previousPage; ?>" style="background-color: green; color: white; padding: 10px; border-radius: 5px; text-decoration: none;">Go Back</a>
                </div>
                </body>
                </html>
