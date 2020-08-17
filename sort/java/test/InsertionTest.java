package test;

import code.Insertion;

import java.util.Arrays;

@SuppressWarnings("rawtypes")
public class InsertionTest {

    public static void main(String[] args) {
        Integer[] a1 = {4,5,6,3,2,1};

        System.out.println(Arrays.toString(a1));

        Insertion.sort(a1);

        System.out.println(Arrays.toString(a1));
    }
}
