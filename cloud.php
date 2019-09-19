<html>
<head>
    <title>Cloud Castles</title>
    <style type="text/css">
        * {
        margin: 0px;
        padding: 0px; 
        flex-wrap: wrap;
        }

        body {
        font-size: 120%;
        background-image: url("bg3.jpg");
        }

        h1 {
            width: auto;
            margin: 50px auto 0px;
            color: white;
            background-color: rgba(0,0,0,.45);
            text-align: center;
            /*border: 1px solid #B0C4DE;*/
            border-bottom: none;
            border-radius: 10px 10px 10px 10px;
            padding: 20px;
        }

        h2 {
            padding-top: 10px;
            text-align: center;
            color: white;
        }

        table {
            margin: 8px;
        }

        th {
            font-size: .7em;
            background-color: rgba(0,0,0,.45);
            color: white;
            padding: 2px 6px;
            border-collapse: separate;
            border: 1px solid #000;
        }

        td {
            font-size: .7em;
            border: 1px solid #DDD;
        }

    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
echo"<h1>CLOUD CASTLE WINNERS</h1>";
echo"<h2>Contact Numbers:<br></h2>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM events where events like 'Cloud%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>College</th></tr>";
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]."</td><td>".$row["college"]."</td>
	</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>