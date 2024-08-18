<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Message</title>
</head>
<body>
    <h1>Contact Us Message</h1>
    <p><strong>Name:</strong> {{ $contactData['name'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contactData['message'] }}</p>
</body>
</html>
