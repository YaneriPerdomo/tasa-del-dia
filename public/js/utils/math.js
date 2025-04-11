import { validate_greater_than_zero } from "./validation.js";

export function calculate_display_price(input_element, value_element) {
    let dollar = parseFloat(input_element.value);
    let validation_status = validate_greater_than_zero(dollar, input_element);
    if (validation_status === false) {
        return false;
    }
    let bolivars = parseFloat(value_element.getAttribute('data-bs'));
    if (isNaN(dollar) || isNaN(bolivars)) {
        console.error("Valor inválido para el cálculo.");
        return false;
    }
    let new_price = (dollar * bolivars).toFixed(2);
    value_element.innerHTML = new_price;
    return true;
}