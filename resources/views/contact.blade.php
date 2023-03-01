<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;

            background-color: DarkCyan;
        }


        h1 {
            text-align: center;

        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
            border: 1px solid gray;
            padding: 18px;
            margin:30px auto;
            background-color: #ccc;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: blue;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: darkblue;
        }
        ul{
            display: flex;
            gap: 18px;

        }
        li{
            list-style-type: none;
            cursor: pointer;
        }
        li a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1 style="color: white; text-align: center; font-size: 20px;background-color: black;font-family: 'Aclonica';">
        <ul>
            <li><a href="{{route('home')}}">contact</a> </li>
        </ul>
    </h1>
    <form action="{{route('request')}}" method="post">
        @csrf

        <h1>Contact Us</h1>
        <label for="name">Name:</label><input type="text" id="name" name="name"
            placeholder="Enter your name" required><label for="address">Address:</label><input type="text"
            id="address" name="address" placeholder="Enter your address"><label for="email">Email:</label><input
            type="email" id="email" name="email" placeholder="Enter your email address" required><label
            for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Enter your message" required></textarea><input type="submit" value="Submit">
    </form>
</body>

</html>
