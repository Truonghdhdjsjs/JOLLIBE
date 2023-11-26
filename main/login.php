<?php
 include("../main/origin/header.php");
?>
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
                            <input type="email" class="txt-they" name ="txtthey" placeholder="email *" required id="email">
                        </div>
                        <div class="frame btn_icon_pass hidden">
                            <input type="password" class="txt-they inputhiden" name="txtthey" placeholder="mật khẩu *" required id="password inputhiden">
                            <!-- <i class="fa-regular fa-eye eyeopen hidden"></i>
                            <i class="fa-regular fa-eye-slash eyeclose hidden"></i> -->
                        </div>
                    <div class="btn-login">
                        <input type="submit" class="btn_submit" name="sbt" value="Đăng nhập" onclick="return stblogin()">
                    </div>
                </form>
            </div>                
        </section>
     </div>
</div>
<?php
include("../main/origin/footer.php");
?>