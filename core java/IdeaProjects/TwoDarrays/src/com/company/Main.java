package com.company;
import java.util.*;

public class Main {

    public static void main(String args[]) {
        //Take input of array data and create 2d array of n rows and colums
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the row size");
        int row = sc.nextInt();
        System.out.println("Enter the columns");
        int cols = sc.nextInt();
        int array[][] = new int[row][cols];

        //input
        System.out.println("Enter the number of arrays");
        for (int i = 0; i < row; i++) {
            for (int j = 0; j < cols; j++) {
                array[i][j] = sc.nextInt();
            }
        }
        //output
        for (int i = 0; i < row; i++) {
            for (int j = 0; j < cols; j++) {
                System.out.print(array[i][j] +" ");
            }
            System.out.println();
        }
    }
}
