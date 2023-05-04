<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Weather App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        @csrf
        <form action="" method="get" enctype="multipart/form-data">
            <h3>Select a country to get the weather</h3>
            <br><br>

            <form class="dropdown-group">
                <select name="country" id="country">
                    <option value="" selected="selected">-- Select Country --</option>

                    <option value="Palestine">ex palestine</option>
                    <option value="Jordan">Jordan</option>
                    <option value="France">France</option>
                    <option value="Morocco">Morocco</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <input type="submit" name="submit" value="submit" class="btn">

                    <br> <br>
            </form>
    </div>

</body>

</html>
