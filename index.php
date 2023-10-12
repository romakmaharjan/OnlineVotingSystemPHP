<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <center>
        <div id="headersection">
            <h1>Voting System Application</h1><br><br>
            <hr>
        </div><br><br>
        <div id="bodysection">
            <form action="api/login.php" method="POST">
                <h2>Login</h2><br>
                <input type="number" name="mobile" placeholder="Enter your mobile"><br><br>
                <input type="password" name="password" placeholder="Enter your password"><br><br>
                <select id="dropbox" class="role">
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select><br><br>
                <button id="loginbtn" type="submit">Login</button><br><br>
                New User? <a href="routes/register.php">Register here</a>
            </form>
        </div>
    </center>

</body>

</html>