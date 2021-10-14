///////////////   Errors
function admin_login_error() {
  swal({
    title: "Invalid Information!",
    text: "Please type correct Username and Password.",
    icon: "error",
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

function same_password_error() {
  swal({
    title: "Enter Same Password",
    text: "Please enter same password.",
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

function login_error() {
  swal({
    title: "Invalid Login Details!",
    text: "Please type correct ID and Password.",
    icon: "error",
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

function password_error() {
  swal({
    title: "Invalid Password!",
    text: "Please type correct Password.",
    icon: "error",
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
      window.location.href = window.location.href;
    } else {
      window.location.href = window.location.href;
    }
  });
}