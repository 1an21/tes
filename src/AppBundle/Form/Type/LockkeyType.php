<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class LockkeyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$builder
          // ->add('lock', EntityType::class, array('class' => 'AppBundle:Lock', 'choice_label' => 'lock'));

        $builder
            ->add('key', EntityType::class, array('class' => 'AppBundle:Key', 'choice_label' => 'key'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Lockkey',
            'allow_extra_fields' => true,
        ]);
    }

    public function getName()
    {
        return 'lockkey';
    }
}
