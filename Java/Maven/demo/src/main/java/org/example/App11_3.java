// 3.	(多重繼承)下面的程式碼是修改自習題2，其中增加了一個iColor介面。iColor介面裡定義了1個method：
//       public void showColor();	// 顯示顏色      
//     請在CWin類別裡撰寫showColor() method的定義，使得我們可以利用CWin類別來顯示物件的顏色、width、height與面積。
// 01   // hw11_9, 多重繼承的練習
// 02   interface iShape
// 03   {   
// 04      public void show();  
// 05      public int area(); 
// 06   }
// 07   interface iColor
// 08   {
// 09      public void showColor();
// 10   }
// 11   class CWin implements iShape,iColor
// 12   {
// 13      // 請完成這個部分的程式碼
// 14   }
// 15   
// 16   public class hw11_9
// 17   {
// 18      public static void main(String args[])
// 19      {
// 20         CWin win=new CWin(5,7,"Green");
// 21         win.show();
// 22      }
// 23   }

package org.example;

// hw11_9, 多重繼承的練習
interface iShape {
    public void show();

    public int area();
}

interface iColor {
    public void showColor();
}

class CWina implements iShape, iColor {
    // 請完成這個部分的程式碼
    protected int width, height;
    protected String color;

    public CWina(int w, int h, String str) {
        width = w;
        height = h;
        color = str;
    }

    public void show() {
        System.out.println("width=" + width);
        System.out.println("height=" + height);
        System.out.println("area=" + area());
    }

    public int area() {
        return width * height;
    }

    public void showColor() {
        System.out.println("color=" + color);

    }
}

public class App11_3 {
    public static void main(String args[]) {
        CWina win = new CWina(5, 7, "Green");
        win.show();
        win.showColor();
    }
}