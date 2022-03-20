package com.company.oops;

import java.util.Arrays;
import java.util.Scanner;

public class callingOfMethods {
    public static void main(String[] args) {
        Scanner sc= new Scanner(System.in);
        int c= sc.nextInt();
        int d= sc.nextInt();
        System.out.println("This is calling of 1st method " +num1(c,d));

        //void type
        num(c,d);

        // Arrays.toString method
        num2(c,d);


    }
    static void num(int a, int b) {
        System.out.println("This is your entered number " +a*b+ " here");
        // its return type is void so need not to mention return type
    }
    static int num1(int c, int d){
        return c+d;
    }
    static void num2(int c, int d){
        int[] num2={c,d};
        System.out.println(Arrays.toString(num2));
    }
}