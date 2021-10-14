///////////////   Errors

function admin_login_error() {
    swal({
        title: "Invalid Information!",
        text: "Please type correct Username and Password.",
        icon: "warning",
        buttons: {
            cancel: false,
            confirm: true,

        },

        dangerMode: true,

    }).then((willDelete) => {

        if (willDelete) {

            window.location.href = "login.php";

        } else {

            window.location.href = "login.php";

        }

    });

}





function login_error() {

    swal({

        title: "Invalid Login Details!",

        text: "Please type correct ID and Password.",

        icon: "warning",

        buttons: {

            cancel: false,

            confirm: true,

        },

        dangerMode: true,

    }).then((willDelete) => {

        if (willDelete) {

            window.location.href = window.location.href;

        } else {

            window.location.href = window.location.href;

        }

    });

}

//////////////// Success


function farmer_registered() {

    swal({

        title: "Congratulation!",

        text: "Your are successfully registered.",

        icon: "success",

        buttons: {

            cancel: false,

            confirm: true,

        },

        dangerMode: true,

    }).then((willDelete) => {

        if (willDelete) {

            window.location.href = "farmer-login.php";

        } else {

            window.location.href = "farmer-login.php";

        }

    });

}

function supplier_registered() {

    swal({

        title: "Congratulation!",

        text: "Your are successfully registered.",

        icon: "success",

        buttons: {

            cancel: false,

            confirm: true,

        },

        dangerMode: true,

    }).then((willDelete) => {

        if (willDelete) {

            window.location.href = "supplier-login.php";

        } else {

            window.location.href = "supplier-login.php";

        }

    });

}


function password_changed() {

    swal({

        title: "Congratulation!",

        text: "You successfully changed your password please login with new password.",

        icon: "success",

        buttons: {

            cancel: false,

            confirm: true,

        },

        dangerMode: true,

    }).then((willDelete) => {

        if (willDelete) {

            window.location.href = "index.php";

        } else {

            window.location.href = "index.php";

        }

    });

}