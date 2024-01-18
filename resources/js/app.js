import './bootstrap';

import datePicker from './datepicker';
import Alpine from 'alpinejs';
import Swal from 'sweetalert2'
import message from './message';
window.confirmCancelation = function (e) {
    e.preventDefault();
    let form = e.target.form;
    Swal.fire({
        title: "Are you sure you want to cancel?",
        showDenyButton: true,
        confirmButtonText: "Yes",
        denyButtonText: `No`
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          form.submit();
        } 
      });
}

window.message = message;
window.datePicker = datePicker;
window.Alpine = Alpine;

Alpine.start();
