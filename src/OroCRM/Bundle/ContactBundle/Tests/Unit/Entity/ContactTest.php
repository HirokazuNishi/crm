<?php

namespace OroCRM\Bundle\ContactBundle\Tests\Unit\Entity;


use OroCRM\Bundle\ContactBundle\Entity\Contact;

class ContactTest extends \PHPUnit_Framework_TestCase
{
    public function testBeforeSave()
    {
        $entity = new Contact();
        $entity->beforeSave();
        $this->assertInstanceOf('\DateTime', $entity->getCreatedAt());
    }

    public function testDoPreUpdate()
    {
        $entity = new Contact();
        $entity->doPreUpdate();
        $this->assertInstanceOf('\DateTime', $entity->getUpdatedAt());
    }
}
