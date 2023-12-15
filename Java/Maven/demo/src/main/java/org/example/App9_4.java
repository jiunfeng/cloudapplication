/* 4.   想利用CScore類別來記錄學生的資料，其類別的定義如下：
class CScore
{
private String name;	// 姓名
private int math;		// 數學成績
private int eng;		// 英文成績
}
    試依題意回答下列各題：
(a)	試設計一個建構元CScore(String str,int m, int e)，當此建構元呼叫時，便會自動設定name=str，math=m，eng=e。
(b)	請利用CScore類別型態的陣列儲存以下的資料：
Name    Math    English
Fiona    86       92
Ryan     95       79
Ariel    81       83
(c)	試撰寫show(CScore c[]) method，用來顯示類別物件陣列內所有的資料。傳入show() method的是一整個類別物件陣列。輸出的格式請參考(b)題中的表格。
 */

package org.example;

public class App9_4 {
    public static void main(String[] args) {

        CScore cir[] = { new CScore("Fiona", 86, 92), new CScore("Ryan", 95, 79), new CScore("Ariel", 81, 83) };
        show(cir[0]);
        show(cir[1]);
        show(cir[2]);
    }

    static void show(CScore c) {
        System.out.printf("%s的數學成績為%d 英文成績為%d%n", c.out()[0], c.out()[1], c.out()[2]);
    }
}

class CScore {
    private String name; // 姓名
    private int math; // 數學成績
    private int eng; // 英文成績

    CScore(String str, int m, int e) {
        name = str;
        math = m;
        eng = e;

    }

    Object[] out() {
        Object[] list = { name, math, eng };
        return list;
    }
}
