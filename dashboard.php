<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header('location:index.php');
}
$userdata = $_SESSION['userdata'];
$groupsdata =$_SESSION['groupsdata'];
?>
<html>
    <head>
        <title>Online Voting System - Dashboard</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <style>
            #backbtn{
                padding: 5px;
                border-radius: 5px;
                background-color: blue;
                color: aliceblue;
                float:left;
                }
                #logoutbtn{
                    padding: 5px;
                    border-radius: 5px;
                    background-color: blue;
                    color: aliceblue;
                    float:right;
                    }
                    #Profile{
                        background-color:white;
                        width:25%;
                        padding:20px;
                        float:left;
                    }
                #Group{
                    background-color:white;
                    width:65%;
                    padding:20px;
                    float:right;
                }

                #votebtn{
                    padding: 5px;
                    border-radius: 5px;
                    background-color: blue;
                    color: aliceblue;
                }
            
        </style>
<div id="mainsection">
    <div id="headersection">
        <center>
        <button id="backbtn">Back</button>
        <button id="logoutbtn">Logout</button>
        <h1>Online Voting System</h1>
    </div>
        </center>
        <hr>
        <div id="Profile">
            <center><img src="../uploads/<?php echo $userdata['photo'] ?>" height="100" width="100"></center><br><br>
            <b>Name:</b> <?php echo $userdata['name'] ?><br><br>
            <b>Mobile:</b> <?php echo $userdata['mobile'] ?><br><br>
            <b>Address:</b> <?php echo $userdata['address'] ?><br><br>
            <b>Status:</b> <?php echo $userdata['status'] ?><br><br>
        </div>
        <div id="Group"></div>
        <?php
        if($_SESSION['groupsdata']){
            for($i=0; $i<count($groupsdata); $i++){
                ?>
                <div>
                    <img style="float:right" src="../uploads/ <?php echo $groupsdata[$i]['photo'] ?>" height=100 width=100;>
                    <b>Group Name:</b> <?php echo $groupsdata[$i]['name'] ?>"<br>
                    <b>Votes:</b> <?php echo $groupsdata[$i]['votes'] ?>"<br>
                    <form action="#">
                        <input type="hidden" name="gvotes" value="">
                        <input type="submit" name="votebtn" value="Vote" id="votebtn">
                    </form>
                </div>
                <?php
            }
        }
        else{

        }
        ?>
        
</div>
    </body>
</html>