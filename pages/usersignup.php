<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <div class="container" id="signUp">
        <h1>Sign Up</h1>
        <form method="post" action="">

            <!-- Sign Up Form -->
            <div class="input-group">
                <label for="fname"> First Name</label>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
            </div>

            <div class="input-group">
                <label for="lname"> Last Name</label>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            </div>

            <div class="input-group">
                <label for="email"> Email Address</label>
                <input type="email" name="email" id="email" placeholder="Email Address" required>
            </div>

            <div class="input-group">
                <label for="password"> Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>

            <input type="submit" id="submit" name="signUp" class="btn" value="Sign Up">

        </form>

        <!-- Sign In Option -->
        <div class="links">
            <p>
                Already Have An Account?
                <span>
                    <a href="#">Sign In</a>
                </span>
            </p>
        </div>
    </div>
</body>
</html>