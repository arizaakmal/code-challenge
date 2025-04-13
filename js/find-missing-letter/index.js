function findMissingLetter(array)
{
  let alphabet ="abcdefghijklmnopqrstuvwxyz".split('');
  let arr = array.map(x => x.toLowerCase());
  
  for(i=0;i<arr.length;i++){
    let index = alphabet.findIndex(x => x == arr[i]);
     if(arr[i+1] != alphabet[index+1]){
       if(array[0] == array[0].toLowerCase()){
          return alphabet[index+1];
       } else {
           return alphabet[index+1].toUpperCase();
       }
     }
  }
    return ' ';
}

// function findMissingLetter(array) {
//   let first = array[0].charCodeAt(0)
//   for (let i = 1; i < array.length; i++) {
//     if (first + i !== array[i].charCodeAt(0)) {
//       return String.fromCharCode(first + i)
//     }
//   }
//   throw new Error("Invalid input")
// }