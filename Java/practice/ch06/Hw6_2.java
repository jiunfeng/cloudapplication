/* 2.下表為某學生從星期一至星期四的各科考試成績：
            星期一	星期二	    星期三	    星期四
科目一	(0,0)83	    (0,1)90	    (0,2)76	    (0,3)83
科目二	(1,0)68	    88	92	    60
科目三	(2,0)79	    93	67	    91
請將上表的內容直接於程式中以陣列初值方式設定，並依序完成下列各題：
(a) 印出陣列內容。
(b) 每日的平均成績。
(c) 科目一、科目二與科目三的平均成績。
/* output----------------------
星期1 星期2 星期3 星期4
科目1  83    90    76    83
科目2  68    88    92    60
科目3  79    93    67    91

星期1的平均成績是 76.666664
星期2的平均成績是 90.333336
星期3的平均成績是 78.333336
星期4的平均成績是 78.0

科目1的平均成績是 83.0
科目2的平均成績是 77.0
科目3的平均成績是 82.5
------------------------*/

package practice.ch06;

import java.util.Arrays;

public class Hw6_2 {
    public static void main(String[] args) {
        int array[][] = { { 83, 68, 79 }, { 90, 88, 93 }, { 76, 92, 67 }, { 83, 60, 91 } };
        // JDK8的用法可以用lambda及steam實現，印出二維陣列的內容
        for (int i = 0; i < array.length; i++) {
            Arrays.stream(array[i]).forEach(element -> System.out.println(element + " "));
        }
        // for (int i = 0; i < array.length; i++) {
        // System.out.println(array[i]);
        // for (int ii = 0; ii < array[i].length; ii++) {
        // System.out.println(array[i][ii]);
        // }
        // }

        for (int i = 0; i < array.length; i++) {
            int sum1[] = { 0 };
            Arrays.stream(array[i]).forEach(element -> sum1[0] += element);
            float average = (float) sum1[0] / 3;
            System.out.println("平均分數為" + average);
        }

        for (int i = 0; i < array[0].length; i++) {
            int sum = 0;
            for (int ii = 0; ii < array.length; ii++) {
                sum += array[ii][i];
            }

            System.out.println("各科成績平均" + sum / 4);
        }

    }
}
