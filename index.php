<html>
    <head>
        <title>Online Voting System</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
    <center>
        <div id="headersection">
            <h1>Online Voting System</h1>
        </div>
        <hr>
        <div id="bodysection">
            <form action="api/login.php" method="POST">
                <h2>Login</h2>
                <input type="number"name="mobile" placeholder="Enter Mobile"><br><br>
                <input type="password"name="password" placeholder="Enter password"><br><br>
                <select id="dropbox" name="role">
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select><br><br>
                <button id="loginbtn" type="submit">Login</button><br><br>
                New User? <a href="register.php">Register here</a>
            </form>
        </div>
    </center>
    </body>
</html>