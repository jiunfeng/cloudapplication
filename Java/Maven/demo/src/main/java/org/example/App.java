package org.example;

import java.util.Arrays;

/**
 * Hello world!
 *
 * 3. 試撰寫一程式，請利用三維陣列A完成下列題目的要求。陣列A的值如下：
 * int A[][][]={{{15,50,65},{38,94,25},
 * {79,44,19},{89,54,73}},
 * {{14,90,46},{43,23,67},
 * {32,56,78},{94,78,40}}};
 * 
 * (a) 印出陣列內容。
 * (b) 在陣列A裡找出所有大於等於50的元素，將該元素重新設值為99。
 * (c) 印出完成(b)之後的陣列內容。
 * 
 */
public class App {
    public static void main(String[] args) {
        int array3Way[][][] = { { { 15, 50, 65 }, { 38, 94, 25 },
                { 79, 44, 19 }, { 89, 54, 73 } },
                { { 14, 90, 46 }, { 43, 23, 67 },
                        { 32, 56, 78 }, { 94, 78, 40 } } };

        for (int i = 0; i < array3Way.length; i++) {
            for (int ii = 0; ii < array3Way[i].length; ii++) {
                for (int iii = 0; iii < array3Way[i][ii].length; iii++) {
                    System.out.print(array3Way[i][ii][iii] + " ");
                    if (array3Way[i][ii][iii] > 50) {
                        array3Way[i][ii][iii] = 99;
                    }
                }
                System.out.println();
            }
        }
        for (int i = 0; i < array3Way.length; i++) {
            Arrays.stream(array3Way[i]).forEach(element -> System.out.println(element + " "));

        }

    }
}
