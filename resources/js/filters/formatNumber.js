export default function(number) {
    const options = { style: 'currency', currency: 'EUR' };
    return new Intl.NumberFormat('fr-Fr', options).format(number);
}
