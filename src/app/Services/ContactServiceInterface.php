<?php

namespace App\Services;

interface ContactServiceInterface{
  /**
   * 問い合わせ内容を全て取得。
   *
   * @return Collection
   * 
   */
  public function getAll();

  /**
   * 部署名を全て取得する。
   *
   * @return array
   */
  public function getDepartmentNames();

  /**
   * 問い合せを作成する。
   * @param string $name 名前
   * @param string $email メールアドレス
   * @param string $content 内容
   * @param int $age 年齢
   * @return int $gender 性別 1:男性 2:女性 3:その他
   * @return int $department_id 問い合わせ部署id
   */
  public function createContact(string $name, string $email, string $content, int $age, int $gender, int $department_id);
}