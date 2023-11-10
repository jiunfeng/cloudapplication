/* Hw5_2
試撰寫一程式，印出從1到200之間，所有可以被9整除，又可以被7整除的數值。
 */
package practice.ch05;

import java.util.ArrayList;

public class Hw5_2 {
    public static void main(String[] args) {
        ArrayList<Integer> dynamicArray9 = new ArrayList<>();
        int originalSize9 = 0, originalSize7 = 0;
        int nowSize9 = 0, nowSize7 = 0;
        ArrayList<Integer> dynamicArray7 = new ArrayList<>();
        ArrayList<Integer> dynamicArrayOut = new ArrayList<>();
        for (int i = 1; i <= 200; i++) {
            originalSize9 = dynamicArray9.size();
            originalSize7 = dynamicArray7.size();
            if (i % 9 == 0) {
                dynamicArray9.add(i);

            }
            if (i % 7 == 0) {
                dynamicArray7.add(i);

            }
            if (originalSize9 != dynamicArray9.size() && originalSize7 != dynamicArray7.size()) {
                System.out.printf("%d能被7及9整除%n", i);
            }
            // System.out.printf("%s", dynamicArray);
        }

    }
}
