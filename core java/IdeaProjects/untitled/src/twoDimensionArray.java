import java.util.Scanner;

public class twoDimensionArray {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the row size");
        int row = sc.nextInt();
        System.out.println("Enter the columns");
        int cols = sc.nextInt();
        int array[][] = new int[row][cols];

        //input
        for (int i = 0; i < row; i++) {
            for (int j = 0; j < cols; j++) {
                array[i][j] = sc.nextInt();
            }
        }
        //output
        for (int i = 0; i < row; i++) {
            for (int j = 0; j < cols; j++) {
                System.out.println("The number are " + array[i][j]);
            }
            System.out.println();
        }
    }
}
