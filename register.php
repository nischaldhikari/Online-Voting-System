<html>
    <head>
        <title>online Voting System - Registration</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <style>
            #address{
                width: 25%;
            }
            #imagepart{
                border: 2px solid black;
                border-radius: 15px;
                padding: 10px;
                width: 24%;
            }
            #role{
                border: 2px solid black;
                border-radius: 15px;
                padding: 10px;
                width: 24%;
            }
            #role select{
                border-radius: 5px;
                
                padding: 5px;
            }
        </style>
    <center>
        <div id=headersection>
            <h1>Online Voting System</h1>
        </div>
       <hr>
       <div id="bodysection">
            <h3>Registration</h3>
            <form action="../OnlineVotingSystem/api/register.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Enter name">
                <input type="number" name="mobile" placeholder="Enter Mobile"><br><br>
                <input type="password" name="password" placeholder="password">
                <input type="password" name="cpassword" placeholder="Confirm password"><br><br>
                <input id="address" type="text" name="address" placeholder="Address"><br><br>
                <div id="imagepart">
                    Upload Image:<input type="file" name="photo">
                </div>
                <br>
                <div id="role">
                    Select Your Role:<select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                </div>
                <br>
                <button style=" padding: 5px;
                        border-radius: 5px;
                        background-color: blue;
                        color: aliceblue;">
                Register</button><br><br>
                Alredy User?<a href="index.php">Login Here</a>
            </form>
        </div>
    </center>
    </body>
</html>