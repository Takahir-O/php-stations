<?php

namespace Src\Station11;

class Question
{
    /**
     * おやつ選出処理のメインメソッド
     *
     * @param array $sweets お菓子のデータ配列
     * @return array 選出されたお菓子のデータ配列
     */
    public function main(array $sweets): array
    {
        // 300円以内の予算で買えるお菓子を抽出
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, 300);

        // ランダムにお菓子のキーを3つ取得（合計金額が300円以内になるまで繰り返す）
        $selectedKeys = $this->getRandomKeys($lessThanBudgetSweets, 300);

        // 選ばれたキーに対応するお菓子の組み合わせを作成
        $combinations = $this->makeCombination($sweets, $selectedKeys);

        return $combinations;
    }

    /**
     * 予算内のお菓子を抽出する
     *
     * @param array $sweets お菓子のデータ配列
     * @param int $budget 予算
     * @return array 予算内のお菓子のデータ配列
     */
    private function getSweetsLessThanBudget(array $sweets, int $budget): array
    {
        $lessThanBudgetSweets = [];
        foreach ($sweets as $sweet) {
            if ($sweet['price'] <= $budget) {
                $lessThanBudgetSweets[] = $sweet;
            }
        }
        return $lessThanBudgetSweets;
    }

    /**
     * ランダムにお菓子のキーを取得する（合計金額が予算内になるまで繰り返す）
     *
     * @param array $lessThanBudgetSweets 予算内のお菓子のデータ配列
     * @param int $budget 予算
     * @return array ランダムに選ばれたお菓子のキー配列
     */
    private function getRandomKeys(array $lessThanBudgetSweets, int $budget): array
    {
        $keys = [];
        $totalPrice = 0;

        while (true) {
            $keys = array_rand($lessThanBudgetSweets, 3);
            $totalPrice = 0;
            foreach ($keys as $key) {
                $totalPrice += $lessThanBudgetSweets[$key]['price'];
            }
            if ($totalPrice <= $budget) {
                break;
            }
        }
        return $keys;
    }

    /**
     * お菓子の組み合わせを作成する
     *
     * @param array $sweets お菓子のデータ配列
     * @param array $keys 選ばれたお菓子のキー配列
     * @return array 選ばれたお菓子の組み合わせ配列
     */
    private function makeCombination(array $sweets, array $keys): array
    {
        $combinations = [];
        foreach ($keys as $key) {
            $combinations[] = $sweets[$key];
        }
        return $combinations;
    }
}
