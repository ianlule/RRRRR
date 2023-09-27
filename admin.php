<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
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
</body>
</html>