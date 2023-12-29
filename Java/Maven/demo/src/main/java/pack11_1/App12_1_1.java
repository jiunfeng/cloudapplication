// 1.	(檔案的分割)下面的程式碼包含了CBox與hw12_1兩個類別。試將CBox與hw12_3類別分別存成兩個檔案，但這兩個檔案均在同一個目錄內，然後個別編譯並執行之。

// 01   // hw12_1,檔案分割的綀習
// 02   class CBox
// 03   {
// 04      private int length;
// 05      private int width;
// 06      private int height;      
// 07      
// 08      public CBox(int l,int w, int h)
// 09      {
// 10         length=l;
// 11         width=w;
// 12         height=h;
// 13      }
// 14      public void show()
// 15      {
// 16         System.out.print("L="+length+", W="+width);
// 17         System.out.println(", H="+height); 
// 18         System.out.println("Volume="+vol()); 
// 19      }  
// 20      public int vol()
// 21      {
// 22         return length*width*height;
// 23      }
// 24   }  
// 25    
// 26   public class hw12_1
// 27   {
// 28      public static void main(String args[])
// 29      {
// 30         CBox box=new CBox(3,5,7);
// 31         box.show();
// 32      }
// 33   }

package pack11_1;

public class App12_1_1 {
    public static void main(String args[]) {
        CBox box = new CBox(3, 5, 7);
        box.show();
    }
}
