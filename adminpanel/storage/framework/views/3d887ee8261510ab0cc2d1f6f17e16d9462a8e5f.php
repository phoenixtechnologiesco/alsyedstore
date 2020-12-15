<script>
function myFunction1(lang_id) {
 jQuery(function ($) {
  jQuery.ajax({
    beforeSend: function (xhr) { // Add this line
            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
     },
    url: '<?php echo e(URL::to("/change_language")); ?>',
    type: "POST",
    data: {"languages_id":lang_id,"_token": "<?php echo e(csrf_token()); ?>"},
    success: function (res) {
      window.location.reload();
    },
  });
});
}
</script>
<?php /**PATH C:\Users\uzair.siddiq\Downloads\Laravel Ecommerce v1.0.19\SourceCode\adminpanel\resources\views/web/common/scripts/changeLanguage.blade.php ENDPATH**/ ?>