<div class="signIn-modal hidden">
    <div class="head">
        <h2>Sign<span>In</span></h2>
        <div class="cross">
            <p class="in-close-modal">&times;</p>
        </div>
    </div>

    <div class="text_container">
        <div class="text_Sub_ontainer">
            <?= form_open('sign-in'); ?>
            <div class="textfield">
                <div class="fieldIcon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <input type="text" placeholder="Email" name="email" autocomplete="off" value=<?= set_value('email'); ?>>
            </div>

            <div class="textfield">
                <div class="fieldIcon">
                    <i class="fa-solid fa-lock-open"></i>
                </div>
                <input type="password" placeholder="Password" name="password" id="inPassword" autocomplete="off"
                    value=<?= set_value('password'); ?>>
                <div class="eyelash">
                    <i class="fa-solid fa-eye-slash" onclick="showInPassword()"></i>
                </div>
            </div>

            <div class="Button">
                <button type="submit" value="in">SIGN IN</button>
            </div>
            </form>
            <div class="forgot">
                <p><a href="#">Forgot password?</a></p>
            </div>


        </div>
    </div>
</div>