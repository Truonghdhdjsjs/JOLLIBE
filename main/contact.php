<?php
    include("../main/origin/header.php");
?>
    <div class="app">
<?php
    include("../main/origin/nav.php");
?>
         <div class="wapper">
            <section id="contact">
                <h2 class="contact_text">LIÊN HỆ JOLLIBEE</h2>
            </section>
            <section id="funtion_contact">
                <div class="grid">
                    <div class="information">
                        <!-- phần điền thông tin khách hàng  -->
                        <div class="grid_information">
                            <!-- phần thông tin địa chỉ cụ thể  -->
                            <div class="specific_information">
                                <!-- thông tin cụ thể -->
                                <h3 class="header_information"> thông tin liên hệ</h3>
                                <nav class="nav_information">
                                    <ul class="nav_information_list">
                                        <li class="nav_information_item">
                                            <i class="fa-solid fa-signature nav_information_item_icon"></i>
                                            <a href="https://jollibee.com.vn/lien-he" class="nav_information_item_link">Jollibee Việt Nam</a>
                                        </li>
                                        <li class="nav_information_item">
                                            <i class="fa-solid fa-phone nav_information_item_icon"></i>
                                            <a href="tel:1900 - 1533" class="nav_information_item_link">1900 - 1533</a>
                                        </li>
                                        <li class="nav_information_item">
                                            <i class="fa-solid fa-location-dot nav_information_item_icon"></i>
                                            <a href="https://maps.app.goo.gl/Dk9yKpha6sMh6KEX8" class="nav_information_item_link">Tầng 26, Tòa nhà CII Tower, số 152 Điện Biên Phủ, Phường 25, Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="information_box">
                                <form action="https://formspree.io/f/xnqkqeoo" method="POST" enctype="multipart/form-data" method="post">
                                    <table class="tb_information">
                                        <h3 class="information_box_text"> gửi tin nhắn cho chúng tôi</h3>
                                        <div class="tr_information">
                                                <input type="text" name="txtname" class="txtname" placeholder="tên *" required>
                                                <input type="number" name="txtnumber" class="txtnumber" placeholder="số điện thoại *" required>
                                        </div>
                                        <div class="tr_information">
                                            <input type="email" name="email" class="txtemail" placeholder="E-mail *" required>
                                         </div>
                                         <div class="tr_information">
                                           <textarea cols="49px" rows="4px" class="content_information" required  placeholder="Nhập nội dung *" name="message"></textarea>
                                         </div>
                                         <div class="btn_information">
                                            <input type="submit" value="Gửi" id="sbtsent" class="sbtsent" oneclick="sbtsent" name="sbtsent">
                                            <input type="reset" value="Quay lại" name="rstagain" class="rstagain">
                                         </div>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.143224586548!2d106.71515197471125!3d10.800340589349902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a448b474b7%3A0x446d613101e7bf3a!2sCII%20TOWER!5e0!3m2!1svi!2s!4v1700293477240!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>
            </section>
            <footer id="footer">
                <div class="grid">
                    <div class="footer_list">
                        <div class="footer_item">
                            <img src="img/footer/logo-footer.png" alt="logofooter" class="logo_footer">
                        </div>
                        <div class="footer_item">
                            <ul class="footer_item_lisst">
                                <li class="footer_item_lisst_item">
                                    <h5 class="footer_item_lisst_item_texxt">
                                        CÔNG TY TNHH JOLLIBEE VIỆT NAM
                                    </h5>
                                </li>
                                <li class="footer_item_lisst_item">
                                    <a href="https://maps.app.goo.gl/HNW5GFNLQaBimxY57" class="footer_item_lisst_item_link">
                                        Địa chỉ: Tầng 26, Tòa nhà CII Tower, số 152 Điện Biên Phủ, Phường 25, Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam
                                    </a>
                                </li>
                                <li class="footer_item_lisst_item">
                                    <a href="tel:(028) 39309168" class="footer_item_lisst_item_link">
                                        Điện thoại: (028) 39309168
                                    </a>
                                </li>
                                <li class="footer_item_lisst_item">
                                    <a href="tel: 1900-1533" class="footer_item_lisst_item_link">
                                        Tổng đài: 1900-1533
                                    </a>
                                </li>
                                <li class="footer_item_lisst_item">
                                    <a href="https://masothue.com/0303883266-cong-ty-tnhh-jollibee-viet-nam" class="footer_item_lisst_item_link">
                                        Mã số thuế: 0303883266
                                    </a>
                                </li>
                                <li class="footer_item_lisst_item">
                                    <a href="" class="footer_item_lisst_item_link">
                                        Ngày cấp: 15/07/2008 - Nơi cấp: Cục Thuế Hồ Chí Minh
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer_item">
                            <li class="footer_item_lisst_item">
                                <a href="tel:1900-1533" class="footer_item_lisst_item_link" target="_blank">
                                    <img src="img/footer/delivery-lg_1.png" class="foter_img" alt="tongdai">
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <a href="" class="footer_item_lisst_item_link" target="_blank">
                                    Liên hệ
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <a href="" class="footer_item_lisst_item_link" target="_blank">
                                    Chính sách và quy định chung
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <a href="" class="footer_item_lisst_item_link" target="_blank">
                                    Chính sách thanh toán khi đặt hàng
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <a href="" class="footer_item_lisst_item_link" target="_blank">
                                    Chính sách hoạt động
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <a href="" class="footer_item_lisst_item_link" target="_blank">
                                    Chính sách bảo mật thông tin
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <a href="" class="footer_item_lisst_item_link" target="_blank">
                                    Thông tin vận chuyển và giao nhận
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <a href="" class="footer_item_lisst_item_link" target="_blank">
                                    Thông tin đăng ký giao dịch chung
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <a href="" class="footer_item_lisst_item_link" target="_blank">
                                    Hướng dẫn đặt phần ăn
                                </a>
                            </li>
                        </div>
                        <div class="footer_item">
                            <li class="footer_item_lisst_item">
                                <h4 class="footer_item_lisst_texxxt">
                                    HÃY KẾT NỐI VỚI CHÚNG TÔI
                                </h4>
                            </li>
                            <li class="footer_item_lisst_item">
                                <img src="img/footer/icon-fb.png" alt="face" class="footer_item_lisst_item_img">
                                <a href="https://www.facebook.com/JollibeeVietnam" class="footer_item_lisst_item_link">
                                    <label class="footer_item_lisst_item_img_texxt">facebook</label>
                                </a>
                            </li>
                            <li class="footer_item_lisst_item">
                                <img src="img/footer/icon-mail.png" alt="mail" class="footer_item_lisst_item_img">
                                <label class="footer_item_lisst_item_img_texxt">e-mail</label>
                            </li>
                            <li class="footer_item_lisst_item">
                                <img src="img/footer/bocongthuong.png" alt="congthuong" class="footer_item_lisst_item_img">
                            </li>
                            <li class="footer_item_lisst_item">
                                <div class="footer_item_lisst_item_border"></div>
                            </li>
                    
                            <li class="footer_item_lisst_item">
                                <p class="footer_texxt">
                                    TẢI ỨNG DỤNG ĐẶT HÀNG VỚI NHIỀU ƯU ĐÃI HƠN
                                </p>
                            </li>
                            <li class="footer_item_lisst_item">
                                <div class="media">
                                    <img src="img/footer/logo_appstore.png" alt="appstore" class="media-appstore">
                                    <img src="img/footer/logo_playstore.png" alt="playsoter" class="media-playsoter">
                                </div>
                            </li>
                        </div>
                    </div>
                    <div class="footer_booder"></div>
                    <div class="texxtafads">Copyright © JOLLIBEE . All rights reserved. Design by TRUONG</div>
                </div>
             </footer>
         </div>
    </div>
<?php
    include("../main/origin/footer.php");
?>