const header = document.querySelector("header");
window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 100);
});

let menu = document.querySelector("#menu-icon")
let navlist = document.querySelector(".navlist");

menu.onclick = () => {
  menu.classList.toggle('bx-x');
  navlist.classList.toggle('open');
}

window.onscroll = () => {
  menu.classList.remove('bx-x');
  navlist.classList.remove('open')
}


// Escucha el envío del formulario
document.getElementById('miFormulario').addEventListener('submit', function (event) {
    event.preventDefault(); // Evita el envío normal del formulario

    axios.post('/', {
        user: document.getElementById('user').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        body: document.getElementById('body').value,

    })

    .then(function (response) {
        // Maneja la respuesta del servidor
        console.log(response.data.mensaje);

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })

          Toast.fire({
            icon: 'success',
            title: 'Sent successfully'
          })

        // Limpiar los campos del formulario
        document.getElementById('user').value = '';
        document.getElementById('email').value = '';
        document.getElementById('phone').value = '';
        document.getElementById('body').value = '';
    })
    .catch(function (error) {
        // Maneja errores si los hay
        console.log(error);
    });
});
