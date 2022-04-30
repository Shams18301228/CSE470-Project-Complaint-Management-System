<!DOCTYPE>
<html lang="en">

<head>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;

        }

        body {
            background: #f22cb3;
        }

        h1 {
            text-align: center;
            margin: 50px auto 100px;
            color: white;

        }

        .main {
            width: 100%;
            min-height: 380px;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .service {
            background: white;
            padding: 30px;
            border-radius: 10px;
            position: absolute;
            bottom: 0;
            box-shadow: 0 0 20px -15px black;
            z-index: 1;
            transition: transform .7s;
        }

        .service-logo {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 10px solid #f22cb3;
            margin: -90px auto 0;
            background: white;
        }

        .service-logo img {
            width: 50px;
            margin-top: 30px;

        }

        .service h4 {
            height: 35px;
            width: 80%;
            background: white;
            margin: 50px auto;
            position: relative;
        }

        .service h4::after {
            content: '';
            width: 40px;
            height: 30px;
            background: linear-gradient(to right, white, #5205f0);
            position: absolute;
            right: -5px;
            top: -5px;
            z-index: -1;
        }

        .service h4::before {
            content: '';
            width: 40px;
            height: 30px;
            background: linear-gradient(to right, #5205f0, white);
            position: absolute;
            left: -5px;
            bottom: -5px;
            z-index: -1;
        }

        .shadow-1 {
            height: 200px;
            width: 80%;
            background: white;
            position: absolute;
            border-radius: 10px;
            bottom: 0;
            left: 10%;
            z-index: -1;
            box-shadow: 0 0 20px -15px black;
            transition: transform .7s;
        }

        .shadow-2 {
            height: 200px;
            width: 64%;
            background: white;
            position: absolute;
            border-radius: 10px;
            bottom: 0;
            left: 18%;
            z-index: -2;

        }

        .main:hover .service {
            transform: translateY(-50px);

        }

        .main:hover .shadow-1 {
            transform: translateY(-25px);
        }
    </style>
</head>

<body>

    <h1>About Us</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="images/Mine.jpg" alt="">

                        </div>
                        <h4>Md Isteak Shams</h4>
                        <p>Keeping customers safety in mind
                            we run this system and try to solve
                            each of the customers complaints with
                            a small amount of revenue.
                        </p>

                    </div>
                    <div class="shadow-1"></div>
                    <div class="shadow-2"></div>
                </div>
                

            </div>
            <div class="col-md-4">
            <div class="main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="../assets/img/employees/employee3.jpg" alt="">

                        </div>
                        <h4>Evelyn Haynes</h4>
                        <p>Following government's order we lead
                            our system and provide a decent and
                            try to resolve their issues.Customers
                            satisfaction is our goal.
                        </p>

                    </div>
                    <div class="shadow-1"></div>
                    <div class="shadow-2"></div>
                </div>

            </div>
            
            <div class="col-md-4">
            <div class="main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="../assets/img/employees/employee2.jpg" alt="">

                        </div>
                        <h4>Lisa Mary</h4>
                        <p>Our employees works 24/7 and 
                            after verifying we try
                            to solve each of the customer's 
                            issue  keeping in mind about thier
                            security.

                        </p>

                    </div>
                    <div class="shadow-1"></div>
                    <div class="shadow-2"></div>
                </div>

            </div>
        </div>
    </div>



</body>

</html>