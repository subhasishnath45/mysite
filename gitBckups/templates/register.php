<?php get_header(); ?>
    <div id="primary" class="container content-area content-single">
        <main id="main" class="site-main">
            <div class="single_text">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">

<div id='custom_panel'>
    <?php
    if( count($errors) > 0) {
        foreach ( $errors as $error ) {
            echo "<p class='frm_error'>$error</p>";
        }
    }
    ?>

    <form id='registration-form' method='post' action='<?php echo get_site_url() . '/user/register'; ?>'>
        <ul>
            <li>
                <label class='frm_label' for='Username'>Username</label>
                <input class='frm_field' type='text' id='username' name='user' value='<?php echo isset( $user_login ) ? $user_login : ''; ?>'  />
            </li>
            <li>
                <label class='frm_label' for='Email'>E-mail</label>
                <input class='frm_field' type='text' id='email' name='email' value='<?php echo isset( $user_email ) ? $user_email : ''; ?>' />
            </li>
            <li>
                <label class='frm_label' for='User Type'>User Type</label>
                <select class='frm_field' name='user_type'>
                    <option <?php echo (isset( $user_type ) && $user_type == 'follower') ? 'selected' : ''; ?> value='follower'>Follower</option>
                    <option <?php echo (isset( $user_type ) && $user_type == 'developer') ? 'selected' : ''; ?> value='developer'>Developer</option>
                    <option <?php echo (isset( $user_type ) && $user_type == 'member') ? 'selected' : ''; ?> value='member'>Member</option>
                </select>
            </li>
            <li>
                <label class='frm_label' for=''>&nbsp;</label>
                <input type='submit' value='Register' />
            </li>
        </ul>
    </form>
</div>

                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
