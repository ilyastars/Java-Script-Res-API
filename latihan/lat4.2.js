// Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.

// Example

// For inputArray = [3, 6, -2, -5, 7, 3], the output should be
// adjacentElementsProduct(inputArray) = 21.

// 7 and 3 produce the largest product.


function adjacentElementsProduct(inputArray) {
    var max = inputArray[0] * inputArray[1];
    
    for(var j= 0; j < inputArray.length-1; j++){
      // .length adalah jumlah string atau huruf yg diinput atau menghitung panjang string
      max = Math.max(max, inputArray[j] * inputArray[j+1]);
    }
    return max;
  }
  
  // function adjacentElementsProduct(inputArray) {
  //     var prod = inputArray[0] * inputArray[1];
      
  //     for (var i = 0; i<inputArray.length - 1;i++) {
  //         prod = Math.max(prod, inputArray[i] * inputArray[i+1]);
  //     }
      
  //     return prod; 
  // }
  
  
  
  //adjacentElementsProduct([-23, 4, -3, 8, -12]); //-12
  adjacentElementsProduct([3, 6, -2, -5, 7, 3]); 
  