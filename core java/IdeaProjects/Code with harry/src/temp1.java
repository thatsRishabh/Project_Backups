package com.company;

class InvalidInputException extends Exception{
    @Override
    public String toString() {
        return "Cannot add 8 and 9";
    }
    @Override
    public String getMessage() {
        return "I am getMessage()";
    }
}
class MaxInputException extends Exception{
    @Override
    public String toString() {
        return "Input cant be greater than 100000";
    }
    @Override
    public String getMessage() {
        return "I am getMessage()";
    }
}
class CannotDivideByZeroException extends Exception{
    @Override
    public String toString() {
        return "Cannot divide by 0";
    }
    @Override
    public String getMessage() {
        return "I am getMessage()";
    }
}
class MaxMultiplyInputException extends Exception{
    @Override
    public String toString() {
        return "Input cant be greater than 7000 while multiplying";
    }
    @Override
    public String getMessage() {
        return "I am getMessage()";
    }
}
class CustomCalculator {
    double add(double a, double b) throws com.company.InvalidInputException, com.company.MaxInputException {
        if(a>100000 || b>100000){
            throw new com.company.MaxInputException();
        }
        if(a==8 || b==9) {
            throw new com.company.InvalidInputException();
        }
        return a + b;
    }
    double subtract(double a, double b) throws com.company.MaxInputException {
        if(a>100000 || b>100000){
            throw new com.company.MaxInputException();
        }
        return a - b;
    }
    double multiply(double a, double b)throws com.company.MaxInputException, com.company.MaxMultiplyInputException {
        if(a>100000 || b>100000){
            throw new com.company.MaxInputException();
        }
        else if(a>7000 || b>7000){
            throw new com.company.MaxMultiplyInputException();
        }
        return a * b;
    }
    double divide(double a, double b) throws com.company.CannotDivideByZeroException, com.company.MaxInputException {
        if(a>100000 || b>100000){
            throw new com.company.MaxInputException();
        }
        if(b==0){
            throw new com.company.CannotDivideByZeroException();
        }
        return a / b;
    }
}

public class temp1 {
    public static void main(String[] args) throws InvalidInputException, CannotDivideByZeroException, MaxInputException, MaxMultiplyInputException {
        CustomCalculator c = new CustomCalculator();
// c.add(8, 9);
// c.divide(6, 0);
// c.divide(600000000, 40);
        c.multiply(4, 14);
    }
}

