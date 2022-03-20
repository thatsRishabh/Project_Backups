package com.company;
import java.util.*;

public class Arrays {
    public static void main(String[] args) {
        // write your code here
        // Take input number of certain size than display index number of any number
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the size");
        int size = sc.nextInt();
        int arraySize[] = new int[size];

        //input
        System.out.println("Please provide the different numbers");
        for (int i = 0; i < size; i++) {
            arraySize[i] = sc.nextInt();
        }
        // output
        for (int i = 0; i < size; i++) {
            System.out.println("The entered number is " +arraySize[i]);
        }
    }
}
