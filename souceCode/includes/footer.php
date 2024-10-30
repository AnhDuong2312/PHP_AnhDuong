<footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-5 col-md-6 ">
                    <h3 class="footer-head">Đồ Án Chuyên Ngành KTPM</h3>
                    <ul class="menu">
                        <li>Sinh viên thực hiện:</li>
                        <div class="li-info" style="margin-left:10px">
                        <li><a href="#">- Nguyễn Nhật Long - 21103100824</a></li>
                        <li><a href="#">- Nguyễn Minh Hiếu - 21103100813</a></li>
                        <li><a href="#">- Trương Văn Hiếu - 21103100801</a></li>
                        </div>
                        <li><a href="#">Lớp: DHTI15A14HN</a></li>
                        <li><a href="#">Giảng viên hướng dẫn: TS.Tạ Quang Chiểu</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-6">
                    <h3 class="footer-head">Đại Học Kinh Tế Kỹ Thuật Công Nghiệp</h3>
                    <ul class="menu">
                        <li><a href="#"> Điện thoại: (024) 38522201</a></li>
                        <li><a href="#">Email: phonghcth@tlu.edu.vns</a></li>
                        <li><a href="#">Địa chỉ: 175 Tây Sơn, Đống Đa, Hà Nội</a></li>
                    </ul>
                </div>
                <div class="col-2 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            COSSOFT
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- app js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
  <?php if(isset($_SESSION['message']))
  {
  ?>
    alertify.set('notifier','position', 'top-right');
    alertify.success('<?= $_SESSION['message'] ?>');
  <?php 
    unset($_SESSION['message']);
  }
  ?>
</script>
