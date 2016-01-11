<div class="school-staff-member">
    <?php print render($content['field_staff_first_name']); ?> <?php print render($content['field_staff_last_name']); ?>
    <?php if ($field_staff_job_title): ?>
      | <?php print render($content['field_staff_job_title']); ?>
    <?php endif; ?>
    <?php if ($field_staff_email): ?>
      | <?php print render($content['field_staff_email']); ?>
    <?php endif; ?>
    <?php if ($field_staff_telephone): ?>
      | <?php print render($content['field_staff_telephone']); ?>
    <?php endif; ?>
    <?php if ($field_staff_website): ?>
      | <?php print render($content['field_staff_website']); ?>
    <?php endif; ?>
</div>
