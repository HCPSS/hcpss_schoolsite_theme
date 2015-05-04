<div class="school-staff-member">
    <span class="staff-name"><?php print render($content['field_staff_first_name']); ?>
      <?php print render($content['field_staff_last_name']); ?></span>
    <?php if ($field_staff_job_title): ?>
      | <span class="staff-job-title"><?php print render($content['field_staff_job_title']); ?></span>
    <?php endif; ?>
    <?php if ($field_staff_email): ?>
      | <span class="staff-email"><?php print render($content['field_staff_email']); ?></span>
    <?php endif; ?>
    <?php if ($field_staff_telephone): ?>
      | <span class="staff-telephone"><?php print render($content['field_staff_telephone']); ?></span>
    <?php endif; ?>
    <?php if ($field_staff_website): ?>
      | <span class="staff-website"><?php print render($content['field_staff_website']); ?></span>
    <?php endif; ?>
</div>
