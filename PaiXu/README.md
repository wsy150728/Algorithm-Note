排序算法

        排序有内部排序和外部排序，内部排序是数据记录在内存中进行排序，而外部排序是因排序的数据很大
    ，一次不能容纳全部的排序记录，在排序过程中需要访问外存。

八大内部排序算法   
* 插入排序-直接插入排序
* 插入排序-希尔排序
* 选择排序-简单选择排序
* 选择排序-堆排序
* 交换排序-冒泡排序
* 交换排序-快速排序
* 归并排序
* 基数排序

1.插入排序-直接插入排序
    基本思想：将一个记录插入到已排序好的有序表中，从而得到一个新，记录数增1的有序表。
    即：先将序列的第1个记录看成是一个有序的子序列，然后从第2个记录逐个进行插入，直至整个序列有序为止。
    要点：设立哨兵，作为临时存储和判断数组边界之用。
    如果碰见一个和插入元素相等的，那么插入元素把想插入的元素放在相等元素的后面。所以，相等元素的前后顺序没有改变，
    从原无序序列出去的顺序就是排好序后的顺序，所以插入排序是稳定的。
    效率：
    时间复杂度：O（n^2）. 
    
    
2.插入排序-希尔排序

    