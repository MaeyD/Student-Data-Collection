<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aditya's Classes</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#student_data_collection").submit(function () {
                var studentName = $("#name").val();
                var address = $("#address").val();
                var email = $("#email").val();
                var mobileNo = $("#phone").val();
                var gender = $("#gender").val();

                // validation
                if (studentName == "") {
                    alert("Please enter student name.");
                    return false;
                }
                if (address == "") {
                    alert("Please enter address.");
                    return false;
                }
                if (email == "") {
                    alert("Please enter email.");
                    return false;
                }
                if (mobileNo == "") {
                    alert("Please enter mobile no.");
                    return false;
                }
                if (gender == "") {
                    alert("Please select gender.");
                    return false;
                }
            });
        });
    </script>
    <!-- <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function (event) {
            const form = document.getElementById('student_data_collection');
            const formData = new FormData(form);
            console.log("At line 46: ", formData);

            fetch('assignment.php', {
                method: 'POST',
                body: {name:'Aditya',email:'aditya@gmail.com',gender:'Male',address:"IIT Patna",phone:9876543210}
            })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script> -->
    <!-- <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const button = document.getElementById('submit-button');
            button.addEventListener('click', (e) => {
                e.preventDefault();
                console.log("entered");
                const form = document.getElementById('student_data_collection');
                const formData = new FormData(form);
                console.log("At line 69: ", formData);

                fetch('assignment.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.text())
                    .then(data => {
                        console.log(data);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            })
        })

    </script> -->

</head>
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
    /* CSS Reset */
    body {
        font-family: sans-serif;
        color: rgb(15, 171, 237);

        background: url(https://wallpaperaccess.com/full/6367135.jpg);
        background-repeat: no-repeat;
        background-size: cover;

    }

    p {
        color: rgb(16, 52, 54);
    }

    .left {
        display: inline-block;
        /* border: 2px solid red; */
        font-weight: bold;
        font-size: large;
        position: absolute;
        left: 60px;
        top: 28px;
    }

    /* .left img {
        width: 136px;
        /* filter: invert(100%); */
    /* } */ 

    .left div {
        line-height: 19px;
        font-size: 32px;
        text-align: center;
    }

    .mid {
        display: block;
        width: 40%;
        margin: auto;
        top: 10px;
        /* border: 2px solid green; */
    }

    .right {
        position: absolute;
        right: 34px;
        top: 36px;
        /* background-color: ; */
        display: inline-block;
        
        /* border: 2px solid yellow; */
    }

    .navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 5px;
  top: 20px;
}

.navbar li {
  display: flex;
  font-size: 15px;
  /* flex-grow: 1; */
  /* text-align: center; */
  margin: auto;
  margin-top: 0px;
}

    .navbar li a {
        color: rgb(14, 225, 236);
        text-decoration: none;
        padding: 34px 23px;

    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: rgb(4, 71, 80);

    }

    .btn {
        font-family: 'Baloo Bhai', cursive;
        margin: 0px 9px;
        background-color: rgb(7, 80, 84);
        color: rgb(255, 255, 255);
        padding: 4px 14px;
        border: 2px solid rgb(128, 128, 128);
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(1, 49, 55);
    }

    .container {
        border: 2px solid rgb(17, 13, 13);
        /*  border of form box */
        margin: 100px 80px;
        padding: 75px;
        width: 33%;
        border-radius: 28px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
        font-family: serif;
        font-weight: bold;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-group select {
        height: 40px;
    }

    .form-group input:focus,
    .form-group select:focus {
        outline: none;
        border-color: rgb(15, 171, 237);
    }

    .container h1 {
        text-align: center;
        color: rgb(33, 168, 231);
    }

    .container button {
        display: block;
        width: 74%;
        margin: 20px auto;
    }
</style>

<body>
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="img/gym.png" alt="">
            <div>Learners Point</div>
        </div>
        <!-- Mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <!-- class="active" -->
                <li><a href="#">About Us</a></li>
                <li><a href="#">Achievements</a></li>
                <li><a href="#">Scorecard</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <!-- Right box for buttons -->
        <div class="right">
            <button class="btn">Call Us Now</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <h1>Make your Future Bright - Join Learners Point </h1>
        <form id="student_data_collection" method="POST" action="assignment.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn" id="submit-button" name="button">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
