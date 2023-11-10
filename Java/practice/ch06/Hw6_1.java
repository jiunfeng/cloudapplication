/*
1.設陣列array宣告為
int array[]={3,5,0,3,2,4,1,6,8,5,4,3,2};
(a)	試撰寫一程式，利用length計算陣列array內元素的個數。
接續 (a)，試找出陣列array內元素的值介於3~6之間（包含3和6）的元素共有幾個。
/* output-----------------
陣列元素的個數:13
介於3~6的陣列元素值有8個
------------------------*/

package practice.ch06;

public class Hw6_1 {
    public static void main(String[] args) {
        int array[] = { 3, 5, 0, 3, 2, 4, 1, 6, 8, 5, 4, 3, 2 };
        System.out.println("陣列元素共有:" + array.length + "。");
        int count = 0;
        for (int i = 0; i < array.length; i++) {

            if (array[i] >= 3 && array[i] <= 6) {
                count++;
            }
        }
        System.out.println("陣列介於3~6之間的元素共有:" + count + "個。");
    }
}
