<section class="gambar-login" style="background: url('<?php echo base_url('assets/img/1.jpg'); ?>');">
    <div class="form-box">
        <div class="form-value">
            <form action="">
                <h2 class="judul">LOGIN</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Remember Me <a href="forget.php">Forget
                            Password</a></label>

                </div>
                <button><a href="<?php echo base_url('Web'); ?>">Log in</a></button>
                <div class="register">
                    <p>Tidak Punya Akun? Silahkan <a href="">Register</a></p>
                    <p>Silahkan <a href="<?php echo base_url('Siswa'); ?>">Validasi</a> disini</p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>