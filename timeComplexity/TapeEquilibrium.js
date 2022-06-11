function solution(A) {
 //Sums all the values in the array
 sumArray = A.reduce((acumulator, current) => acumulator + current) //
 //Declares the variable with a infinitely large number, so when compares the value for the first time there's no possible way of getting a higher value
 minDifference = Infinity
 //Total left sum on each interation
 leftSum = 0
 //Walks the whole array, except the last one
 for(let i=0; i< A.length; i++){
    //Gets the actual value and adds it to the variable
    leftSum += A[i]
    //Time Complexity formula, compares to the last min Difference
    minDifference = Math.min(Math.abs(sumArray - 2 * leftSum), minDifference)
 }
 return minDifference
}
