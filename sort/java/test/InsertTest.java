package test;

import code.Bubble;
import code.Insert;

import java.util.Arrays;

@SuppressWarnings("rawtypes")
public class InsertTest {

    public static void main(String[] args) {
        Integer[] a1 = {4,5,6,3,2,1};

        System.out.println(Arrays.toString(a1));

        Insert.sort(a1);

        System.out.println(Arrays.toString(a1));
    }
}
