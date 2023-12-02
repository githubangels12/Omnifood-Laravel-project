<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnifood</title>
    <!-- <link rel="stylesheet" href="Omnilaravel.css"> -->
</head>

<style>
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
.Alpha{
    margin-left: 30px; 
    display: flex; 
    font-size: larger;
    }
    .Ab{
        height: 60px; 
        width: 40px; 
        margin-top: -7px;
    }
    .topicons{
        display: flex; 
        margin-left: 400px;
    }
    .top{
        display: flex;
    }
    .topicons1{
        margin-left: 40px; 
        margin-top: 35px;
       
    }
    .topicons1:hover{
        cursor: pointer;
        
    }
    .topicons2{
        height: 40px;
        border-radius: 7px; 
        font-size: medium; 
        background-color: tomato; 
        margin: 25px; color: white; 
        margin-left: 50px;
        cursor: pointer;
    }
    .Body{
        font-size: xx-large;
        margin-bottom: 10px
    }
    .Body2{
        margin-bottom: 15px
    }
    .B1{
        background-color: tomato; 
        border-radius: 7px; 
        padding: 20px;
        cursor: pointer;
    }
    .B2{
        margin-left: 15px; 
        background-color: white; 
        padding: 20px; 
        border-radius: 7px;
        cursor: pointer;
    }
    .Last{
        display: flex;
    }
    .Eat{
        height: 400px; 
        width: 500px; 
        margin-left: 550px;
      
    }
    .Health{
        margin: 30px;
    }
    .Fit{
        height: 602px;
    }
</style>

<body class="Fit">
    <div class="Background">
        <div class="top">
            <div class="Alpha">
                <h1>OMNIF</h1>
                <img class="Ab" src="./Infinity.png" alt="" ;>

                <h1>D</h1>
            </div>

            <div class="topicons">
                <h3 class="topicons1">How it works</h3>
                <h3 class="topicons1">Meals</h3>
                <h3 class="topicons1">Testimonials</h3>
                <h3 class="topicons1">Pricing</h3>

            </div>
            <button class="topicons2">Try for free</button>
            <h3 class="topicons1"><a href="{{route('login')}}">Login</a></h3>
            <h3 class="topicons1"><a href="{{route('register')}}">Register</a></h3>
        </div>

        <div class="Last">

            <div class="Health">
                <div>
                    <h1 class="Body">A healthy meal <br> delivered to your <br> door, every single day</h1>

                    <h2 class="Body2">The smart 365-day-per-year food <br> subscription that will make you eat <br>
                        healthy again. Tailored to your <br> personal tastes and <br> nutritional needs.</h2>
                </div>
                <div>
                    <button class="B1">Start eating well</button>
                    <button class="B2">learn more ↓ </button>
                </div>
            </div>
            <div >
                <img class="Eat" src="./Eating.jpg">
            </div>

        </div>

    </div>
</body>
</html>


<style>
   .Testimonial-section{
        display: grid;
        grid-template-columns: 55% 45%; 
        background-color: antiquewhite;
    }
    
    .Customers-section{
        margin: 50px;
        margin-top: 200px;
        
    }
    .test{
        color: darkorange;
        margin-bottom: 20px;
    }
    .intro{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bolder;
        font-size: 35px;
        margin-bottom: 40px;
    }
    .Left1, .Left2{
        display: block;
    }
    .Left{
        display: grid ;
        /* grid-auto-flow: column; */
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
       
    }
    .pix1{
        height: 50px;
        width: 50px;
        border-radius: 50%;
        margin-top: 20px;
        margin-bottom: 10px;
    }
   
    .Gallery-section{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
            
    }
    .Gallery-img{
        overflow: hidden;
    }
    .Gallery-img>img{
        width: 100%;
        height: 100%;
        transition: 1s ;
    
    }
    .Gallery-img>img:hover{
        transform: scale(1.2);
    }
    .reason{
        line-height: 15px;
    }
    .Gal-img{
        height: 50px;
        width: 40px;
         margin: 15px;
        /* margin-left: -55px; */
    }
</style>

