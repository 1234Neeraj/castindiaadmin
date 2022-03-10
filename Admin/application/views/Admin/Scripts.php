<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "8ubzmj8h1s");
</script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://castindia.in/cpanel/css/admincss/js/scripts.js"></script>
<script src="https://castindia.in/cpanel/css/admincss/js/chart.min.js"></script>
<script src="https://castindia.in/cpanel/css/admincss/js/shorting.js"></script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.15.0/standard-all/ckeditor.js"></script>
<!--<script type="text/javascript" src="https://castindia.in/cpanel/js/ckeditor/ckeditor.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://castindia.in/cpanel/js/sweetalert.min.js"></script>
<script src="https://castindia.in/cpanel/js/lightbox.js"></script>
<script src="https://castindia.in/cpanel/js/BsMultiSelect.js"></script>
<script src="https://castindia.in/cpanel/js/bootstrap-select.min.js"></script>
<!--load jquery-->
<script src="<?= base_url();?>Assets/js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url('Assets/jquery/jquery-ui.js'); ?>"></script>

<script>
    $(function() {
        $("#startDate").datepicker(
            {
                dateFormat: 'yy-mm-dd'
            }
        );
    });
    $(function() {
        $("#endDate").datepicker(
            {
                dateFormat: 'yy-mm-dd'
            }
        );
    });
    function isNumeric(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }

    $(document).ready(function() {
        $(function() {
            setTimeout(function() {
                $(".alert.alert-success.alert-dismissible.fade.show").hide();
            }, 3000);
        });
        // $("#notifications").load("https://castindia.in/cpanel/admin/loadnotication");

    });
    $('.modal').on('hidden.bs.modal', function(e) {
        $(this)
            .find("input,textarea,select")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
    })

    $(document).mouseup(function(e) {
        if ($(e.target).closest(".droping-list").length ===
            0) {
            $('.droping-list').hide();
            $('.droping-lists').hide();
        }
    });
</script>