// 1
let age = +prompt("How old are you?", "");
if (age >= 0 && age < 12) {
    alert("child");
} else {
    if (age >= 12 && age < 18) {
        alert("teenager");
    } else {
        if (age >= 18 && age < 60) {
            alert("adult");
        } else {
            if (age >= 60) {
                alert("retiree");
            }
        }
    }
}

// 2
let userNumber = +prompt("Enter a number from 0 to 9", "");
if (userNumber == 0) {
    alert(")");
} else {
    if (userNumber == 1) {
        alert("!");
    } else {
        if (userNumber == 2) {
            alert("@");
        } else {
            if (userNumber == 3) {
                alert("#");
            } else {
                if (userNumber == 4) {
                    alert("$");
                } else {
                    if (userNumber == 5) {
                        alert("%");
                    } else {
                        if (userNumber == 6) {
                            alert("^");
                        } else {
                            if (userNumber == 7) {
                                alert("?");
                            } else {
                                if (userNumber == 8) {
                                    alert("*");
                                } else {
                                    if (userNumber == 9) {
                                        alert("(");
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

// 3
let number = +prompt("Enter a number from 0 to 999", "");

// 6
let sum = +prompt("Enter a sum USD", "");
