<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <title>Our Team</title>
    <style>
        /*all the internal css*/
        * {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 100vh;
            width: 100%;
            background: url('/rusabey/background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .logo{
            width: 190px;
            height: auto;
            position: absolute;
            top: -10px;
            left: 10px;
            rotate:10deg ;
        }
        .container {
            display: grid;
            position: absolute;
            top: 230px;
            left: 100px;
            grid-template-columns: auto auto auto;
            column-gap: 20%;
        }
        .container h4{
            font-size: 20px;
            line-height: 40px;
        }
        ul li{
            list-style-type: none;
            font-weight: 500;
            font-size: 15px;
            line-height: 40px;
            text-align: center;
        }
        .container img{
            border: 5px solid rgb(30, 164, 176);
        }
        #harsh-team img {
            width: 230px;
            height: auto;
            border-radius: 50%;
        }
        #rushab-team img{
            width: 250px;
            height: 240px;
            border-radius: 50%;
        }
        #pranil-team img{
            width: 230px;
            height: 240px;
            border-radius:50% ;
        }
        .name{
            text-align: center;
            margin-top: 10px;
        }
        strong {
            color: white;
            position: absolute;
            top: 60px;
            
        }
       strong h1{
        font-size: 30px;
        line-height: 70px;
         font-family: 'Lemon', serif;
       }
        
       strong h3 span{
           color: rgb(151, 53, 53);
       }
        strong h3 {
            text-align: center;
            font-weight: 400;
            word-spacing: 2px;
            font-style: italic;
        }
        /*responsive*/
        @media screen and (max-width:670px){
            .logo{
                width: 140px;
            }
            strong h1{
                font-size: 20px;
                text-align: center;
            }
        }
        @media screen and (max-width:1180px) {
            .container{
                grid-template-columns: auto auto;
            }
           
        }
        @media screen and (max-width:700px){
            .container{
                grid-template-columns: auto;
            
                row-gap: 30px;
                top: 220px;
                left: 85px;
            }
            .main-container{
                height: 100vh;
            }
        }
    </style>
</head>
<body>

    @include('user.header')
    <div class="main-container">
        <img src="/rusabey/logo.png" alt="" class="logo">
        <strong>
            <h1>Our Team Members</h1>
            <h3>e-<span>PLus</span>-Track your health effectively.</h3>
        </strong>
        <!--container that contains all the members-->
        <div class="container" >
            <!--about harsh-->
            <div class="team" id="harsh-team">
                <img src="/rusabey/harshpp.jpg" alt="">
                <h4 class="name">Harsh Chaudhary</h4>
                <ul>
                    <li>BackEnd Developer</li>
                    <li>DataBase Manager</li>
                </ul>
            </div>
            <!--about rushab-->
            <div class="team" id="rushab-team">
                <img src="/rusabey/rushabpp.jpg" alt="rushab">
                <h4 class="name">Rushab Risal</h4>
                <ul>
                    <li>FrontEnd Developer</li>
                    <li>Web-Designer</li>
                </ul>
            </div>
            <!--about pranil-->
            <div class="team" id="pranil-team">
                <img src="/rusabey/pranil.jpg" alt="">
                <h4 class="name">
                    Pranil Poudel
                </h4>
                <ul>
                    <li>FrontEnd Developer</li>
                    <li>UI Designer</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
