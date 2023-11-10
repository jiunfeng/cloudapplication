/* 設計一個抽彩票
 * 可抽0~10元不等的金額
 * 直到抽中0元就不能再抽
 */
package practice.ch05;

import java.util.Random;

public class Lotto {
    public static void main(String[] args) {
        int bonus = 0;
        int totalGet = 0;
        Random random = new Random();
        do {
            bonus = random.nextInt(10);
            totalGet += bonus;
            if (bonus == 0) {
                break;
                System.out.printf("抽到0元結束%n");
            }
            System.out.printf("抽中%d元,目前總計獲得%d元。%n", bonus, totalGet);
        } while (bonus != 0);
        ;
    }

}
