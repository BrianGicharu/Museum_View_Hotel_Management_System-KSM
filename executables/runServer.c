#include<stdlib.h>
#include<string.h>

int main(){
	char host[20] = "localhost:7700", cmd[] = "php -S ", web[]= "START ";
	strcat(cmd, host);
	system(cmd);
	strcat(web, host);
	return 0;
}
