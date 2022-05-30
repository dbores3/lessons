// you can write to stdout for debugging purposes, e.g.
// console.log('this is a debug message');

function solution(N) {
    // write your code in JavaScript (Node.js 8.9.4)
}
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";
function solution(N) {
    //Converts number into binary
    const binary = N.toString(2)
    //Counters
    let cont = 0
    let biggestGap = 0
    //Gets the binary number
    const strBinary = binary.split('');

    //Checks each char into the string
    strBinary.forEach( (char) => {
        //If there's a 0 increases the counter
        if(char == 0)
            cont++
        //If the cont is bigger than last biggest gap, saves the new biggest one
        else if(char == 1){
            if(cont > biggestGap)
                biggestGap = cont
            cont = 0
        }
    });

    return biggestGap
}


