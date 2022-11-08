<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css\donationstyle.css">

</head>
<body>

<div class="container">

    <form action="helperdonation.php"method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">Description</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="Enter User Name" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="Enter Email ID" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="Enter address" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="khulna">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Bangladesh">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Donation</h3>

                <div class="inputBox">
                    <span>donation accepted:</span>
                    <img src="image/rocket.jpeg" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Bikash">
                </div>
                <div class="inputBox">
                    <span>    number :</span>
                    <input type="text" name="mobile" placeholder="Enter Mobile Number" required>
                </div>
                <div class="inputBox">
                    <span>total amount:</span>
                    <input type="text" name="amount" placeholder="Enter Total amount" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Transition id:</span>
                        <input type="text" name="id" placeholder="Enter Transition id" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" class ="submit-btn" name="submit-btn" value="Donation">

        <p><br><a href ="labdonation.php" class="bt">Go to home</a></p>
    </form>

</div>    
    
</body>
</html>