/* Hw5_1
假設某加油站的工讀生每個月打工的薪資，可以依照下列方式計算：
60個小時之內，基本時薪為每小時100元
61~75個小時，以基本時薪的1.5倍計算
76個小時以後以基本時薪的2.5倍計算
例如，如果工作時數為80小時，則薪資為60*100+15*100*1.5+5*100*2.5=9500元。
試撰寫一程式，設定某工讀生該月的工作時數為93小時，然後計算實領的薪資。
 */
package practice.ch05;

import java.util.Scanner;

/**
 * Hw5_1
 */
public class Hw5_1 {

    public static void main(String args[]) {
        Scanner sc01 = new Scanner(System.in);
        System.out.println("Enter array length do you want.");
        int time = sc01.nextInt();
        int MoneyTotal = 0; // 使用printf這個方法用到的變數都要初始化不然會編譯錯誤
        if (time <= 60) {
            MoneyTotal = time * 100;
        } else if (time <= 75) {
            MoneyTotal = 100 * 60 + (time - 60) * 150;
        } else if (time > 75) {
            MoneyTotal = 100 * 60 + 15 * 150 + (time - 75) * 250;
        }
        System.out.printf("Total money are %d", MoneyTotal);
    }

}
