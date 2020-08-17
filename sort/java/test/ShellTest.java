package test;

import code.Shell;

import java.util.Arrays;

@SuppressWarnings("rawtypes")
public class ShellTest {

    public static void main(String[] args) {
        Integer[] a1 = {9, 1, 2, 5, 7, 4, 8, 6, 3, 5};

        System.out.println(Arrays.toString(a1));

        Shell.sort(a1);

        System.out.println(Arrays.toString(a1));
    }
}
