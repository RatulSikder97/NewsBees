<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- stylesheet -->
    <link rel="stylesheet" href="asset/css/style.css">
    <title>NewsBee</title>
</head>

<body>
    <!-- header start -->
    <header>
        <h1 class="logo">News BEEs</h1>
        <div class="user-setting">
            
        </div>
    </header>
    <!-- header end -->

    <!-- main content section start -->
    <section class="main-content">
        <h2 class="section-title">User Registration</h2>
        <form action="<=$_SERVER['PHP_SELF']>" method="post" class="auth-form">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="input-group">
                <label for="country">Country</label>
                <input type="text" name="country" id="country">
            </div>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>

            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <input type="submit" value="Register" class="btn btn-green">
        </form>

    </section>
    <!-- main content section end -->

    <!-- footer start-->
    <footer>

    </footer>
    <!-- footer end-->

</body>

</html>