<?php

/**
 * BaseDefaultValueTest
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * 
 * @method string           getName() Returns the current record's "name" value
 * @method DefaultValueTest setName() Sets the current record's "name" value
 * 
 * @package    symfony12
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDefaultValueTest extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('default_value_test');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}