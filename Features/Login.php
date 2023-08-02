<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        h2,input{
            text-align: center;
        }
        h3{
           
            text-align:center
        }
        h3,input{
            display:inline-block;
        }
        input{
            height:30px
            }
            .continuewith p{
                border:2px solid black;
                width:250px;
                text-align:center;
                padding:10px;
            }
    </style>
</head>
<body>
    <fieldset>
    <h2>Login</h2>
    <form method="post" action="output.php">
        <h3>Username:</h3><input type="text" name="username" placeholder="Username" required><br>
        <h3>Password:</h3><input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Submit">
    </form>
    <div class="continuewith">
    <p style="background-color:blue">Continue with Facebook</p><br>
    <p>Continue with Google</p><br>
    <p>Continue with apple</p><br>
        </div>





        </fieldset>
</body>
</html>
