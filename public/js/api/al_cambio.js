import { capitalizar } from "../utils/capital_letter.js";
import { calculate_display_price } from "../utils/math.js";
import { $change_bcv, $change_parallel, $input_bcv, $input_parallel, $last_update_bcv, $last_update_parallel, $span_datetime, $value_bcv, $value_parallel } from "../variables.js";

setInterval(async () => {
    try {
        let url = 'https://pydolarve.org/api/v1/dollar?page=alcambio';
        const response = await fetch(url);
        const data = await response.json();
        let bcv_price = data['monitors']['bcv']['price'];
        let parallel_price = data['monitors']['enparalelovzla']['price'];
        let change_bcv = data['monitors']['bcv']['change'];
        let change_parallel = data['monitors']['enparalelovzla']['change'];
        let date = capitalizar(toString(data['datetime']['date']));
        let time = data['datetime']['time'];
        console.info(bcv_price);
        //Paralelo
        if ($value_parallel.dataset.bs != parallel_price) {
            $span_datetime.textContent = date + '<br>' + time;
            $value_parallel.textContent = parallel_price;
            $change_parallel.textContent = change_parallel;
            $last_update_parallel.textContent = data['monitors']['enparalelovzla']['last_update'];
            calculate_display_price(parseFloat($input_bcv), bcv_price);
        }
    
        //BCV
        if ($value_bcv.dataset.bs != bcv_price) {
            $value_bcv.textContent = bcv_price;
            $change_bcv.textContent = change_bcv;
            $span_datetime.textContent = date + '<br>' + time;
            $last_update_bcv.textContent = data['monitors']['bcv']['last_update'];
            calculate_display_price(parseFloat($input_parallel), parallel_price);
        }

    } catch (error) {
        console.error("Error en la solicitud:", error);
        return;
    }
  
}, 30000);