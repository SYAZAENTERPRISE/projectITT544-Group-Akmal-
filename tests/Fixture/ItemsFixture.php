<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ItemsFixture
 *
 */
class ItemsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'itemID' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'itemName' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'itemPrice' => ['type' => 'decimal', 'length' => 3, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'itemType' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'brandID' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'stockID' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'brandID' => ['type' => 'index', 'columns' => ['brandID'], 'length' => []],
            'stockID' => ['type' => 'index', 'columns' => ['stockID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['itemID'], 'length' => []],
            'itemFK1' => ['type' => 'foreign', 'columns' => ['brandID'], 'references' => ['brands', 'brandID'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'itemFK2' => ['type' => 'foreign', 'columns' => ['stockID'], 'references' => ['stocks', 'stockID'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'itemID' => 1,
                'itemName' => 'Lorem ipsum dolor sit amet',
                'itemPrice' => 1.5,
                'itemType' => 'Lorem ipsum dolor sit amet',
                'brandID' => 1,
                'stockID' => 1
            ],
        ];
        parent::init();
    }
}
