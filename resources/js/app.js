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
        denyButtonText: "No"
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        } 
      });
}
window.book = function(e, price) {
    var dates = document.getElementById("input-id").value.split(" - ");
    console.log(dates[0]);
    console.log(dates[1]);
    var parts1 = dates[0].split('-');
    var parts2 = dates[1].split('-');
    var startDate = new Date(parts1[2], parts1[1] - 1, parts1[0]);
    var endDate = new Date(parts2[2], parts2[1] - 1, parts2[0]);
    var timeDiff = Math.abs(endDate.getTime() - startDate.getTime());
    var days = Math.ceil(timeDiff / (1000 * 3600 * 24));
    console.log(days);

    e.preventDefault();
    let form = e.target.form;
   Swal.fire({
        title: "Are you sure you want to book for " + days + " days?",
        text: "You will pay " + price/100*days + "PLN for this room",
        showDenyButton: true,
        confirmButtonText: "Yes",
        denyButtonText: "No"
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
}
window.message = message;
window.datePicker = datePicker;
window.Alpine = Alpine;

Alpine.start();
