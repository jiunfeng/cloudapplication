/* Hw5_3
試撰寫一程式，利用break敘述來撰寫4個位數之密碼輸入的過程。使用者有三次的輸入機會，並須滿足下列的條件：
(a)	如果密碼輸入不對，則會再次的出現 "請輸入密碼:" 字串。
(b)	 如果三次的輸入都不對，則程式會印出 "密碼輸入超過三次!!" 字串，然後結束程式的執行。
(c)	 如果輸入正確，則印出"密碼輸入正確，歡迎使用本系統!!" 字串。
 */
package practice.ch05;

import java.io.Console;
import java.util.Scanner;

public class Hw5_3 {
    public static void main(String[] args) {
        Scanner sc01 = new Scanner(System.in);
        int count = 1;
        String userInput = "";
        String pasCorrect = "1234";
        while (count <= 3) {
            System.err.printf("請輸入使用者密碼:");
            userInput = sc01.next();
            if (userInput.equals(pasCorrect)) {
                System.out.println("密碼正確");
                break;
            } else {

                System.out.println("您輸入的密碼為:" + userInput + "\n密碼錯誤第" + count + "次。");
                if (count == 3)
                    System.err.println("嘗試次數已達上限");
            }
            count++;
        }
        sc01.close();
    }

}
