function highAndLow(numbers){
  let num = numbers.split(" ").map(x => Number(x));
  let high = Math.max(...num).toString();
  let low =  Math.min(...num).toString();
  let hasil = high + " " + low;
  return hasil;
}

// function highAndLow(numbers){
//   numbers = numbers.split(' ');
//   return `${Math.max(...numbers)} ${Math.min(...numbers)}`;
// }