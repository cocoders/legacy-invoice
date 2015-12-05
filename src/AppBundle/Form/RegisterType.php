<?php

namespace AppBundle\Form;

use L3l0Labs\SystemAccess\UseCase\Registration\Command;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
            ->add('email','text', ['label' => 'Username'])
            ->add('password', 'password')
            ->add('vatIdNumber', 'integer', ['label' => 'VAT'])
            ->add('save', 'submit', ['label' =>'Create User']);
    }
    public function configureOptions(OptionsResolver $resolver) {
        
        $resolver->setDefaults([
            'data_class' => Command::class,
            'empty_data' => function (FormInterface $form) {
                return new Command(
                    $form->get('email')->getData(),
                    $form->get('password')->getData(),
                    $form->get('vatIdNumber')->getData()
                );
            }
        ]);
    }
    public function getName() {
        return 'app_bundle_register_type';
    }
    
}