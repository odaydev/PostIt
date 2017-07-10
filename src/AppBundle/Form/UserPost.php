<?php

namespace AppBundle\Form;

use AppBundle\Entity\Post;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UserPost extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imagePost', FileType::class, array('attr' => array('placeholder' => 'Ajoutez un fichier .JPG', 'label' => 'Image', 'name' => 'fichier')))
            ->add('titlePost', TextType::class, array('attr' => array('placeholder' =>'Titre du Post', 'label' => 'Titre', 'name' => 'title')))
            ->add('categorie', TextType::class, array('attr' => array('placeholder' =>'La/Les catégorie(s)', 'label' => 'Catégorie(s)', 'name' => 'categories')))
            ->add('keywords', TextType::class, array('attr' => array('placeholder' =>'Les mots clés', 'label' => 'Keywords', 'name' => 'keywords')))
            ->add('textePost', TextareaType::class, array('attr' => array('placeholder' => 'Pose ton message!!!!', 'label' => 'Your Mood!!', 'name' => 'message')))
            ->add('save', SubmitType::class, array('attr' => array('name' => 'Post it!')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Post::class,
        ));
    }
}