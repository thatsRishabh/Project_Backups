import java.util.Scanner;

public class indexNumber {
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
        System.out.println("Enter the number which index you want know");
        int x=sc.nextInt();

        // output
        for (int i = 0; i < arraySize. length; i++) {
            if( arraySize[i]==x)
                System.out.println("The entered number is at " +i);
        }
    }
}
