<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('asset/css/stylee.css') }}">

</head>
<body>
    
<!-- header section starts  -->

    <header>

        <h1 id="heading">Beeline</h1>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul>
               <li><a href="#" onclick="change(this)">{{__('mes.home') }}</a></li>
                <li><a href="#" onclick="change(this)">{{__('mes.beetv')}}</a></li>
                <li><a href="#" onclick="change(this)">{{__('mes.service')}}</a></li>
                <li><a href="#" onclick="change(this)">{{__('mes.plan')}}</a></li>
                <li><a href="#" onclick="change(this)">{{__('mes.contact')}}</a></li>
                <li id="log"><a href="{{ route('login') }}" onclick="show(this)" target="_blank">{{__('mes.login')}}</a></li>
                <li id="user"><a href="{{ route('download') }}">{{__('mes.user')}}</a></li>
                <li id="logout"><a href="#" onclick="show(this)">{{__('mes.logout')}}</a></li>
          </ul>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts   -->
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
   
    <section id="home">
        <div class="content"> <h1>{{__('mes.welcome') }}</h1> <p>{{__('mes.lorem1') }}</p> <a href="#"><button class="btn">{{__('mes.start') }}</button></a>
        </div>

        <div class="image">
             <img src="{{ asset('asset/images/web.png') }}" alt="web"> 
            
        </div>

    </section>

    <!-- home section ends -->
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-- <section id="about"> -->
         <div id="movies_list" class="mov">
        <!-------box-1--------->
        <div class="movies_box">
            <!--------img_1---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://i.pinimg.com/originals/5d/24/59/5d245987e8fd014b24ff6bf99808960a.jpg" alt="Avatar">
            </div>
            <!----------text----------------->
            <a href="#">
                {{__('mes.snyder') }}
            </a>
        </div>

        <div class="movies_box">
            <!--------img_1---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://image.api.playstation.com/vulcan/ap/rnd/202010/0822/GuWErMI21uTbfZ6ohfiF7Yt0.jpg" alt="Avatar">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.mortal')}}</a>
        </div>
    
        <div class="movies_box">
            <!--------img_2---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://i.kym-cdn.com/photos/images/original/002/003/001/ecc.jpeg">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.kong')}}</a>
        </div>

        <div class="movies_box">
            <!--------img_2---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://upload.wikimedia.org/wikipedia/en/f/ff/MI_%E2%80%93_Fallout.jpg">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.mission')}}</a>
        </div>

        <div class="movies_box">
            <!--------img_4---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://images-na.ssl-images-amazon.com/images/I/91o3VNMOp-L._SL1500_.jpg" alt="Shazam">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.shazam')}}</a>
        </div>

        <div class="movies_box">
            <!--------img_3---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://i.pinimg.com/originals/75/d5/10/75d5106643d5ec1903cfc8d929b7bd3a.jpg" alt="Ant man">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.antman')}}</a>
        </div>

        <div class="movies_box">
            <!--------img_4---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://i0.wp.com/batman-news.com/wp-content/uploads/2019/12/Birds-of-Prey-Official-Images-Movie-Poster-3-01.jpeg?quality=80&strip=info&ssl=1" alt="Bird of prey">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.birds')}}</a>
        </div>

        <div class="movies_box">
            <!--------img_3---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://i.pinimg.com/originals/a2/10/bb/a210bb32416b8369004e3c0f79f50c07.jpg" alt="Captain Marvel">
            </div>
            <!----------text----------------->
            <a class="a" target="_blank" href="index.html" onload="load(this)">{{__('mes.cpm')}}</a>
        </div>

        <div class="movies_box">
            <!--------img_2---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://picfiles.alphacoders.com/138/138143.jpg" alt="Reinger">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.single')}}</a>
        </div>

         <div class="movies_box">
            <!--------img_1---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://www.goha.ru/s/A:DK/2r/ZoqktQNTcS.jpg" alt="Avatar">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.spider')}}</a>
        </div>
        

        <div class="movies_box">
            <!--------img_2---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://image.api.playstation.com/vulcan/ap/rnd/202006/1522/XtOzrklk7LdYlvwMJIvskswd.jpg">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.fast')}}</a>
        </div>

        <div class="movies_box">
            <!--------img_2---------->
            <div class="movies_img">
                <div class="quality">HDRip</div>
                <img src="https://upload.wikimedia.org/wikipedia/ru/c/c5/Joker_graphic_novel.jpg">
            </div>
            <!----------text----------------->
            <a href="#">{{__('mes.joker')}}</a>
        </div>

        <div class="content">
            <a href="#"><button class="btn">{{__('mes.learn')}}</button></a>
        </div>
    </div>

        <!-- <div class="image">
            <img src="asset/images/webab.png" alt="">
        </div> -->

        <!-- div class="content">
            <h1>a word about us</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus optio, a numquam esse ipsum iure. Modi autem blanditiis nulla voluptate nostrum temporibus, amet, non quas consequuntur eum tempore totam sequi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, vero repellendus! Accusantium doloremque placeat eaque eligendi quaerat? Cupiditate, quae corrupti?</p>
            <a href="#"><button class="btn">learn more</button></a>
        </div> -->

   <!--  </section> -->
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
    <section id="service">

        <div class="box-container">

            <div class="box">
                <!-- <i class="fas fa-tools"></i> -->
                <i class="far fa-plus-square"></i>
                <h3>{{__('mes.balans')}}</h3>
                <p>{{__('mes.lorem2')}}</p>
            </div>

            <div class="box">
                <!-- <i class="fas fa-code"></i> -->
                <i class="fas fa-hdd"></i>
                <h3>{{__('mes.go')}}</h3>
                <p>{{__('mes.lorem2')}}</p>
            </div>

            <div class="box">
                <!-- <i class="fas fa-mobile"></i> -->
                <i class="fa fa-wifi" aria-hidden="true"></i>

                <h3>{{__('mes.tarif')}}</h3>
                <p>{{__('mes.lorem2')}}</p>
            </div>

            <div class="box">
                <!-- <i class="fas fa-paint-brush"></i> -->
                <i class="far fa-credit-card"></i>
                <h3>{{__('mes.transfer')}}</h3>
                <p>{{__('mes.lorem2')}}</p>
            </div>

            <div class="box">
                <!-- <i class="fab fa-wordpress"></i> -->
                <i class="fas fa-music"></i>
                <h3>{{__('mes.enter')}}</h3>
                <p>{{__('mes.lorem2')}}</p>
            </div>

            <div class="box">
                <i class="fas fa-bullhorn"></i>
               
                <h3>{{__('mes.replace')}}</h3>
                <p>{{__('mes.lorem2')}}</p>
            </div>

        </div>

    </section>

    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
    <section id="plan">

        <div class="box-container">

            <div class="box">
                <h3 class="title">{{__('mes.basic')}}</h3>
                <div class="price">
                    <h1>$10<span>/{{__('mes.mo')}}</span></h1>
                </div>
                <ul>
                    <li>{{__('mes.10gb')}}</li>
                    <li>{{__('mes.100min')}}</li>
                    <li>{{__('mes.100sms')}}</li>
                    <li>{{__('mes.5sub')}}</li>
                </ul>
                <a href="#"><button class="btn">{{__('mes.check')}}</button></a>
            </div>

            <div class="box">
                <h3 class="title">{{__('mes.standard')}}</h3>
                <div class="price">
                    <h1>$20<span>/{{__('mes.mo')}}</span></h1>
                </div>
                <ul>
                    <li>{{__('mes.20gb')}}</li>
                    <li>{{__('mes.200min')}}</li>
                    <li>{{__('mes.200sms')}}</li>
                    <li>{{__('mes.15sub')}}</li>
                </ul>
                <a href="#"><button class="btn">{{__('mes.check')}}</button></a>
            </div>

            <div class="box">
                <h3 class="title">{{__('mes.premium')}}</h3>
                <div class="price">
                    <h1>$30<span>/{{__('mes.mo')}}</span></h1>
                </div>
                <ul>
                    <li>{{__('mes.40gb')}}</li>
                    <li>{{__('mes.400min')}}</li>
                    <li>{{__('mes.400sms')}}</li>
                    <li>{{__('mes.25sub')}}</li>
                </ul>
                <a href="#"><button class="btn">{{__('mes.check')}}</button></a>
            </div>

        </div>

    </section>

    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
    <section id="contact">

         <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" class="box" placeholder="{{__('mes.n')}}">
            <input type="email" name="email" class="box" placeholder="{{__('mes.e')}}">
            <input type="text" name="phone" class="box" placeholder="{{__('mes.ph')}}">
            <textarea name="msg" cols="30" rows="10" class="box message" placeholder="{{__('mes.ms')}}"></textarea>
        
            <input type="submit" class="btn" value="send message">
        
        </form>
        
        <div class="content">
        
            <h3>{{__('mes.contact1')}}</h3>
            <p>{{__('mes.lorem3')}}</p>
            <div class="icons">
                <i class="fas fa-map-marker-alt"></i>{{__('mes.alma')}}
            </div>
            <div class="icons">
                <i class="fas fa-globe"></i> www.yourwebsite.com
            </div>
            <div class="icons">
                <i class="fas fa-phone"></i> +123-456-7890
            </div>
        
        </div>

    </section>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- footer section starts  -->

    <div class="footer">

        <div class="box-container">

            <div class="box">
                <h3>{{__('mes.chose')}}</h3>
                <p>{{__('mes.lorem4')}}</p>
            </div>

            <div class="box">
                <h3>{{__('mes.quick')}}</h3>
                <a href="#">{{__('mes.home')}}</a>
                <a href="#">{{__('mes.beetv')}}</a>
                <a href="#">{{__('mes.service')}}</a>
                <a href="#">{{__('mes.plan')}}</a>
                <a href="#">{{__('mes.contact')}}</a>
            </div>

            <div class="box">
                <h3>{{__('mes.news')}}</h3>
                <p>{{__('mes.subs')}}</p>
                <form action="">
                    <input type="email" placeholder="{{__('mes.e')}}">
                    <input type="submit" class="btn" value="{{__('mes.subscribe')}}">
                </form>
            </div>
        
        </div>

        <h1 class="credit"> {{__('mes.create')}} <a href="#">{{__('mes.be')}}</a> | {{__('mes.all')}} </h1>

    </div>
<!-- footer section ends -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="{{ asset('asset/js/script.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>