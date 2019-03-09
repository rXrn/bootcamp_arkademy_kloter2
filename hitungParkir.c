#include <stdio.h>

int lama;
int hitungParkir(int waktu);

main() {
	printf("Lama waktu parkir: "); scanf("%d", &lama);
	printf("Total biaya parkir Anda adalah %d", hitungParkir(lama));
}

int hitungParkir(int waktu) {
	int i, total=0;
	for (i=1;i<=waktu;i++) {
		if (i==1 || i==2) {
			total+=2000;
		}
		
		else if (total<=9000) {
			total+=1000;
		}
	}
	
	return total;
}
