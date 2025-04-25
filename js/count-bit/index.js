var countBits = function(n) {
    // Program Me
   let bit = n.toString(2);
   let total = 0;
    
    for(let i=0;i < bit.length;i++){
      if(bit[i] == 1){
        total += 1;
      }
    }
   return total;
  };

  //countBits = n => n.toString(2).split('0').join('').length;