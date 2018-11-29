
<link href="demo.css" rel="stylesheet" type="text/css"/>
<link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
#form-wrapper
{
    
    
    width: 700px;
    height: 500px;
    padding: 20px;    
    position: relative;
    border: 1px solid #ddd;
    
    background-color: #fff;
    background-image: -moz-repeating-linear-gradient(135deg,#844049,#844049,
                                                            #fff 50px, #fff 150px,
                                                            #3e4996 100px, #3e4996,
                                                            #fff 200px, #fff 300px);

    background-image: -webkit-gradient(linear, left top, right bottom,
                                        color-stop(5%, #fff), color-stop(5%, #fff),                                     
                                        color-stop(15%, #844049), color-stop(15%, #fff),
                                        color-stop(25%, #fff), color-stop(25%, #fff),                                       
                                        color-stop(35%, #3E4996), color-stop(35%, #fff ),
                                        color-stop(45%, #fff), color-stop(45%, #fff),                                       
                                        color-stop(55%, #844049), color-stop(55%, #fff),
                                        color-stop(65%, #fff), color-stop(65%, #fff),                                       
                                        color-stop(75%, #3E4996), color-stop(75%, #fff ),
                                        color-stop(85%, #fff), color-stop(85%, #fff),
                                        color-stop(95%, #844049), color-stop(95%, #fff)                             
                                       );                                                           

    background-image: -webkit-repeating-linear-gradient(135deg,#844049,#844049,
                                                            #fff 50px, #fff 150px,
                                                            #3e4996 100px, #3e4996,
                                                            #fff 200px, #fff 300px);   
 
    background-image: -o-repeating-linear-gradient(135deg,#844049,#844049,
                                                            #fff 50px, #fff 150px,
                                                            #3e4996 100px, #3e4996,
                                                            #fff 200px, #fff 300px); 
    
    background-image: -ms-repeating-linear-gradient(135deg,#844049,#844049,
                                                            #fff 50px, #fff 150px,
                                                            #3e4996 100px, #3e4996,
                                                            #fff 200px, #fff 300px);
    
    background-image: repeating-linear-gradient(135deg,#844049,#844049,
                                                            #fff 50px, #fff 150px,
                                                            #3e4996 100px, #3e4996,
                                                            #fff 200px, #fff 300px);                                                
}

#form-wrapper:before, #form-wrapper:after
{
    z-index: -1;
    position: absolute;
    content: "";
    bottom: 15px;
    left: 10px;
    width: 50%;
    top: 80%;
    max-width:300px;
    background: rgba(0, 0, 0, 0.7);
    -webkit-box-shadow: 0 15px 10px rgba(0,0,0, 0.7);
    -moz-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
    box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
    -webkit-transform: rotate(-3deg);
    -moz-transform: rotate(-3deg);
    -o-transform: rotate(-3deg);
    -ms-transform: rotate(-3deg);
    transform: rotate(-3deg);
}

#form-wrapper:after
{
    -webkit-transform: rotate(3deg);
    -moz-transform: rotate(3deg);
    -o-transform: rotate(3deg);
    -ms-transform: rotate(3deg);
    transform: rotate(3deg);
    right: 10px;
    left: auto;
}

#form-wrapper form
{
    background: #fff;
    height: 500px;
}

#form-wrapper #form-inner
{
    margin: 0 auto;
    padding: 35px 0;
    width: 545px;
}
    
#form-wrapper label
{
    font: bold 18px/25px Corbel, Arial, Helvetica; 
    text-shadow: 0 1px 0 #fff, 0 2px 0 #ccc;
    float: left; 
    margin-right: 10px; 
    width: 120px; 
}

#form-wrapper .input
{
    font: 15px Arial, Helvetica; 
    padding: 5px;
    margin: 0 0 20px 0;
    border: 1px solid #b9bdc1; 
    width: 400px; 
    color: #797979;
    
    -moz-box-shadow: 0 2px 4px #bbb inset;
    -webkit-box-shadow: 0 2px 4px #bbb inset;
    box-shadow: 0 2px 4px #bbb inset;
    
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    
}

#form-wrapper .input:focus
{
    background-color: #E7E8E7;
    outline: 0;
}

#form-wrapper .textarea
{
    height:150px;   
}

#form-wrapper .button
{
    float: right;
    margin: 10px 0 0 0;
    padding: 7px 15px;
    cursor: pointer;   
    color: #fff;
    font: bold 13px Tahoma, Verdana, Arial;
    text-transform: uppercase;
    overflow: visible; /* IE6/7 fix */
    border: 0;  
   
    background-color: #7089b3;
    background-image: -moz-linear-gradient(#a5b8da, #7089b3);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#a5b8da), to(#7089b3));    
    background-image: -webkit-linear-gradient(#a5b8da, #7089b3);
    background-image: -o-linear-gradient(#a5b8da, #7089b3);
    background-image: -ms-linear-gradient(#a5b8da, #7089b3);
    background-image: linear-gradient(#a5b8da, #7089b3);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#a5b8da', EndColorStr='#7089b3');     

    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    
    text-shadow: 0 1px 0 rgba(0,0,0,.3);
    
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5), 0 3px 0 rgba(0, 0, 0, 0.7);
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5), 0 3px 0 rgba(0, 0, 0, 0.7);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5), 0 3px 0 rgba(0, 0, 0, 0.7);
}

#form-wrapper .button:hover
{
    background-color: #a5b8da;
    background-image: -moz-linear-gradient(#7089b3, #a5b8da);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#7089b3), to(#a5b8da));      
    background-image: -webkit-linear-gradient(#7089b3, #a5b8da);
    background-image: -o-linear-gradient(#7089b3, #a5b8da);
    background-image: -ms-linear-gradient(#7089b3, #a5b8da);
    background-image: linear-gradient(#7089b3, #a5b8da);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#7089b3', EndColorStr='#a5b8da');     
}

#form-wrapper .button:active
{
    background: #64799e;
    position: relative;
    top: 2px;
    
    -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.7) inset;
    -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.7) inset;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.7) inset; 
}

/***************************************************************/
/*************** Footer Bar Style ******************************/
/***************************************************************/
.footer-bar
{
    display: block;
    width: 100%;
    height: 45px;
    line-height: 45px;
    background: #111;
    border-top: 1px solid #E62600;
    position: fixed;
    bottom: 0;
    left: 0;
}
.footer-bar .article-wrapper{
    font-family: arial, sans-serif;
    font-size: 14px;
    color: #888;
    float: left;
    margin-left: 10%;
}
.footer-bar .article-link a, .footer-bar .article-link a:visited{
    text-decoration: none;
    color: #fff;
}
.site-link a, .site-link a:visited{
    color: #888;
    font-size: 14px;
    font-family: arial, sans-serif;
    float: right;
    margin-right: 10%;
    text-decoration: none;
}
.site-link a:hover{
    color: #E62600;
}
    </style>

<body>

<div id="form-wrapper" class="lienhe">
    <form method="post" action="">
        <div id="form-inner">

            <label for="name">Name:</label>
            <input type="text" class="input" value="<?php echo isset($arr_khachhang["fullname"])? $arr_khachhang["fullname"]:""; ?>" name="name" placeholder="John Doe" required>
        
            <label for="email">Email:</label>
            <input type="email" class="input" value="<?php echo isset($arr_khachhang["email"])? $arr_khachhang["email"]:""; ?>" name="email" placeholder="john.doe@email.com" required>
        
            <label for="message">Message:</label>
            <textarea class="input textarea" name="message" placeholder="Your message here" required></textarea>  
            <label for="message"></label>
            <?php echo $captcha_new ?>

             <label for="captcha">nhập mã captcha:</label>
            <input type="text" class="input" name="captcha" placeholder="captcha">
             <input type="submit" class="button" value="Send message">

        </div>
    </form>
</div>
</body>
</html>