import java.util.*;

public class incomeTaxCalcuation {
        public static void main(String[] args) {
            Scanner sc=new Scanner(System.in);
            System.out.println("Please enter your annual income");
            float income= sc.nextFloat();
            float tax= 0f;

            //tax calculation
            if( income<=250000){
                tax=0;
            }
            else if(250000<income && income<=500000){
                tax=0.05f*(income-250000);
            }
            else if(500000<income && income<=1000000) {
                tax = 0.05f * (500000 - 250000);
                tax = tax + 0.2f * (income - 500000);
            }
             else if (income>1000000){
                tax = 0.05f * (500000 - 250000);
                tax = tax + 0.2f * (1000000 - 500000);
                tax = tax + 0.3f*(income-1000000);
            }
            System.out.println("Your total payable tax in " +tax);

    }
}
