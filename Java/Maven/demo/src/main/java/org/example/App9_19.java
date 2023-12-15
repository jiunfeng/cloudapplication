package org.example;

class CBox1 {
    private int length;
    private int width;
    private int height;
    private CColor cr;

    public CBox1(int l, int w, int h, String col) {
        length = l;
        width = w;
        height = h;
        cr = new CColor(col);
    }

    class CColor {
        private String color;

        public CColor(String clr) {
            color = clr;
        }

        public void show_color() {
            System.out.println("color = " + color);
        }
    }

    public void show() {
        System.out.println("length = " + length);
        System.out.println("width = " + width);
        System.out.println("height = " + height);
        cr.show_color();
        System.out.println("cr.color = " + cr.color);
    }
}

public class App9_19 {
    public static void main(String args[]) {
        CBox1 box = new CBox1(2, 3, 4, "blue");
        box.show();
    }
}
