<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Registration</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<style>
#address {
    width: 30%;
}

#imagepart {
    border: 2px solid black;
    border-radius: 5px;
    padding: 10px;
    width: 30%;
}

#role {
    border: 2px solid black;
    border-radius: 5px;
    padding: 10px;
    width: 30%;
}

#role select {
    border-radius: 5px;
    padding: 10px;
}

#stylebtn {
    padding: 5px;
    font-size: 15px;
    background-color: #2980b9;
    color: white;
    border-radius: 5px;
}
</style>

<body>
    <center>
        <div id="headersection">
            <h1>Online Voting System</h1>
        </div>
        <hr><br>
        <div id="bodysection">
            <h2>Registration</h2><br>
            <form action="../api/registration.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Enter your name">
                <input type="number" name="mobile" placeholder="Enter mobile"><br><br>
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="cpassword" placeholder="Confirm Password"><br><br>
                <input id="address" type="text" name="address" placeholder="Enter your address">

                <div id="imagepart">
                    Upload image:<input type="file" name="photo"><br>
                </div>

                <div id="role">
                    Select role:<select name="role">
                        <option value="1">Voter</option>
                        <<option value="2">Group</option>
                    </select>
                </div>

                <br><br>
                <button id="stylebtn">Register</button><br><br>
                Already user? <a href="../index.php">Login Here</a>
            </form>
        </div>
    </center>

</body>

</html>