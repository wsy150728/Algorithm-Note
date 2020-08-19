package test;

import code.Merge;

import java.util.Arrays;

@SuppressWarnings("rawtypes")
public class MergeTest {

    public static void main(String[] args) {
        Integer[] a1 = {8, 4, 5, 7, 1, 3, 6, 2};

        System.out.println(Arrays.toString(a1));

        Merge.sort(a1);

        System.out.println(Arrays.toString(a1));
    }
}
