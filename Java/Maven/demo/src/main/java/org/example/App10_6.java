/* 6. (類別之源練習)假設有一CRectangle類別，用來表示長方形，其資料成員如下：
class CRectangle
{
   protected int length;   
   protected int width;
}
(a)	試在CRectangle類別裡加入一個有引數的建構元CRectangle(int l, int w)，它可用來把length設值為l，把width設值為w。
(b)	試在main() method裡建立一個CRectangle類別的物件rect，並利用CRectangle(2,6)為物件設定初值。
(c)	試在main() method裡將物件rect傳入println()，println() 會印出 "length=xxx, width=yyy, area=zzz" 
字串，其中xxx與yyy分別代表物件rect資料成員length與width的值，zzz為長方形物件的面積。
 */

package org.example;

class CRectangle {
    protected int length;
    protected int width;

    public CRectangle(int l, int w) {
        length = l;
        width = w;
    }
}

public class App10_6 {
    public static void main(String[] args) {
        CRectangle rect = new CRectangle(2, 6);
        System.out.printf("長為%d高為%d的長方形面積為%d%n", rect.length, rect.width, rect.length * rect.width);
    }
}
