import java.util.Scanner;

public class maxMinValue {
             public static void main(String[] args) {
                 //Take set of numbers from user and give min or max
                 Scanner sc = new Scanner(System.in);
                 System.out.println("Enter the size");
                 int size = sc.nextInt();
                 int numbersSize[] = new int[size];

                 System.out.println("enter set of number");
                 for (int i = 0; i < size; i++) {
                     numbersSize[i] = sc.nextInt();
                 }
                 //max min function written below are in opposite
                 int min = Integer.MAX_VALUE;
                 int max = Integer.MIN_VALUE;

                 for (int i = 0; i <size; i++) {

                     if(numbersSize[i] < min) {
                         min = numbersSize[i];
                     }

                     if(numbersSize[i] > max) {
                         max = numbersSize[i];
                     }
                 }
                 System.out.println("max number is " + max);
                 System.out.println("min number is " + min);

             }
}
