<?php
declare(strict_types=1);

namespace App\Services;

use App\Services\ContactServiceInterface;
use App\Repositories\ContactRepositoryInterface;

/**
 * Contact モデルに関するビジネスロジックを実装するためのサービスクラス
 */
class ContactService implements ContactServiceInterface
{
  /**
   * ContactRepositoryInterface のインスタンス
   *
   * @var ContactRepositoryInterface
   * 
   */
  protected $contactRepository;

  /**
   * 新しい ContactService インスタンスの生成
   *
   * @param ContactRepositoryInterface $contactRepository
   */
  public function __construct(ContactRepositoryInterface $contactRepository)
  {
    $this->contactRepository = $contactRepository;
  }

  /**
   * @inheritDoc
   */
  public function getAll()
  {
    return $this->contactRepository->getAll();
  }

  /**
   * @inheritDoc
   */
  public function getDepartmentNames()
  {
    return $this->contactRepository->getDepartmentNames();
  }

  /**
   * @inheritDoc
   */

  public function createContact(string $name, string $email, string $content, int $age, int $gender, int $department_id)
  {
    return $this->contactRepository->createContact($name, $email, $content, $age, $gender, $department_id);
  }
}