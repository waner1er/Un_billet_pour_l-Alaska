  jQuery(document).ready(function() {
    $(".more").hide();
    jQuery('.button-read-more').click(function () {
        $(this).closest('.less').addClass('active');
        $(this).closest(".less").prev().stop(true).slideDown("1000");
    });
    jQuery('.button-read-less').click(function () {
        $(this).closest('.less').removeClass('active');
        $(this).closest(".less").prev().stop(true).slideUp("1000");
    });
    jQuery('#toggleAdminMenu').click(function () {
        $('.sidebar-content').toggle($);
    });


    $('#deleteConfirm').click(function(){
    var r = confirm("Press a button!");
    if (r == true) {
        $('#deleteConfirm').click()
        };

    } else {
    alert('ok');}
    });
    
});



