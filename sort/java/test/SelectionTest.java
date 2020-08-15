package test;

import code.Selection;

import java.util.Arrays;

public class SelectionTest {
    public static void main(String[] args) {
        Integer[] a = {1, 10, 8, 5, 3, 2, 6, 4};

        System.out.println(Arrays.toString(a));

        Selection.sort2(a);

        System.out.println(Arrays.toString(a));
    }
}
