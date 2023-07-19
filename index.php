<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            background-color: black;
            color: white;
            padding: 1%;
        }
    </style>

    <title>Travel Website</title>
</head>

<body>
    <div class="header">
        <h3>Welcome To Anywhere</h3>
        <h5>A Travel Website</h5>
    </div>
    <?php include './server.php'  ?>
    <div>
        <form action="server.php" method="post">
            <input type="text" id="username" name="username" placeholder="username" />
            <!-- <button onclick="window.alert('Clicked')">Submit</button> -->
            <input type="submit" />
        </form>
    </div>


</body>

</html>