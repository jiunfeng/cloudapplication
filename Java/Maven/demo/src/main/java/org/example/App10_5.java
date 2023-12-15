/* 
 * 5.(終止繼承)假設有一CRectangle類別，用來表示長方形，其資料成員及成員函數如下：
class CRectangle
{
   Protected int length;
   protected int width;
   
   final void show()
   {
       System.out.println("length="+length);
       System.out.println("width="+width);
   }
}
請於main() method裡加入下列敘述，並完成下面的程式設計：
CData obj1=new CData(6,12);
  	obj1.area();
(a)	試在CRectangle類別裡加入一個有引數的建構元CRectangle(int l, int w)，它可用來把length設值為l，把width設值為w。
(b)	建立一個CData類別，使得CData繼承自CRectangle類別。在CData類別內裡加入建構元CData(int l, int w)，可用來呼叫父類別的建構元CRectangle(int l, int w)。
(c)	在CData類別裡加入show() method，用來改寫父類別的show() method。
public void show()
{
   System.out.print("length="+length);
   System.out.println(", width="+width);
}
在CData類別裡加入area() method，用來呼叫show() method，顯示資料成員的值後，再顯示長方形的面積。

 */
package org.example;

class CRectangle {
    protected int length;
    protected int width;

    public CRectangle(int l, int w) {
        length = l;
        width = w;
    }

    void show() {
        System.out.println("length=" + length);
        System.out.println("width=" + width);
    }
}

// 建立一個CData類別，使得CData繼承自CRectangle類別。
// 在CData類別內裡加入建構元CData(int l, int w)，可用來呼叫父類別的建構元CRectangle(int l, int w)。

class CData extends CRectangle {
    public CData(int l, int w) {
        super(l, w);
    }

    // (c) 在CData類別裡加入show() method，用來改寫父類別的show() method。
    void show() {
        System.out.print("length=" + length);
        System.out.println(", width=" + width);
    }

    // 在CData類別裡加入area() method，用來呼叫show() method，顯示資料成員的值後，再顯示長方形的面積。
    void area() {
        this.show();
        System.out.println(length * width);
    }
}

public class App10_5 {
    public static void main(String[] args) {
        CData obj1 = new CData(6, 12);
        obj1.area();
    }
}
