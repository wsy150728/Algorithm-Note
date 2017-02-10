/*递归算法
**数制转换（十进制转换为其他进制）
*/
#include <stdio.h>
#include <string.h>
int main(){
    char s[80];
    int base ,old;
    printf("请输入十进制数:");
    scanf("%d",&old);
    printf("请输入要转换的进制:");
    scanf("%d",&base);
    convto(s,old,base);
    printf("%s\n",s);
    return 1;
}

void convto(char *s, int n, int b){
    char bit[] = {"0123456789ABCDEF"};
    int len;
    if(n==0){
        strcpy(s,"");
        return;
    }
    convto(s, n/b, b);
    len = strlen(s);
    s[len] = bit[n%b];
    s[len + 1] = '\0';
}
