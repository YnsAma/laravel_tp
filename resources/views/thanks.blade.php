<!doctype html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <style>
        body {
            background-color: DarkCyan;
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
        .flex{
            display: flex;
            flex-direction: column;
            width: 100%;
            height:100%;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <br>
    <h1 style="color: white; text-align: center; font-size: 20px;background-color: black;font-family: 'Aclonica';">
        <ul>
            <li><a href="{{route('contact')}}">contact</a> </li>
            <li><a  href="{{route('home')}}">Acceuil</a></li>
        </ul>
    </h1>


    <div class="flex">
        <h2>Contact Form Submission:</h2>
	<table style="font-size: 16px; padding: 10px; border-collapse: collapse; border: 1px solid black;">
		<tr>
			<th style="padding: 10px; border: 1px solid black;">Field</th>
			<th style="padding: 10px; border: 1px solid black; color:black;">Value</th>
		</tr>
		<tr>
			<td style="padding: 10px; border: 1px solid black;">Name</td>
			<td style="padding: 10px; border: 1px solid black; color:whitesmoke;">{{ $data['name'] }}</td>
		</tr>
		<tr>
			<td style="padding: 10px; border: 1px solid black;">Address</td>
			<td style="padding: 10px; border: 1px solid black; color:whitesmoke;">{{ $data['address'] }}</td>
		</tr>
		<tr>
			<td style="padding: 10px; border: 1px solid black;">Email</td>
			<td style="padding: 10px; border: 1px solid black; color:whitesmoke;">{{ $data['email'] }}</td>
		</tr>
		<tr>
			<td style="padding: 10px; border: 1px solid black;">Message</td>
			<td style="padding: 10px; border: 1px solid black; color:whitesmoke;">{{ $data['message'] }}</td>
		</tr>
	</table>
    </div>

    <br>
    <br>
</body>

</html>