<body>
    <div class="Testimonial-section">
        <div class="Customers-section">


            <div class="A">
                <h4 class="test">TESTIMONIALS</h4>
                <h1 class="intro">Once you try it, you can't go back.</h1>
            </div>


            <div class="Left">
                <div class="Left1">
                    <div class="">
                        <figure>
                            <img class="pix1" src="photo-1.jpg">
                        </figure>
                        <h6 class="reason">Inexpensive, healthy and great tasting meals, without even having to
                            order manually! it feels truly margical.</h6>
                        <h3>-Dave Bryson</h3>
                    </div>
                    <div class="">
                        <figure>
                            <img class="pix1" src="photo-3.jpg">
                        </figure>
                        <h6 class="reason">Omnifood has a life saver! I just started a company, so there's no time for
                            cooking. I couldn't live without my daily meals now.</h6>
                        <h3>-Steve Miller</h3>
                    </div>
                </div>
                <div class="Left2">
                    <div class="">
                        <figure>
                            <img class="pix1" src="photo-2.jpg">
                        </figure>
                        <h6 class="reason">The algorithm is crazy good, it chooses the right meal for me every time.
                            It's
                            amazing not to worry about food anymore!</h6>
                        <h3>-Ben Hadley</h3>
                    </div>
                    <div class="">
                        <figure>
                            <img class="pix1" src="photo-4.jpg" alt="">
                        </figure>
                        <h6 class="reason">I got Omnifood for the whole family, and it frees up so much time! Plus,
                            everything
                            is organic and vegan and without plastic</h6>
                        <h3>-Hanah Smith</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="Gallery-section">
            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-1.jpg" alt="">
            </figure>

            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-2.jpg" alt="">
            </figure>

            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-3.jpg" alt="">
            </figure>

            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-4.jpg" alt="">
            </figure>

            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-5.jpg" alt="">
            </figure>

            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-6.jpg" alt="">
            </figure>

            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-7.jpg" alt="">
            </figure>

            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-8.jpg" alt="">
            </figure>

            <figure class="Gallery-img">
                <img class="Gal-img" src="IMG-9.jpg" alt="">
            </figure>
        </div>
    </div>
</body>
</html>


<style>
.Dashboard{
        display: flex;
        margin-bottom: 1px;
        
        
    }
    .omnif{
        width: fit-content;
    }
    
    .Firstback{
        background-color:white;
        height: 100px;
        margin-left: 0px;
        margin-right: 0px;
        
    }
    .alpha{
        margin-top: 10px;
    }
    .logo{
        height: 85px;
        width: 40px;
        /* padding-bottom: 35px; */

    }
    .All{
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        margin-top: 0px;
        margin-left: 100px;
        padding-top: 15px;
        
    }
    .font1{
        line-height: 0.5px;
        margin-top: 40px;
    }
    
    .font2{
        margin-top: 0px;
        line-height: 0px;
    }
    .Contact, .Account, .Company, .Resources{
        margin-top: 15px;
        line-height: 30px;
        color: darkgray;
        
    }
    
    h6{
        margin-bottom: 12px;
        color: gray;
    }
    h4{
        color: grey;
    }
    .Top{
        color:black
    }
    .icons{
        padding: 25px;
        margin-bottom: 10px;
        margin-right: 25px;
    }
</style>

<body class="Body">
    <div class="Firstback">
        <div class="All">

            <div class="alpha">
                <div>
                    <div class="Dashboard">
                        <h1 class="omnif">OMNIF</h1>
                        <img class="logo" src=" Infinity.png">
                        <h1 class="D1">D</h1>
                    </div>
                </div>
                <div class="icons">

                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div>
                    <h6 class="copy">copyright &#169 2027 by Omnifood.</h6>
                    <p>
                    <h6>Inc. All Rights reserved</h6>
                    </p>
                </div>

            </div>

            <div class="Contact">
                <h4 class="Top">Contact us</h4>
                <h6 class="font1">623 Harrison st., 2nd Floor, </h6>
                <h6 class="font2">San Francisco, CA 94107</h6>
                <h6 class="font1">415-201-6370</h6>
                <h6 class="font2"> hello@omnifood.com</h6>
            </div>

            <div class="Account">
                <h4 class="Top">Account</h4>
                <h4>Create Account</h4>
                <h4>Sign in</h4>
                <h4>iOS app</h4>
                <h4>Android app</h4>

            </div>

            <div class="Company">
                <h4 class="Top">Company</h4>
                <h4>About Omnifood</h4>
                <h4>For Business</h4>
                <h4>Cooking Partners</h4>
                <h4>Careers</h4>
            </div>

            <div class="Resources">
                <h4 class="Top">Resources</h4>
                <h4>Recipe Directory</h4>
                <h4>Help Center</h4>
                <h4>Pricacy and terms</h4>

            </div>

        </div>

    </div>

</body>

</html>