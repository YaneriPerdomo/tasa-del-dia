
export function validate_greater_than_zero($value, $item) {
    if ($value <= 0) {
        alert('El cálculo no puede realizarse con un valor igual o menor que cero. Introduzca un número mayor que cero.');
        $item.value = 1;
        return false;
    }
}