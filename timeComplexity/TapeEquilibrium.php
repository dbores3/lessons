/*A non-empty array A consisting of N integers is given. Array A represents numbers on a tape.

Any integer P, such that 0 < P < N, splits this tape into two non-empty parts: A[0], A[1], ..., A[P − 1] and A[P], A[P + 1], ..., A[N − 1].

The difference between the two parts is the value of: |(A[0] + A[1] + ... + A[P − 1]) − (A[P] + A[P + 1] + ... + A[N − 1])|

In other words, it is the absolute difference between the sum of the first part and the sum of the second part.

For example, consider array A such that:

  A[0] = 3
  A[1] = 1
  A[2] = 2
  A[3] = 4
  A[4] = 3
We can split this tape in four places:

P = 1, difference = |3 − 10| = 7
P = 2, difference = |4 − 9| = 5
P = 3, difference = |6 − 7| = 1
P = 4, difference = |10 − 3| = 7
Write a function:

function solution($A);

that, given a non-empty array A of N integers, returns the minimal difference that can be achieved.

For example, given:

  A[0] = 3
  A[1] = 1
  A[2] = 2
  A[3] = 4
  A[4] = 3
the function should return 1, as explained above.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [2..100,000];
each element of array A is an integer within the range [−1,000..1,000].*/
function solution($A) {
    //Sums all the values in the array
    $sumArray = array_sum($A);
    //Declares the variable with a infinitely large number, so when compares the value for the first time there's no possible way of getting a higher value
    $minDifference = INF;
    //Total left sum on each iteration
    $leftSum = 0;
    //Walks the whole array except the last one
    for($i=0; $i<count($A)-1; $i++){
        //Gets the actual value and adds it to the variable
        $leftSum += $A[$i];
        //Time Complexity formula, compares to the last min Difference
        $minDifference = min(abs($sumArray - 2  * $leftSum), $minDifference);
    }
    return $minDifference;
}
