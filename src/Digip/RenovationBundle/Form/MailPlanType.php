<?php

namespace Digip\RenovationBundle\Form;

use Digip\RenovationBundle\Service\HouseService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MailPlanType extends AbstractType
{
    /**
     * @return string The name of this type
     */
    public function getName()
    {
        return 'mail_plan';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('email', 'email', array(
                'label' => 'Mail mijn persoonlijk stappenplan naar',
            ))
            ->add('address', 'text', array(
                'label' => 'Mijn adres',
            ))
            ->add('newsletter', 'checkbox', array(
                'data' => true,
                'required' => false,
                'label' => 'Stad Gent ondersteunt energiezuinig renoveren met premies, bouwadvies en renovatiebegeleiding. Ik blijf graag op de hoogte van nieuwe initiatieven.',
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digip\RenovationBundle\Entity\House',
            'csrf_protection' => true,
        ));
    }
} 