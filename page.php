<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php
echo '
<script type="text/javascript">
$(document).ready(function(){
  swal({
    position: "top-end",
    type: "success",
    icon: "success",
    title: "Validating your data. Please wait...",
    buttons: false,
    closeOnClickOutside: false,
    closeOnEsc: false,
    allowOutsideClick: false,
    timer: 4444500,
  })
});
</script>
';
 ?>
