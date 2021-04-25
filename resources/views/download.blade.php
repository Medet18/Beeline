    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="contact.css">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap');

        :root{
            --orange:#FF9814;
        }

        *{
            font-family: 'Open Sans', sans-serif;
            margin:0; padding:0;
            box-sizing: border-box;
            text-decoration: none;
            outline:none;
            border:none;
            text-transform: capitalize;
            transition: all .2s linear;
        }

        *::selection{
            background:var(--orange);
            color:#fff;
        }

        html{
            font-size: 62.5%;
            overflow-x: hidden;
        }

        section{
            padding:0 7%;
            padding-top: 12rem;
        }

        .btn{
            font-size: 2rem;
            padding:.7rem 3rem;
            background:var(--orange);
            color:#fff;
            margin-top: 1rem;
            cursor: pointer;
        }

        .btn:hover{
            background:#333;
        }

        header{
            position: fixed;
            top:0; left: 0;
            z-index: 1000;
            background:#fff;
            box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
            width:100%;
        }

        header  #heading{
            font-size: 3rem;
            color:#666;
            padding:1rem;
            text-align: center;
        }

        header #menu{
            font-size: 3rem;
            color:#666;
            cursor: pointer;
            margin:1rem;
            display: none;
        }

        header .navbar ul{
            display: flex;
            align-items: center;
            justify-content: center;
            list-style: none;
            background:var(--orange);
            padding:1rem; 
        }

        header .navbar ul li{
            margin:0 1.5rem;
        }

        header .navbar ul li a{
            font-size: 2rem;
            color:#fff;
        }

        header .navbar ul li a:hover{
            color:#444;
        }

        /*contac******************************/
        #contact{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        #contact form{
            flex:1 1 40rem;
            padding:2rem;
            margin:1rem;
            margin-top: 4rem;
            box-shadow: 0 0 .5rem rgba(0,0,0,.3);
        }

        #contact .content{
            flex:1 1 40rem;
            padding:3rem 1rem;
        }

        #contact form .box{
            width:100%;
            color:#333;
            height:4rem;
            font-size: 1.7rem;
            border-bottom: .2rem solid rgba(0,0,0,.3);
            text-transform: none;
            margin:1rem 0;
        }

        #contact form .box::placeholder{
            text-transform: capitalize;
        }

        #contact form .box:focus{
            border-color: var(--orange);
        }

        #contact form .message{
            height:15rem;
            resize: none;
        }

        #contact .content h3{
            font-size: 4rem;
            color:#444;
        }

        #contact .content p{
            font-size: 1.8rem;
            color:#666;
            padding:1rem 0;
        }

        #contact .content .icons{
            font-size: 1.7rem;
            color:#333;
            padding:.7rem 0;
        }

        #contact .content .icons i{
            padding-right: .5rem;
            color:var(--orange);
        }

        .footer{
            background:#333;
        }

        .footer .box-container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .footer .box-container .box{
            margin:2rem;
            flex:1 1 30rem;
        }

        .footer .box-container .box h3{
            font-size: 2.5rem;
            color:#fff;
        }

        .footer .box-container .box p{
            font-size: 1.4rem;
            color:#eee;
            padding:1rem 0;
        }

        .footer .box-container .box a{
            font-size: 1.8rem;
            color:#eee;
            padding:.4rem 0;
            display: block;
        }

        .footer .box-container .box a:hover{
            text-decoration: underline;
        }

        .footer .box-container .box:nth-child(2){
            text-align: center;
        }

        .footer .box-container form{
            display: flex;
            align-items: center;
        }

        .footer .box-container form input[type="email"]{
            height:4.1rem;
            width:100%;
            font-size: 1.7rem;
            padding:0 1rem;
        }

        .footer .box-container form .btn{
            margin-top: 0;
        }

        .footer .box-container form .btn:hover{
            color:#333;
            background:#ccc;
        }

        .footer .credit{
            font-size: 2rem;
            background:#222;
            text-align: center;
            color:#fff;
            padding:2rem 1rem;
            font-weight: normal;
        }

        .footer .credit a{
            color:var(--orange);
        }
        /* media queries  */

        @media (max-width:768px){

            html{
                font-size: 55%;
            }

            .home .content{
                text-align: center;
            }

            .home .content h1{
                font-size: 4rem;
            }

            .about .content h1{
                font-size: 4rem;
            }

        }

        @media (max-width:500px){

            html{
                font-size: 50%;
            }

            header{
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding:0 1rem;
            }

            header #menu{
                display: block;
            }

            header .navbar{
                position: fixed;
                top:6.2rem; right:-120%;
                height:100%;
                width:100%;
                border-top: .2rem solid rgba(0,0,0,.3);
            }

            header .navbar ul{
                height:100%;
                width:100%;
                flex-flow: column;
                background:#fff;
                padding-bottom: 15rem;
            }

            header .navbar ul li{
                text-align: center;
                width:100%;
                margin:1rem 0;
            }

            header .navbar ul li a{
                font-size: 4rem;
                color:#333;
                display: block;
            }

            header .navbar ul li a:hover{
                color:var(--orange);
            }

            .fa-times{
                transform: rotate(180deg);
            }

            header .navbar.nav-toggle{
                right:0;
            }

            section{
                padding-top: 5rem;
            }

            .footer .box-container .box:last-child{
                text-align: center;
            }

            .footer .box-container .box:last-child p{
                font-size: 1.7rem;
            }

            .footer .box-container .box:last-child form{
                flex-flow: column;
            }

            .footer .box-container .box:last-child form .btn{
                margin-top: 1rem;
                width:100%;
            }
        }
    </style>
</head>
<body>
    
<!-- header section starts  -->

<header>

    <h1 id="heading">Upload File</h1>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <!-- ['id' => 1] -->
            <li><a href="{{ route('home', 'en') }}">logout</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- contact section starts  -->

<section id="contact">
        <form action="/down" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Choose File</h1>
            <input type="file" name="image" class="box">
            <input type="submit" name="Upload" class="btn" value="Submit">
        </form>

        <div class="content">
            <h3>Stored images:</h3>
            <p></p>
            <div class="icons">
                <ul>
                    @foreach($photos as $photo)
                        <li style="font-size:20px; margin-left:30px;">{{ $photo-> name}} <img src="{{ asset('storage/images'. $photo->name) }}" alt=""> </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

<!-- contact section ends -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, illum voluptatum. Unde, consequuntur at. Molestias culpa suscipit explicabo possimus iusto?</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">service</a>
            <a href="#">plan</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe us for latest updates</p>
            <form action="">
                <input type="email" placeholder="your email">
                <input type="submit" class="btn" value="subscribe">
            </form>
        </div>

    </div>

    <h1 class="credit"> created by <a href="#">Beeline center</a> | all rights reserved. </h1>

</div>


<!-- jquery cdn link  -->e
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="asset/js/script.js"></script>

</body>
</html>