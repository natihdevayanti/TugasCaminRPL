<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Natih's Phonebook</title>
        <!-- css files -->
        <style> 
            html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
            article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
            ol,ul{list-style:none;margin:0px;padding:0px;}
            blockquote,q{quotes:none;}
            blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
            table{border-collapse:collapse;border-spacing:0;}
            a{text-decoration:none;}
            .txt-rt{text-align:right;}
            .txt-lt{text-align:left;}
            .txt-center{text-align:center;}
            .float-rt{float:right;}
            .float-lt{float:left;}
            .clear{clear:both;}
            .pos-relative{position:relative;}
            .pos-absolute{position:absolute;}
            .vertical-base{	vertical-align:baseline;}
            .vertical-top{	vertical-align:top;}
            nav.vertical ul li{	display:block;}
            nav.horizontal ul li{	display: inline-block;}
            img{max-width:100%;}

            body {
                background-image: url('natihbunga .jpg') ;
                background-size: cover;
                font-family: 'Lato', sans-serif;
                text-align:center;
            }
            .header-natih{
                margin: 2% auto;
            }
            .header-natih h1 {
                font-size: 3em;
                letter-spacing: 6px;
                color: white;
                font-weight: 400;
                text-transform: uppercase;
            }
            /*--//header--*/
            
            /*--main--*/
            .main-natih {
                margin: 2% auto;
                   background: rgba(125, 63, 152, 0.52);
                width: 32%;
                font-family: 'Lato', sans-serif;
            }
            .sub-head {
                font-size: 38px;
                padding: 42px;
                color: white;
                text-transform: uppercase;
                letter-spacing: 3px;
            }
            .sub-main{
                position:relative;
            }
            .sub-main input[type="text"],.sub-main input[type="password"]  {
                outline: none;
                font-size: 1.1em;
                margin: 4px 0px 18px 1px;
                color: black;
                padding: 10px 38px;
                border: none;
                border-radius: 2px;
                width: 68%;
                font-family: 'Lato', sans-serif;
            }
            .sub-main input[type="submit"] {
                color: white;
                background: #d52685;
                border: none;
                padding: 14px 50px;
                font-size: 22px;
                border-radius: 2px;
                margin: 17px;
                font-family: 'Lato', sans-serif;
                cursor:pointer;
                text-transform:uppercase;
                transition:0.5s all;
                -webkit-transition:0.5s all;
                -o-transition:0.5s all;
                -moz-transition:0.5s all;
                -ms-transition:0.5s all;
            }
            .sub-main input[type="submit"]:hover {
                background: #d9edf7;
                color: black;
                transition:0.5s all;
                -webkit-transition:0.5s all;
                -o-transition:0.5s all;
                -moz-transition:0.5s all;
                -ms-transition:0.5s all;
            }
            .footer-natih  p {
                font-size: .9em;
                color: white;
            }
            .footer-natih  p a {
                color: #d20962;
            }
            .footer-natih  p a:hover {
               text-decoration:underline;
            }
    
            @media(max-width:1440px){
                .main-natih {
                    width:35%;
                }
            }
            @media(max-width:1366px){
                .main-natih {
                    width:36%;
                }
            }
            @media(max-width:1280px){
                .main-natih {
                    width:40%;
                }
            }
            @media(max-width:1024px){
                .main-natih {
                    width:50%;
                }
            }
            @media(max-width:991px){
                .main-natih {
                    width:52%;
                }
            }
            @media(max-width:800px){
                .main-natih {
                    width:64%;
                }
            }
            @media (max-width: 768px){
                .main-natih {
                    width: 68%;
                }
            }
            @media (max-width: 736px){
                .main-natih {
                    width: 70%;
                }
                . h1 {
                    font-size: 38px;
                }
                .sub-head {
                    font-size: 35px;
                }
            }
            @media (max-width: 667px){
                .main-natih {
                    width: 78%;
                }
                . h1 {
                    font-size: 39px;
                }
            }
            @media (max-width: 640px){
                .main-natih {
                    width: 80%;
                }
                . h1 {
                    letter-spacing: 5px;
                }
            }
            @media (max-width: 600px){
                .main-natih {
                    width: 84%;
                }
                .header-natih h1 {
                    letter-spacing: 4px;
                }
            }
            @media (max-width: 568px){
                .main-natih {
                    width: 88%;
                }
                .header-natih h1 {
                    letter-spacing: 3px;
                }
            }
            @media (max-width: 480px){
                .main-natih {
                    width: 92%;
                }
                .header-natih h1 {
                    font-size: 2.8em;
                    letter-spacing: 0px;
                }
                .sub-head {
                    padding: 36px;
                }
                .footer-natih p {
                    font-size: 13px;
                }
                .footer-natih {
                    padding: 11px 0px 32px 0px;
                }
            }
            @media (max-width: 414px){
                .main-natih {
                    width: 95%;
                }
                .header-natih h1 {
                    letter-spacing:3px;
                    font-size: 34px;
                }
                .header-natih {
                    margin: 8% auto;
                }
                .sub-main input[type="submit"] {
                    padding: 14px 70px;
                    margin: 52px;
                }
                .sub-head {
                    font-size: 30px;
                }
            }
            @media (max-width: 375px){
                .icon1, .icon2, .icon3, .icon4, .icon5, .icon6 {
                    left: 26px;
                }
                .header-natih h1 {
                    letter-spacing: 3px;
                    font-size: 32px;
                }
                .sub-head {
                    font-size: 30px;
                }
            }
            @media (max-width: 384px){
                .header-natih h1 {
                    font-size: 32px;
                }
                .sub-head {
                    font-size: 28px;
                }
                .footer-natih {
                    line-height: 23px;
                }
                .sub-main input[type="submit"] {
                    padding: 14px 70px;
                    margin: 19px;
                }
                .sub-head {
                    padding: 18px 0 10px 0;
                }
            }
            @media (max-width: 320px){
                .header-natih h1 {
                    letter-spacing: 3px;
                    font-size: 34px;
                }
                .sub-head {
                    font-size: 28px;
                }
                .sub-main input[type="submit"] {
                    padding: 14px 49px;
                }
                .footer-natih {
                    line-height: 23px;
                }
            }
            </style>
 
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
        </head>
        <body>
            <div class="header-natih"> 
                <h1>Natih's Phonebook</h1>
            </div>
        <div class="main-natih">
            <h2 class="sub-head">Fill in the blanks</h2>
                <div class="sub-main">	
                    <form action="/natih" method="post">
                        @csrf
                        <input placeholder="First Name" name="Name" class="name" type="text" required="">
                          
                        <input placeholder="Last Name" name="Name2" class="name2" type="text" required="">
                           
                        <input placeholder="Phone Number" name="Number" class="number" type="text" required="">
                            
                        <input placeholder="Work Number" name="Number2" class="number2" type="text">
                           
                        <input placeholder="Occupation" name="job" class="job" type="text" required="">

                        <input placeholder="Email" name="mail" class="mail" type="text" required="">
                          
                        <input  placeholder="Address" name="Address" class="Address" type="text" required="">
                           
                        <input  placeholder="Birthday" name="Birthday" class="Birthday" type="text" required="">
                
                        <input type="submit" value="create contact"> 
                    </form>
                </div>
                <div class="clear"></div>
        </div>
        <!--//main-->
        
        <!--footer-->
        <div class="footer-natih">
            <p>&copy; 2019 Natih's Contact Book . All rights reserved </p>
        </div>
        <!--//footer-->
        
        </body>
        </html>