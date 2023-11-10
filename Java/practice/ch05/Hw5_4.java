/* Hw5_4
試由程式中直接設定一個1~7之間的整數day，代表星期一到星期日。
若day的值是1~5，則印出 "今天要上班"，若day的值是6~7，則印出 "今天休息"，若day的值不是1~7，則印出 "輸入錯誤"。
 */
package practice.ch05;

import java.util.Scanner;

public class Hw5_4 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("請輸入今天星期幾:");
        int day = scanner.nextInt();

        while (day >= 7 || day <= 1) {
            System.err.printf("放屁!!!一周哪有第%d天。%n請重新輸入星期幾:", day);
            day = scanner.nextInt();
        }
        if (day <= 5) {
            System.out.printf("今天星期%d,乖乖當社畜。汪汪汪~%n", day);
        } else {
            System.out.printf("今天星期%d,爽啦~。%n", day);
        }
        scanner.close();
    }
}
