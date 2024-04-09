<?php
if (isset($_SESSION['alert'] ))
{

      if (isset($_SESSION['redirect']))
      {
        $redirect = ".then(function() {window.location = \"".$_SESSION['redirect']."\";});";
      }
      else
      {
        $redirect = "";
      }

      if (isset($_SESSION['alert_text']))
      {
        $alert_text = $_SESSION['alert_text'];
      }
      else
      {
        $alert_text = "";
      }

    if ($_SESSION['alert']  == "success")
    {
        echo "
          <script type=\"text/javascript\">
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '".$_SESSION['alert_message']."',
                text: '".$alert_text."',
                timer: 2500
              });
          </script>
        ";
    }else if ($_SESSION['alert'] == "error")
    {
        echo "
          <script type=\"text/javascript\">
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '".$_SESSION['alert_message']."',
                text: '".$alert_text."',
                timer: 2500
              });
          </script>
        ";
    }else
    {
        echo "
          <script type=\"text/javascript\">
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: '".$_SESSION['alert_message']."',
                text: '".$alert_text."',           
                timer: 2500
              });
          </script>
        ";
    }
}

unset($_SESSION['alert']);
unset($_SESSION['alert_message']);
unset($_SESSION['alert_text']);
unset($_SESSION['redirect']);

?>