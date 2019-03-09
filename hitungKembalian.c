#include <stdio.h>

int nom[] = {50000, 20000, 10000, 5000, 2000, 1000, 500};
int jum[6], total, uang;

void hitungKembalian(int total, int uang);
main() {
	printf("Total belanja: "); scanf("%d", &total);
	printf("Jumlah uang: "); scanf("%d", &uang);
	hitungKembalian(total, uang);
}

void hitungKembalian(int total, int uang) {
	int i,sisa;
	int kembali = uang-total;
	int num=7;
	
	for(i=0;i<sizeof(nom)/sizeof(int);i++) {
		if ((kembali) >= nom[i]) {
			sisa = kembali%nom[i];
			jum[i]=(kembali-sisa)/nom[i];
			kembali=sisa;
			printf("%d x %d\n", jum[i], nom[i]);
		}
	}
}
		
	
