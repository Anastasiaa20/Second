//1
let userNumber = +prompt("Enter the number", "");
if (userNumber > 0) {
    alert("positive");
} else {
    if (userNumber < 0) {
        alert("negative");
    } else {
        alert("zero");
    }
}
//Менее верно, но подходит 
if (userNumber > 0) {
    alert("positive");
}
if (userNumber < 0) {
    alert("negative");
}
if (userNumber === 0) {
    alert("zero");
}

//2
if (userNumber >= 0 && userNumber <= 120) {
    alert("correct");
} else {
    alert("incorrect");
}

//3
let result;
if (userNumber >= 0) {
    result = userNumber;
} else {
    result = -userNumber;
}
alert(result);

//4
let hours = +prompt("hours", "");
let minutes = +prompt("minutes", "");
let sec = +prompt("sec", "");
if (hours >= 0 && hours < 24 && minutes >= 0 && minutes < 60 && sec >= 0 && sec < 60) {
    alert("correct");
} else {
    alert("incorrect")
}

//5 

// Запросить координаты точки (x, y)
let xCoord = +prompt("x coord", "");
let yCoord = +prompt("x coord", "");

// I
if (xCoord > 0 && yCoord > 0) {
    alert("I");
} else {
    // II
    if (xCoord < 0 && yCoord > 0) {
        alert("II");
    } else {
        // III
        if (xCoord < 0 && yCoord < 0) {
            alert("III");
        } else {
            // IV 
            if (xCoord > 0 && yCoord < 0) {
                alert("IV");
            } else {
                if (yCoord === 0) {
                    alert("X axis");
                } else {
                    if (xCoord === 0) {
                        alert("Y axis");
                    } else {
                        if (xCoord === 0 && yCoord === 0) {
                            alert("0");
                        }
                    }
                }
            }
        }
    }
}

// определение четности x

let x = 7;
if (x % 2 === 0) {
    result = "even";
} else {
    result = "odd";
}

// result = (condition) ? значение, если true : значение если false

result = (x % 2 === 0) ? "even" : "odd";

// Запросить 2 числа и вывести большее из них.
let number1 = +prompt("1: ", "");
let number2 = +prompt("2: ", "");

let max = (number1 > number2) ? number1 : number2;
alert(max);


let month = prompt("Enter the month", "");
switch (month) {
    case "1":
        alert("January");
        break;

    case "2":
        alert("February");
        break;

    case "3":
        alert("March");
        break;

    case "4":
        alert("April");
        break;

    case "5":
        alert("May");
        break;

    case "6":
        alert("June");
        break;

    case "7":
        alert("July");
        break;

    case "8":
        alert("August");
        break;

    case "9":
        alert("September");
        break;

    case "10":
        alert("October");
        break;

    case "11":
        alert("November");
        break;

    case "12":
        alert("December");
        break;
    // default выполняется, если вводится не одно из вышеперечисленных
    // НЕ ЗАБЫВАЕМ BREAK!!!
    default:
        alert("There is no such month");
        break;
}