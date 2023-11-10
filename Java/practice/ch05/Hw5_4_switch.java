/* Hw5_4
試由程式中直接設定一個1~7之間的整數day，代表星期一到星期日。
若day的值是1~5，則印出 "今天要上班"，若day的值是6~7，則印出 "今天休息"，若day的值不是1~7，則印出 "輸入錯誤"。
使用switch
*/
package practice.ch05;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Hw5_4_switch {
    public static void main(String[] args) {
        // 宣告變數並從使用者介面讀取輸入
        Scanner scanner = new Scanner(System.in);
        System.out.println("請輸入星期幾:");

        // 設計回應
        try {
            int day = scanner.nextInt();
            switch (day) {
                case 1:
                    System.out.println("今天是星期" + day + "請你去上班。");
                    break;
                case 2:
                    System.out.println("今天是星期" + day + "請你去上班。");
                    break;
                case 3:
                    System.out.println("今天是星期" + day + "請你去上班。");
                    break;
                case 4:
                    System.out.println("今天是星期" + day + "請你去上班。");
                    break;
                case 5:
                    System.out.println("今天是星期" + day + "請你去上班。");
                    break;
                case 6:
                    System.out.println("今天是星期" + day + "放假。");
                    break;
                case 7:
                    System.out.println("今天是星期" + day + "放假。");
                    break;

                default:
                    System.out.println("不知道你輸入的是甚麼死人骨頭。");
                    break;
            }
        } catch (InputMismatchException errorinput) {
            errorinput.printStackTrace();
            System.out.println("輸入的不是整數請重新輸入。");
            scanner.nextLine();
        }
        ;

    }
}
