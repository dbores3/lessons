/*A small frog wants to get to the other side of a river. The frog is initially located on one bank of the river (position 0) and wants to get to the opposite bank (position X+1). Leaves fall from a tree onto the surface of the river.

You are given an array A consisting of N integers representing the falling leaves. A[K] represents the position where one leaf falls at time K, measured in seconds.

The goal is to find the earliest time when the frog can jump to the other side of the river. The frog can cross only when leaves appear at every position across the river from 1 to X (that is, we want to find the earliest moment when all the positions from 1 to X are covered by leaves). You may assume that the speed of the current in the river is negligibly small, i.e. the leaves do not change their positions once they fall in the river.

For example, you are given integer X = 5 and array A such that:

  A[0] = 1
  A[1] = 3
  A[2] = 1
  A[3] = 4
  A[4] = 2
  A[5] = 3
  A[6] = 5
  A[7] = 4
In second 6, a leaf falls into position 5. This is the earliest time when leaves appear in every position across the river.

Write a function:

function solution($X, $A);

that, given a non-empty array A consisting of N integers and integer X, returns the earliest time when the frog can jump to the other side of the river.

If the frog is never able to jump to the other side of the river, the function should return -1.

For example, given X = 5 and array A such that:

  A[0] = 1
  A[1] = 3
  A[2] = 1
  A[3] = 4
  A[4] = 2
  A[5] = 3
  A[6] = 5
  A[7] = 4
the function should return 6, as explained above.

Write an efficient algorithm for the following assumptions:

N and X are integers within the range [1..100,000];
each element of array A is an integer within the range [1..X].*/

function solution($X, $A){
    //Creates an array that creates a list with the positions
    $positions = array();
    
    //Fills the array with 0, accordign to the A array size 
    for($i=0; $i<count($A); $i++){
        $positions[$i] = 0;
    }
    
    //
    for($i=0; $i<count($A); $i++){
        //Checks if the position in $positions of the $A array is already filled
        if($positions[$A[$i]]==0){
            //if empty, sets 1 to indicate that is not empty
            $positions[$A[$i]]=1;
            //reduces the number of X by 1
            $X--;
        }
        //Checks if there were as many positions as the opposite bank(X) and returns the number of seconds, if it is different than 0, the frog wasn't able to cross
        if ($X==0)
            return $i; 
    }
    //If the frog isn't able to cross, returns -1
    return -1; 
}
