<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script>
  
     $(document).ready(function checkform(){
       
    $("#username").focusout(function(){
      if(document.getElementById('username').value.length<6||document.getElementById('username').value.length>30)
      {
        document.getElementById('username1').innerHTML="username phải từ 6-30 kí tự";
     
      }
      else {
        document.getElementById('username1').innerHTML="";
       
      }
    }); 




     $("#password").focusout(function(){
      if(document.getElementById('password').value.length<6||document.getElementById('password').value.length>30)
      {
        document.getElementById('password1').innerHTML="mật khẩu phải từ 6-30 kí tự";
     
      
      }
      else 
      {
        document.getElementById('password1').innerHTML="";
       
      }
    }); 




     $("#password2").focusout(function(){
      if(document.getElementById('password2').value!=document.getElementById('password').value)
      {
        document.getElementById('password3').innerHTML="mật khẩu không trùng khớp";
     
      }
      else {
        document.getElementById('password3').innerHTML="";
      }
    });
});



function checkform()
    {
      var n=0;
       if(document.getElementById('username').value.length<6||document.getElementById('username').value.length>30)
      {
        n++;
      }


       if(document.getElementById('password').value.length<6||document.getElementById('password').value.length>30)
        n++;

      if(document.getElementById('password2').value!=document.getElementById('password').value)
        n++;

      if(n==0)
        return true;
      else
        return false;
    }
</script>
<style type="text/css">
    .form {
 
  box-sizing: border-box;
 
  width: 360px;
 
  
 
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
 
  padding-bottom: 40px;
 
  border-radius: 3px;
 
}
 
.form h1 {
 
  box-sizing: border-box;
 
  padding: 20px;
 
}
 
 
 
.input {
 
  margin: 40px 25px;
 
  width: 200px;
 
  display: block;
 
  border: none;
 
  padding: 10px 0;
 
  border-bottom: solid 1px #1abc9c;
 
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
 
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
 
  background-position: -200px 0;
 
  background-size: 200px 100%;
 
  background-repeat: no-repeat;
 
  color: #0e6252;
 
}
 
input:focus, input:valid {
 
  box-shadow: none;
 
  outline: none;
 
  background-position: 0 0;
 
}
 
.input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
 
  color: #1abc9c;
 
  font-size: 11px;
 
  transform: translateY(-20px);
 
  visibility: visible !important;
 
}
 
 
 
.submit {
 
  border: none;
 
  background: #1abc9c;
 
  cursor: pointer;
 
  border-radius: 3px;
 
  padding: 6px;
 
  width: 200px;
 
  color: white;
 
  margin-left: 25px;
 
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
 
}
 
.submit:hover {
 
  transform: translateY(-3px);
 
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
 
}
</style>

<div>
<div class="register_header">
        ĐĂNG KÝ
        </div>
        <span>
        Hãy điền đầy đủ thông tin dưới đây để đăng ký
        <br>
        Nếu bạn đã đã có tài khoản, vui lòng <h2><a href="index.php?controller=dangnhap" >click</a></h2> vào đây để đăng nhâp.
        </span>
<form class="form" method="post" action="">
 
  <h1 style="background: #1abc9c">ĐĂNG KÝ</h1>
 <div style="width:260px ;margin:0px auto">
  <input class="input"  name="fullname" placeholder="Họ tên" type="text" required="" id="fullname">
  <span style="color:red; font-size:12px;" id="fullname1"></span>
  <input class="input username" name="username" placeholder="Tên đăng nhập" type="text" required="" id="username">
 <span style="color:red; font-size:12px;" id="username1"></span>
  <input class="input" name="password" placeholder="Password" type="password" required="" id="password">
 <span style="color:red; font-size:12px;" id="password1"></span>
  <input class="input" name="password2" placeholder="Nhập lại Password" type="password" required="" id="password2">
  <span style="color:red; font-size:12px;" id="password3"></span>
   <input class="input" name="sdt" placeholder="Số điện thoại" type="number" required="" id="sdt">
 <span style="color:red; font-size:12px;" id="sdt"></span>
  <input class="input" name="email" placeholder="Email" type="email" required="" id="email">
 <span style="color:red; font-size:12px;" id="email"></span>
  <input class="input" name="diachi" placeholder="Địa chỉ" type="text" required="" id="diachi">
<span style="color:red; font-size:12px;" id="diachi"></span>
  <input type="submit" onclick="return checkform();" class="submit" value="Submit"></button>
 </div>
</form>
</div>
