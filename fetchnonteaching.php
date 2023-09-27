<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Non-teaching staff suggestions</title>
    <style type="text/css">
        button{
            font-size: 15px;
            font-weight:bold;
            color: black;
        }
        button:hover{
            color:white;
            background: rgb(64, 61, 61);
            border: 0;
            text-decoration: underline;
            cursor: pointer;
        }
        .headings{
            font-weight: bold;
            font-size: 17px;
        }
        table{
        margin: 30px;
        border-collapse: collapse;
    }

   table tr{
        border-bottom: 1px solid grey;
    }
     table tr th, table tr td{
        padding: 10px;
    }
    
        td{
            padding: 5px 6px 5px;
            text-align: center;
        }
        </style>
</head>
<body>
<nav>
        <div class="logo">Admin Dashboard</div>
        <form action="fetchadmin.php">
        <button type="submit" style="padding:5px;border-radius:8px;">ADMINISTRATOR<br>SUGGESTIONS</button>
        </form>
        <form action="fetchprefects.php">
        <button type="submit" style="padding:5px;border-radius:8px;">PREFECTS AND<br>COUNCILORS SUGGESTIONS</button>
        </form>
        <form action="fetchteachers.php">
        <button type="submit" style="padding:5px;border-radius:8px;">TEACHERS<br>SUGGESTIONS</button>
        </form>
        <form action="fetchchaplaincy.php">
        <button type="submit" style="padding:5px;border-radius:8px;">CHAPLAINCY<br>SUGGESTIONS</button>
        </form>
        <form action="fetchnonteaching.php">
        <button type="submit" style="padding:5px;border-radius:8px;">NON-TEACHING STAFF<br>SUGGESTIONS</button>
        </form>
        <form action="fetchform.php">
        <button type="submit" style="padding:5px;border-radius:8px;">FORM PERIOD<br>SUGGESTIONS</button>
        </form>
        <form action="fetchstudents.php">
        <button type="submit" style="padding:5px;border-radius:8px;">STUDENTS<br>SUGGESTIONS</button>
        </form>
        <a class="button" href="logout.php">Logout</a>
    </nav>
    <br>
    <br>
    <div style="display:flex;justify-content:center;align-items:center; " >
<table border="0" cellspacing="0">
                <thead>
                    <caption style="font-weight:bolder; font-size:30px;">NON-TEACHING STAFF SUGGESTIONS</caption>
                    <tr class="headings">
                        <td>Staff's name</td>
                        <td>Suggestions</td>
                        <td>Date and Time of Submission</td>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("connect.php");
                    $query="SELECT * FROM nonteachingstaff";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['suggestion']."</td>";
                            echo "<td>".$row['DateTime']."</td>";
                        echo "<tr>";
                    }
                    ?>
                </tbody>
            </table>
            </div>
</body>
</html>