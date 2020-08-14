package test;

import code.Student;

public class CompareTest {
    public static void main(String[] args) {
        Student c1 = new Student();
        c1.setAge(15);
        c1.setName("张三");

        Student c2 = new Student();
        c2.setAge(18);
        c2.setName("李四");

        Comparable max = getMax(c1,c2);

        System.out.println(max);
    }
    public static Comparable getMax(Comparable c1, Comparable c2){
        int result = c1.compareTo(c2);

        if(result >= 0){
            return c1;
        }

        return c2;
    }
}
