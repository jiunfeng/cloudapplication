package practice;

class Human {
    int[] arruy;
    static int total = 0;
    String name;
    int age;
    int value;

    static void printTotal() {
        System.out.println(total);
    }

    /*
     * static void printName(){
     * System.out.println(name);
     * }
     * error static方法不能呼叫非靜態成員
     * ref:https://yubin551.gitbook.io/java-note/basic_java_programming/
     * reservedwordstatic/staticmethod
     */
    Human(String str) {
        name = str;
        total++;
    }
}

class App_static {
    public static void main(String args[]) {
        int value = 10;
        System.out.println(value);
        Human tina = new Human("Tina");
        System.out.println("Add:" + tina.name);
        Human mark = new Human("Mark");
        System.out.println("Add:" + mark.name);
        Human.printTotal();
        // System.out.println("The total persons are: " + Human.total);
    }
}
