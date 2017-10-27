<?php

namespace OC\BookingBundle\Form;

use BookingBundle\Entity\Bookingform;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BookingformType extends AbstractType
{
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bookingDate',      DateType::class, array(
                'label'    => 'Date de la visite',
                'input' => 'datetime',
                'format' => 'dd/MM/yyyy',
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'js-datepicker'],
                ))
            ->add('ticketType',      ChoiceType::class, array(
                'label' =>  'Type de ticket',
                'choices'  => array(
                    'Journée' => 'full',
                    'Demi-journée' => 'half',
                )))
            ->add('nbVisitor',      ChoiceType::class, array(
                'label' =>  'Nombre de visiteur',
                'choices'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    )))
            ->add('bookingemail',   TextType::class, array(
                'label'    => 'Email'));

            $builder->add('visitors', CollectionType::class, array(
                'entry_type' => VisitorType::class,
                'entry_options' => array('label' => false),
                'allow_add' => true,
            ))

           

            ->add('save', SubmitType::class, array(
                'label' => 'Réserver',
                'attr' => array(
                'class' =>  'saveButton',
                'href' => "{{ path('oc_payment_form') }}",
                )));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\BookingBundle\Entity\Bookingform'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_bookingbundle_bookingform';
    }


}
