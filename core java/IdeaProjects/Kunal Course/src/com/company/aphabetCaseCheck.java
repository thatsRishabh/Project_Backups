package com.company;

import java.util.Scanner;

public class aphabetCaseCheck {
    public static void main(String[] args) {
        String abc="rishabh";
//      char ch=abc.charAt(0);

        Scanner sc = new Scanner(System.in);
        char ch = sc.nextLine().charAt(0);
        if (ch >= 'a' && ch <= 'z') {
            System.out.print(ch);
            System.out.print(" is lower case");
        } else {
            System.out.print(ch);
            // if we write as we have written below, it will print its ascii value
            System.out.println(+ch+ " is upper case");
        }
    }
}
