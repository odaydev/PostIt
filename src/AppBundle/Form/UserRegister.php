<?php

namespace AppBundle\Form;

use AppBundle\Entity\Users;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserRegister extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('photo', FileType::class, array('attr' => array('placeholder' => 'Ajoutez un fichier .jpg/.jpeg/.png', 'label' => 'Photo', 'name' => 'photo')))
            ->add('name', TextType::class, array('attr' => array('placeholder' => 'Votre Nom..', 'label' => 'Name', 'name' => 'name')))
            ->add('username', TextType::class, array('attr' => array('placeholder' => 'Votre pseudo..', 'label' => 'Pseudo', 'name' => 'login')))
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Votre email..', 'label' => 'Email', 'name' => 'email')))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password')))
            ->add('birthday', DateType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'datepicker']))
            ->add('presentation', TextareaType::class, array('attr' => array('placeholder' => 'Qui êtes-vous??', 'label' => 'Présentation', 'name' => 'presentation')))
            ->add('save', SubmitType::class, array('attr' => array('value' => 'inscription', 'name' => 'inscription')))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Users::class,
        ));
    }
}