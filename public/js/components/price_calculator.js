import { calculate_display_price } from "../utils/math.js";
import { $input_bcv, $input_parallel, $value_bcv, $value_parallel } from "../variables.js";

document.addEventListener('input', e => {
    if (e.target.matches('.cup-of-the-day__input--bcv')) {
    
        calculate_display_price($input_bcv, $value_bcv);
    }
    if (e.target.matches('.cup-of-the-day__input--parallel')) {
        console.info( $value_parallel)
        calculate_display_price($input_parallel, $value_parallel);
    }
})

