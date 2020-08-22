<?php

function sk_bootstrap_plugin_options_page()
{
    $sk_options = get_option('sk_options'); ?>
  <div class="wrap">
    <div class="card">
      <div class="card-body">
          <h3 class="card-title text-center"><?php _e('Script Kid Settings', 'sk-plugin-template'); ?></h3>
          <?php if (isset($_GET['status']) && $_GET['status'] == 1) { ?>
            <div class="alert alert-success">Plugin settings updated successfully!</div><?php
            } ?>
          <form method="POST" action="admin-post.php">
              <input type="hidden" name="action" value="sk_bootstrap_plugin_settings_save_options">
              <?php wp_nonce_field('sk_bootstrap_plugin_settings_form_verify'); ?>
              <div class="form-group">
                  <label for="sk_admin_warning_notice"><?php _e('Show admin warning notice', 'sk-plugin-template'); ?></label>
                  <select class="form-control" id="sk_admin_warning_notice" name="sk_admin_warning_notice">
                      <option value="0">No</option>
                      <option value="1" 
                        <?php echo $sk_options['sk_admin_warning_notice'] == 1 ? 'SELECTED' : '' ?>>Yes</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="sk_admin_info_notice"><?php _e('Show admin info notice', 'sk-plugin-template'); ?></label>
                  <select class="form-control" id="sk_admin_info_notice" name="sk_admin_info_notice">
                      <option value="0">No</option>
                      <option value="1"
                        <?php echo $sk_options['sk_admin_info_notice'] == 1 ? 'SELECTED' : '' ?>>Yes</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="sk_admin_error_notice"><?php _e('Show admin error notice', 'sk-plugin-template'); ?></label>
                  <select class="form-control" id="sk_admin_error_notice" name="sk_admin_error_notice">
                      <option value="0">No</option>
                      <option value="1"
                        <?php echo $sk_options['sk_admin_error_notice'] == 1 ? 'SELECTED' : '' ?>>Yes</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="sk_admin_success_notice"><?php _e('Show admin success notice', 'sk-plugin-template'); ?></label>
                  <select class="form-control" id="sk_admin_success_notice" name="sk_admin_success_notice">
                      <option value="0">No</option>
                      <option value="1"
                        <?php echo $sk_options['sk_admin_success_notice'] == 1 ? 'SELECTED' : '' ?>>Yes</option>
                  </select>
              </div>
              
              <div class="form-group">
                  <button type="submit" class="btn btn-primary"><?php _e('Update', 'sk-plugin-template'); ?></button>
              </div>
          </form>
      </div>
    </div>
    <hr>

    </form>
  </div>
  <?php
}
