<?php
    include("../main/origin/header.php");
?>
    <div class="app">
    
<?php
    include("../main/origin/nav.php");
?>
         <div class="wapper">
            <section id="login">
                <div class="grid_login">
                    <form action="" method="post">
                        <h2 class="login_text">đăng ký tài khoản</h2>
                        <div class="tab">

                            <div class="frame">
                                <input type="text" class="txt-they" name="txtthey" placeholder="Họ *" required id="they">
                            </div>
                            <div class="frame">
                                <input type="text" class="txt-they" name="txtthey" placeholder="tên *" required id="name">
                            </div>
                            <div class="frame">
                                <input type="number" class="txt-they" name="txtthey" placeholder="số điện thoại *" required id="number">
                            </div>
                            <div class="frame">
                                <input type="email" class="txt-they" name ="txtthey" placeholder="email *" required id="email">
                            </div>
                            <div class="frame btn_icon_pass hidden">
                                <input type="password" class="txt-they inputhiden" name="txtthey" placeholder="mật khẩu *" required id="password inputhiden">
                                <!-- <i class="fa-regular fa-eye eyeopen hidden"></i>
                                <i class="fa-regular fa-eye-slash eyeclose hidden"></i> -->
                            </div>
                            <div class="frame btn_icon_pass hidden">
                                <input type="password" class="txt-they inputhiden" name="txtthey" placeholder="Xác nhận mật khẩu *" required id="respassword inputhiden">
                                <!-- <i class="fa-regular fa-eye eyeopen hidden"></i>
                                <i class="fa-regular fa-eye-slash eyeclose hidden"></i> -->
                            </div>
                            <div class="frame">
                                <input type="date" class="txt-they" name="txtthey" placeholder="Ngày sinh *" required id="date">
                            </div>
                            <div class="frame" >
                               <select id="gt" class="txt-they" required  value="Chọn giới tính" id="sex ">
                                    <option selected>Nam</option>
                                    <option >Nữ</option>
                                    <option>Khác</option>
                               </select>
                            </div>
                        </div>
                        <div class=" left">
                            <input type="checkbox" class="txtchechk" name="txtthey"  required id="check">
                            <a href="" class="checkbox-link">Đồng ý với Chính sách, quy định chung và Thông báo bảo mật cá nhân</a>
                        </div>
                        <div class="frame  left">
                            <input type="checkbox" class="txtchechk" name="txtthey"  required id="check">
                            <a href="" class="checkbox-link">Nhận chương trình khuyến mãi qua email</a>
                        </div>
                        <div class="btn-login">
                            <input type="submit" class="btn_submit" name="sbt" value="Đăng nhập" onclick="return stblogin()">
                            <div class="forget">
                                <label class="forget_text">Bạn đã quên tài khoản ?<a href="login.html">Đăng nhập</a></label>
                            </div>
                        </div>
                    </form>
                </div>                
            </section>
         </div>
    </div>
</body>
<script src="js/hidden.js"></script>
<script src="js/note.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>