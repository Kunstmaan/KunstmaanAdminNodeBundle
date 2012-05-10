<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Kunstmaan\AdminNodeBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * PageAdminType
 */
class PageAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('title');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'page';
    }
}