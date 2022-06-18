function solution($X, $A) {
    //Creates a set object so it creates an unordered,unique and iterable list
    $positions = array();
    //Initializes the seconds counter
    $seconds = 1;
  
    //Walks the array
    //for i in range(0, len(A)): 
    $cont = 1;
    for($i=0; $i<=count($A); $i++){
        //Checks if A[i] hasn't been set in positions & is smaller or equal to the opposite bank position(X)
        if(!in_array($A[$i],$positions) && $A[$i] < $X){ 
            //Adds the new position into the set
            array_push($positions,$A[$i]);
            //Each index is a second passed
            //$seconds = $i;
            $seconds++;
        }
    }
    
    //Checks if there were as many positions as the opposite bank(X) and returns the number of seconds
   // print_r($cont);
    //print $seconds;
    if(count($positions) == $X) 
        return $seconds;
    else
        //If the frog isn't able to cross, returns -1
        return -1;
}
