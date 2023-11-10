/* Hw5_4
試由程式中直接設定一個1~7之間的整數day，代表星期一到星期日。
若day的值是1~5，則印出 "今天要上班"，若day的值是6~7，則印出 "今天休息"，若day的值不是1~7，則印出 "輸入錯誤"。
用try來寫再使用者隨便輸入錯誤的時候處理
 */
package practice.ch05;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Hw5_4_try {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        while (true) {

            try {
                System.out.println("Please Enter A Number:");
                int userInput = scanner.nextInt();
                System.out.println("The Number is:" + userInput);
                break;
            } catch (InputMismatchException errorinput) {
                errorinput.printStackTrace();
                System.out.println("輸入的不是整數請重新輸入。");
                scanner.nextLine();
            }
        }
        scanner.close();

    }
}
