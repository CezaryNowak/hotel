import Swal from 'sweetalert2'

export function message(text) {
    Swal.fire({
        icon: "success",
        title: text,
        showConfirmButton: false,
        timer: 2000
      });
}
export default message;