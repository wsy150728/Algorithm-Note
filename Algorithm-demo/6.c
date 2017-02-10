/*分治算法-先分解再合并
** n(2的次方)个人安排n-1天两两完成比赛，一个选手一天只能参加一次
*/
#include <stdio.h>
#define MAXN 64
int a[MAXN+1][MAXN+1]={0};
void gamecal(int k,int n){//处理编号k选手开始的n个选手的日程
	int i,j;
	if(n==2){
		a[k][1] = k;
		a[k][2] = k+1;
		a[k+1][1] = k+1;
		a[k+1][2] = k;
	}else{
		gamecal(k,n/2);
		gamecal(k+n/2,n/2);
		for(i=k;i<k+n/2;i++)//填充右下角
		{
			for(j=n/2+1;j<=n;j++){
				a[i][j] = a[i+n/2][j-n/2];
			}
		}
		for(i=k+n/2;i<k+n;i++)//填充右上角
		{
			for(j=n/2+1;j<=n;j++){
				a[i][j] = a[i-n/2][j-n/2];
			}
		}
	}
}
int main(){
	int m,i,j;
	printf("输入参赛选手人数：");
	scanf("%d",&m);
	j=2;
	for(i=2;i<8;i++){
		j=j*2;
		if(j==m) break;
	}
	if(i>=8)
	{
		printf("参赛选手人数必须为2的整数次幂，且不超过64!\n");
		return 0;
	}

	gamecal(1,m);
	printf("\n编号");
	for(i=2;i<=m;i++)
		printf("%2d天",i-1);
	printf("\n");
	for(i=1;i<=m;i++){
		for(j=1;j<=m;j++)
			printf("%4d",a[i][j]);
		printf("\n");
	}
	return 0;
}