function stblogin() {
   var they= document.getElementById('they');
   if(they.value=="")
   {
     alert(" Họ chưa được nhập");
     return false;
   }
   var name= document.getElementById('name');
   if(name.value=="")
   {
     alert(" Tên chưa được nhập");
     return false;
   }
   var number= document.getElementById('number');
   if(number.value=="")
   {
     alert(" Số điện thoại chưa được nhập");
     return false;
   }
   var email= document.getElementById('email');
   if(email.value=="")
   {
     alert(" Email  chưa được nhập");
     return false;
   }
   var password= document.getElementById('password');
   if(password.value=="")
   {
     alert(" pass chưa được nhập");
     return false;
   }
   var respassword= document.getElementById('respassword');
   if(respassword.value=="")
   {
     alert(" Nhập lại pass chưa được nhập");
     return false;
   }
   if(password.value!=respassword.value)
   {
    alert(" Mật khẩu không trùng khớp!")
    cancelAnimationFrame
    alert(" Hãy nhập lại")
    return false;
   }
   var date= document.getElementById('date');
   if(date.value=="")
   {
     alert(" Ngày chưa được nhập");
     return false;
   }
   return true;
//    var check= document.getElementById('check');
//    if(check.value=="")
//    {
//      alert(" Ngày chưa được nhập");
//      return false;
//    }
}