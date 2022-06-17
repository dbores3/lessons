// you can write to stdout for debugging purposes, e.g.
// console.log('this is a debug message');

function solution(X, A) {
    //Creates a set object so it creates an unordered,unique and iterable list
    let positions = new Set() 
    //Initializes the seconds counter
    let seconds = 0 
  
    //Walks the array
    //for i in range(0, len(A)): 
    for(i=0; i<=A.length; i++){
        //Checks if A[i] hasn't been set in positions & is smaller or equal to the opposite bank position(X)
        if(!positions.has(A[i]) && A[i] <= X){ 
            //Adds the new position into the set
            positions.add(A[i]) 
            //Each index is a second passed
            seconds = i 
        }
    }
    
    //Checks if there were as many positions as the opposite bank(X) and returns the number of seconds
    if(positions.size == X) 
        return seconds
    else
        //If the frog isn't able to cross, returns -1
        return -1
}
