<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('background-image.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            width: 400px;
            padding: 40px;
            position: absolute;
            background: white;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #333;
        }

        .google-login button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .google-login button img {
            width: 20px;
            margin-right: 10px;
        }

        .google-login button:hover {
            background: #f1f1f1;
        }

        .textbox {
            position: relative;
            margin-bottom: 30px;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            background: #f2f2f2;
            border: none;
            outline: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .textbox input::placeholder {
            color: #aaa;
        }

        .forgot-password {
            margin-bottom: 20px;
        }

        .forgot-password a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            background: #28a745;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn:hover {
            background: #218838;
        }

        .signup-link {
            font-size: 14px;
        }

        .signup-link a {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <form>
                <h2>Login</h2>
                <div class="google-login">
                    <button type="button">
                        <img src="google-logo.png" alt="Google logo">
                        Login with Google
                    </button>
                </div>
                <p>or</p>
                <div class="textbox">
                    <input type="text" placeholder="Username">
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password">
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">LOGIN</button>
                <div class="signup-link">
                    Don't have an account? <a href="#">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
