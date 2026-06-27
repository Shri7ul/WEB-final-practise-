// print Hello World 
console.log("Hello World")

// take input
let name= prompt("Enter Your Name")

// const variable:
// 1. assign value during initialization
// 2. can't be assigned later
const z=100
z=x+y // can't be done

console.log("sum is:", x+y )

// Which number is larger
if(x>y)
    console.log("larger number is:", x)
else if(y>x)
    console.log("larger number is: ",y )

//  build a calculator
//  ask user the operation type: add, sub, mul, div
// take two numbers
//  do the operation

let num1 = Number(prompt("Enter First Digit"))
let num2 = Number(prompt("Enter Second Digit"))
let op = prompt("Choose Your operation type: \n add \nsub \nmul \ndiv")

if (op == "add") {
    console.log("Addition is : ", num1 + num2)
}

else if (op == "Sub") {
    console.log("Substraction is : ", num1 - num2)
}

else if (op == "mul") {
    console.log("Multiply is : ", num1 * num2)
}
else if (op == "div") {
    if (num2 == 0)
        console.log("Not valid")
    else
        console.log("Substraction is : ", num1 / num2)
}
else
    console.log("Choose Valid Operation")

//  for loop and function

// ========================
// / create a function to find out all the numbers that divides n

let n = Number(prompt("enter the number"))

function find_dividend(n) {

    for (let i = 1; i <= n; i++) {
        if (n % i == 0)
            console.log("divisible by", i)
    }

}

find_dividend(n)



// differences with c:
// 1. there is no main function. is executed from top to bottom
// 2. there is no data type. just let and const
// 3. difference in input and output procedure ( input through HTML/prompt, output through console)

// array 

let numbers=[1,2,3,4,5]
console.log("the array is:",numbers)

//  add element at the end
numbers.push(6)
console.log("the array after push:",numbers)
// remove element from the end
numbers.pop()
console.log("the array after pop:",numbers)
// add element at the begining
numbers.unshift(0)
console.log("the array after unshift:",numbers)
// remove element from the begining
numbers.shift()
console.log("the array after shift",numbers)

sliced_array=numbers.slice(1,3) // slicing index 1 to just before 3
console.log("after slicing",sliced_array)

length=numbers.length
console.log("length of the array",length)

// searching========================
// search element using index
console.log("element at index 1:",numbers[1])
// find index of an element
console.log("index of  5:", numbers.indexOf(5) )




// java script array is different==================

numbers.push([6,7,8,9])
console.log("the updated numbers after array push: ",numbers)

concated_array=numbers.concat([6,7,8,9])
console.log("the concated array:",concated_array)


// *** filtering ***

// filter the even numbers from an array

// filter contains a boolean function=============
// number: every element of the array
// index: index of that number
// array: the full array
even_numbers=numbers.filter((number,index,array)=>{

    console.log("the index of ", number,": ",index)
    console.log("full array",array)
    if(number%2==0)
        return true;
    else
        return false


})

console.log("filtered even numbers",even_numbers)
