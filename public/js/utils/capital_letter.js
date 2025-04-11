export function capitalizar(texto) {
    const [primeraLetra, ...resto] = texto;
    return primeraLetra.toUpperCase() + resto.join('').toLowerCase();
}