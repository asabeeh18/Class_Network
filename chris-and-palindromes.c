//chris-and-palindromes
//hackerrank
#include<stdio.h>
#include<string.h>
int main()
{
	int t,i,j,c,l;
	char s[50];
	scanf("%d",&t);
	while(t--)
	{
		scanf("%s",s);
		l=strlen(s);
		c=l/2;
		for(i=0;i<l-1;i++)
		{
			for(j=l-2;j>=0,i<l;j--)
			{
				if(s[i]==s[j] && i!=l-j-1)
				{
					