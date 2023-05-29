<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\ContactRepositoryInterface;
use App\Models\Contact;
use App\Models\Department;

/**
 * Contactリポジトリ実装クラス
 */
class ContactRepository implements ContactRepositoryInterface
{
  /**
   * @inheritDoc
   */
  public function getAll()
  {
    return Contact::all();
  }

  /**
   * @inheritDoc
   */
  public function getDepartmentNames()
  {
    return Department::pluck('name', 'id');
  }

  /**
   * @inheritDoc
   */
  
  public function createContact(string $name, string $email, string $content, int $age, int $gender, int $department_id)
  {
    return Contact::create([
      'name' => $name,
      'email' => $email,
      'content' => $content,
      'age' => $age,
      'gender' => $gender,
      'department_id' => $department_id
    ]);
  }
}