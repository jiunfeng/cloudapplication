// 1.	設計一method，可傳回一個二維陣列的最大值，並測試此method。
// /* output---------------
// 75 29 10
// 38 45 16
// Maximum is 75
// ----------------------*/

package org.example;

public class App7_2 {
    public static void main(String[] args) {
        int array2Way[][] = { { 75, 29, 10 }, { 38, 45, 16 } };
        System.out.printf("此陣列最大值為%d", ArrayMax(array2Way));
    }

    public static int ArrayMax(int arr[][]) {
        int max = 0;
        for (int i = 0; i < arr.length; i++) {
            for (int ii = 0; ii < arr[i].length; ii++) {
                if (max < arr[i][ii]) {
                    max = arr[i][ii];
                }

            }
        }
        return max;
    }
}
