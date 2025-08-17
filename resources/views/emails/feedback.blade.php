<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Feedback Received</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
    }

    h2 {
        color: #E83036;
    }

    p {
        margin: 8px 0;
    }
    </style>
</head>

<body>
    <h2>New Feedback Received</h2>
    <p><strong>Name:</strong> {{ $feedback->name }}</p>
    <p><strong>Email:</strong> {{ $feedback->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $feedback->message }}</p>
</body>

</html>
