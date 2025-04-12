function findOdd(A) {
  //happy coding!
  let counts = {};

  A.forEach(num => {
    counts[num] = (counts[num] || 0) + 1;
  });
  
   for (let [key, value] of Object.entries(counts)) {
    if (value % 2 === 1) {
      return Number(key); 
    }
  }

   return 0;
}

// function findOdd(arr) {
//   return arr.find((item, index) => arr.filter(el => el == item).length % 2)
// }