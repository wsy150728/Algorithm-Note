package code;

public class Merge {

    private static Comparable[] assist;

    private static boolean less(Comparable v, Comparable w) {
        return v.compareTo(w) < 0;
    }

    public static void exchange(Comparable[] a, int i, int j) {
        Comparable temp = a[i];
        a[j] = a[i];
        a[i] = temp;
    }


    public static void sort(Comparable[] a) {
        // 初始化assist
        assist = new Comparable[a.length];
        // 定义最小索引和最大索引
        int lo = 0;
        int hi = a.length - 1;
        //
        sort(a, lo, hi);
    }

    public static void sort(Comparable[] a, int lo, int hi) {
        // 安全性校验
        if (lo >= hi) {
            return;
        }

        // 对lo到hi之间的数据进行分组
        int mid = lo + (hi - lo) / 2;

        // 分别对每一组数据进行排序
        sort(a, lo, mid);
        sort(a, mid + 1, hi);
        // 把两个组中的数据进行归并
        merge(a, lo, mid, hi);
    }

    private static void merge(Comparable[] a, int lo, int mid, int hi) {
        // 定义三个指针
        int p1 = lo;
        int p2 = mid + 1;
        int i = lo;

        // 遍历到某个指针指完，剩下的直接复制过来
        while (p1 <= mid && p2 <= hi) {
            if (less(a[p1], a[p2])) {
                assist[i++] = a[p1++];
            } else {
                assist[i++] = a[p2++];
            }
        }


        // p1走完,p2 copy
        while (p1 <= mid) {
            assist[i++] = a[p1++];
        }

        // p2走完,p1 copy
        while (p2 <= hi) {
            assist[i++] = a[p2++];
        }

        for (int index = lo; index <= hi; index++) {
            a[index] = assist[index];
        }
    }
}
