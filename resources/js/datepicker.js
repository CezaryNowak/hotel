import HotelDatepicker from "hotel-datepicker";
import "hotel-datepicker/dist/css/hotel-datepicker.css";

export function datePicker(exludedDates){
    const input = document.getElementById('input-id');
    let today = new Date();
    today.setDate(today.getDate()+1);
    const dd = String(today.getDate()).padStart(2, '1');
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;

    let excludDates;

    if(exludedDates)
    for (let i = 0; i<excludDates.length; i++){
        excludDates.push(exludedDates[i]);
    }

    const datepicker = new HotelDatepicker(input, {
        startDate: today,
        disabledDates: excludDates
    });
}
export default datePicker;