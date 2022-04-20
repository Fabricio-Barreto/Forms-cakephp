<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserFixture
 */
class UserFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'UserName' => 'Lorem ipsum dolor sit amet',
                'UserUF' => 'Lorem ipsum dolor sit amet',
                'UserCity' => 'Lorem ipsum dolor sit amet',
                'UserCPF' => 'Lorem ipsum dolor sit amet',
                'UserNumber' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
