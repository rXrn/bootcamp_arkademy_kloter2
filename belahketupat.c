#include <stdio.h>

int i,k,j;
main()
{
	int tinggi;
	printf("tinggi: "); scanf("%d", &tinggi);
	int l = 1;
	int n = (tinggi/2)+1;
	printf("\n");
	for(i=1;i<=n;i++)
	{
		for(k=n;k>i;k--){
			printf("=");
		}
		for(j=1;j<=l;j++){
			printf("*");
		}
		l+=2;
		for(k=n;k>i;k--){
			printf("=");
		}
		printf("\n");
	}
	l -= 4;

	for(i=(n-1);i>=1;i--)
	{
		for(k=i;k<=(n-1);k++)
		{
			printf("=");
		}
		for(j=l;j>=1;j--)
		{
			printf("*");
		}
		l-=2;
		for(k=i;k<=(n-1);k++)
		{
			printf("=");
		}
		printf("\n");
	}
}
