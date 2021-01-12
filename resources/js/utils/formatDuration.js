export default function (number, unit) {
    return new Intl.NumberFormat('fr-Fr', {
        style: 'decimal',
        minimumFractionDigits: 2
    }).format(number) + ' ' + unit;
}
