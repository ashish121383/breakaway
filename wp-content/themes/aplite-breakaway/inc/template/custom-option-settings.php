<section>
    <div class="custom-setting-options">
        <h1>Breakaway Theme Settings</h1>
    </div>
    <div class="custom-form-section">
    <?php settings_errors(); ?>
        <form action="options.php" method="post">
            <?php settings_fields('breakaway-setting-group'); ?>
            <?php do_settings_sections('aplite_breakaway'); ?>
            <?php submit_button(); ?>
        </form>
    </div>

</section>