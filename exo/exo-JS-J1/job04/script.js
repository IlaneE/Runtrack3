function bisextile(année) {
    if ((année % 4 === 0 && année % 100 !== 0) || (année % 400 === 0)) {
        return true;
    } else {
        return false;
    }
}

alert(bisextile(2020)); // true
alert(bisextile(1900)); // false
alert(bisextile(2000)); // true

console.log(bisextile(2020)); // true
console.log(bisextile(1900)); // false
console.log(bisextile(2000)); // true
