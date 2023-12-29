package pack11_1;

class CBox {
    private int length;
    private int width;
    private int height;

    public CBox(int l, int w, int h) {
        length = l;
        width = w;
        height = h;
    }

    public void show() {
        System.out.print("L=" + length + ", W=" + width);
        System.out.println(", H=" + height);
        System.out.println("Volume=" + vol());
    }

    public int vol() {
        return length * width * height;
    }
}
