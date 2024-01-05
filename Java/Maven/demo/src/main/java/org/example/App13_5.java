package org.example;

/* 
5.三角形的三個邊為a、b、c，其中a、b為兩股，c為斜邊。當 時，即構成直角三角形。下面的程式，可以判斷是否為直角三角形：
01   // hw13_5,
02   public class hw13_5
03   {
04      public static void main(String args[])
05      {        
06         int a=3;
07         int b=4;
08         int c=5;
09         
10         if((a+b)<c || (a+c)<b || (b+c)<a)
11            System.out.println("不構成三角形");
12         else if((a*a+b*b)==c*c)
13            System.out.println("這是直角三角形");        
14         else
15            System.out.println("這不是直角三角形");
16       }
17   }
請利用try-catch區塊捕捉自訂的例外，完成下面各題：
(a)	若此三邊不能構成一個三角形，則拋出自訂的NotTriangleException，並印出 "不構成三角形" 字串。
(b)	若此三角形為直角三角形，則拋出自訂的RightTriangleException，並印出 "這是直角三角形" 字串。
(c)	若此三角形不為直角三角形，則拋出自訂的NotRightTriangleException，並印出 "這不是直角三角形" 字串。

*/
class NotTriangleException extends Exception {

}

class RightTriangleException extends Exception {

}

class NotRightTriangleException extends Exception {

}

public class App13_5 {
    public static void main(String args[]) {
        int a = 3;
        int b = 4;
        int c = 5;

        try {

            if ((a + b) < c || (a + c) < b || (b + c) < a)
                throw new NotRightTriangleException();
            else if ((a * a + b * b) == c * c)
                throw new RightTriangleException();
            else
                throw new NotTriangleException();

        } catch (

        NotTriangleException e) {
            // TODO: handle exception
            System.out.println("不構成三角形");
        } catch (RightTriangleException e) {
            // TODO: handle exception
            System.out.println("這是直角三角形");
        } catch (NotRightTriangleException e) {
            // TODO: handle exception
            System.out.println("這不是直角三角形");
        }

    }
}