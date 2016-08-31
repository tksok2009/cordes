#include <stdio.h>
#include <stdlib.h>

#define MAX 15
#define kind 4

int coins[kind] = { 10, 50, 100, 500 };

int calc(int coins[], size_t len, int much, int max_coin_count, int sum, int coin_count){
    if (coin_count > max_coin_count || sum > much){
        return 0;
    }
    if (sum == much){
        return 1;
    }

    int cnt = 0;
    for (size_t i = len; i > 0; i--){
        cnt += calc(coins, i, much, max_coin_count, sum + coins[i - 1], coin_count + 1);
    }
    return cnt;
}

int main(int argc, char *argv[]){
    int much;
    printf("両替する金額を指定してください＞");
    scanf("%d", &much);
    int cnt = calc(coins, sizeof(coins) / sizeof(coins[0]), much, MAX, 0, 0);
    printf("両替の組み合わせは%d通りあります。\n", cnt);

    return 0;
}