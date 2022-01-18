<script>
$(document).ready(function(){
<?php
    if($usercode >= '1'){
?>
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-info',
        cancelButton: 'btn btn-outline-info'
        },
            buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
    title: 'Welcome to Cryptocat :)',
    text: "Create and configure a room / join with your friends",
    imageUrl: '../img/1200px-Cryptocat_logo_new.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Cryptocat logo',
    showCancelButton: true,
    confirmButtonText: 'Next...',
    cancelButtonText: 'Skip Intro',
    reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        swalWithBootstrapButtons.fire({
        title: 'Let´s goooo!',
        text: 'Have fun in any chat room',
        imageUrl: '../img/chatbox.png',
        imageWidth: 200,
        imageHeight: 200,
        imageAlt: 'Cryptocat Chat',
        })
        <?php
            mysqli_query($conn,"update `user` set uscode = '0' where userid='".$_SESSION['id']."'");
        ?>
    } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
    ) {
        swalWithBootstrapButtons.fire({
        title: 'Let´s goooo!',
        text: 'Have fun in any chat room',
        imageUrl: '../img/chatbox.png',
        imageWidth: 200,
        imageHeight: 200,
        imageAlt: 'Cryptocat Chat',
        })
    }
    })

<?php
    }
?>

});
</script>