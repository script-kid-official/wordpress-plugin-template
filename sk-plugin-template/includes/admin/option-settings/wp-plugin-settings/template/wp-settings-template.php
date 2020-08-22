<?php

function sk_plugin_options_page()
{
    if (isset($_GET['status']) && $_GET['status'] == 1) {?>
      <div class="alert alert-success">Options updated successfully!</div><?php
    } ?>
      <form method="post" action="options.php">

        <?php
    settings_fields('sk_options_group');
    do_settings_sections('sk_options_sections');
    submit_button(); ?>

      </form>
    </div>
<?php
}

function sk_settings_section()
{
    echo '<p>You can toggle the dashboard notices here.</p>';
}
  
  function script_kid_toggle_admin_warning_notice()
  {
      $sk_options = get_option('sk_options'); ?>
        <select id="sk_admin_warning_notice" name="sk_options[sk_admin_warning_notice]">
            <option value="0">No</option>
            <option value="1" 
              <?php echo $sk_options['sk_admin_warning_notice'] == 1 ? 'SELECTED' : '' ?>>Yes</option>
        </select>
    <?php
  }
  
  function script_kid_toggle_admin_info_notice()
  {
      $sk_options = get_option('sk_options'); ?>
        <select id="sk_admin_info_notice" name="sk_options[sk_admin_info_notice]">
            <option value="0">No</option>
            <option value="1"
              <?php echo $sk_options['sk_admin_info_notice'] == 1 ? 'SELECTED' : '' ?>>Yes</option>
        </select>
    <?php
  }

  function script_kid_toggle_admin_error_notice()
  {
      $sk_options = get_option('sk_options'); ?>
        <select id="sk_admin_error_notice" name="sk_options[sk_admin_error_notice]">
            <option value="0">No</option>
            <option value="1"
              <?php echo $sk_options['sk_admin_error_notice'] == 1 ? 'SELECTED' : '' ?>>Yes</option>
        </select>
    <?php
  }

  function script_kid_toggle_admin_success_notice()
  {
      $sk_options = get_option('sk_options'); ?>
        <select id="sk_admin_success_notice" name="sk_options[sk_admin_success_notice]">
            <option value="0">No</option>
            <option value="1"
              <?php echo $sk_options['sk_admin_success_notice'] == 1 ? 'SELECTED' : '' ?>>Yes</option>
        </select>
    <?php
  }
