package com.company;

import java.util.*;
public class Main {

    public static void main(String[] args) {
        // write your code here
        Scanner sc = new Scanner(System.in);
        System.out.println("enter the first number");
        int a = sc.nextInt();
        System.out.println("enter the second number");
        int b = sc.nextInt();
        System.out.println("enter operation\n for sum input 1\n for division input 2\n for minus input 3\n for multiply input 4");
        int c = sc.nextInt();

        switch (c) {
            case 1:
                System.out.println(a + b);
                break;
            case 2:
                if (a > b) {
                    System.out.println(a / b);
                } else if (b == 0) {
                    System.out.println("Invalid Division");
                } else {
                    System.out.println("Invalid Number");
                }
                break;
            case 3:
                System.out.println(a - b);
                break;
            case 4:
                System.out.println(a * b);
                break;
            default:
                System.out.println("Invalid number");
        }
    }
}


