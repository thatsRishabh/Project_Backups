package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        // take name input and give same output
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the size");
        int size = sc.nextInt();
        String arraySize[] = new String[size];

        System.out.println("Enter different names");
        for (int i=0; i<size; i++)
        {
            arraySize[i] = sc.next();
        }
        for (int i=0; i<size; i++)
        System.out.println("Entered names are " +arraySize[i]);
    }
}
