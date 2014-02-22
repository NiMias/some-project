<?php

namespace Nimias\Bundle\UdndBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VartaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', null, array(
                'attr' => array(
                    'class' => 'tinymce',
                ),
                'label' => 'Опис',
            ))
            ->add('coordinators', null, array(
                'attr' => array(
                    'class' => 'tinymce'
                ),
                'label' => 'Координатори',
            ))
            ->add('social', null, array(
                'attr' => array(
                    'class' => 'tinymce'
                ),
                'label' => 'Спільноти в соцмережах',
            ))
            ->add('badges', null, array(
                'attr' => array(
                    'class' => 'tinymce'
                ),
                'label' => 'Опізнавальні знаки',
            ))
            ->add('regionId', null, array(
                'label' => 'Регіон',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nimias\Bundle\UdndBundle\Entity\Varta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nimias_bundle_udndbundle_varta';
    }
}
