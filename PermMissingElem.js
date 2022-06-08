/*An array A consisting of N different integers is given. The array contains integers in the range [1..(N + 1)], which means that exactly one element is missing.

Your goal is to find that missing element.

Write a function:

function solution(A);

that, given an array A, returns the value of the missing element.

For example, given array A such that:

  A[0] = 2
  A[1] = 3
  A[2] = 1
  A[3] = 5
the function should return 4, as it is the missing element.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [0..100,000];
the elements of A are all distinct;
each element of array A is an integer within the range [1..(N + 1)].*/
function solution(A) {
    //Gets the length of the Array plus 1
    const N = A.length + 1
    //Checks if the array is empty
    if(A.length > 0)
      //Sums all the values in the array
      sum = A.reduce((accumulator, current) => accumulator + current) //the reducer walks through the array in each element, adding the previous one to the new calculation
    else
      //if empty, sets 0
      sum = 0

    //Time complexity formula
    result = Math.floor(N * (N+1) / 2) - sum
    
    return result
}
