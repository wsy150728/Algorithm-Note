/*�ݹ��㷨
**��׳�
*/
#include <stdio.h>
int main(){
	int i;
	printf("������Ҫ��׳˵���:"); 
	scanf("%d",&i);
	printf("%d�Ľ׳˽��Ϊ:%d\n",i,fact(i));
}

int fact(int n){
	if(n<=1)
		return 1;
	else
		return n*fact(n-1);
}
