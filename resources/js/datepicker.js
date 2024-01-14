import HotelDatepicker from "hotel-datepicker";
import "hotel-datepicker/dist/css/hotel-datepicker.css";
// Initialize the HotelDatepicker instance and configure it with excluded dates
export function datePicker(excludedDates) {
    const input = document.getElementById('input-id');
    const today = new Date();
    today.setDate(today.getDate() + 1);

    const options = {
        format: 'DD-MM-YYYY',
        startDate: today,
        enableCheckout: true,
        autoClose: true,
        minNights: 1,
        selectForward: true,
        disableDates: excludedDates, // Array of excluded dates
        moveBothMonths: true,
    };

    const picker = new HotelDatepicker(input, options);
    return picker;
}
export default datePicker;