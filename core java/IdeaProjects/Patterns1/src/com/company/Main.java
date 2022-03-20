package com.company;

public class Main {

    public static void main(String[] args) {
	// write your code here
     int n = 5;

     for (int i=n; i>=1; i--) {
         for(int j=1; j<=i; j++){
             System.out.print(j+" ");
         }
         System.out.println();
     }
    }
}
