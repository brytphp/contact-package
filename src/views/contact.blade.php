<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <form role="form" action="{{route('submit_contact_form')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label><br>
            <input type="next" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email address:</label><br>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="message">Message:</label><br>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>
</html>
