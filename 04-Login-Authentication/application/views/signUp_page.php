<div class="signUp-modal hidden">
    <div class="head">
        <h2>Sign<span>Up </span></h2>
        <div class="cross">
            <p class="up-close-modal">&times;</p>
        </div>
    </div>

    <div class="text_container">
        <div class="text_Sub_ontainer">
            <?php echo form_open('sign-up'); ?>
            <?php echo form_error('email', '<div class="error">', '</div>'); ?>
            <div class="textfield">
                <div class="fieldIcon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <input type="text" placeholder="Email" name="email" autocomplete="off" value=<?= set_value('email'); ?>>
            </div>


            <?php echo form_error('password', '<div class="error">', '</div>'); ?>
            <div class="textfield">
                <div class="fieldIcon">
                    <i class="fa-solid fa-lock-open"></i>
                </div>
                <input type="password" placeholder="Password" id="password" name="password" autocomplete="off"
                    value=<?= set_value('password'); ?>>
                <div class="eyelash">
                    <i class="fa-solid fa-eye-slash toggle-icon" onclick="showPassword()"></i>
                </div>
            </div>


            <?php echo form_error('passconf', '<div class="error">', '</div>'); ?>
            <div class="textfield">
                <div class="fieldIcon">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <input type="password" placeholder="Confirm Password" id="cpassword" name="passconf" autocomplete="off"
                    value=<?= set_value('cpassword'); ?>>
                <div class="eyelash">
                    <i class="fa-solid fa-eye-slash" onclick="showConPassword()"></i>
                </div>
            </div>

            <div class=" up-check">
                <input type="checkbox" name="check" required="required"><span>I accept the<a href="#">
                        policy & terms</a></span>
            </div>

            <div class="Button">
                <button type="submit" value="REGISTER">SIGN UP</button>
            </div>
            </form>
        </div>


    </div>

    <hr>
    <div class="lower">

        <p>Already have an account?<a href="#"> Sign In</a></p>
    </div>
</div>

</div>