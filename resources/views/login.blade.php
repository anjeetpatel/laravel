<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .login-form {
            background-color: #4CAF50; /* Green background */
            padding: 60px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-form h2 {
            color: white;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px; /* Increased font size */
            font-weight: bold; /* Added bold font weight */
        }
        .login-form label {
            color: white;
        }
        .login-form input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: none;
            border-radius: 3px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: white;
            color: #4CAF50;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Login Form</h2>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>