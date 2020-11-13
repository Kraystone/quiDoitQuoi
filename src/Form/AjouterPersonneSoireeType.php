<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjouterPersonneSoireeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextareaType::class, [
                'attr' => [
                    'placeholder' => "Nom de la personne",
                    'class' =>'form-control',
                ]
            ])
            ->add('argent',TextareaType::class, [
                'attr' => [
                    'placeholder' => "Montant donnée",
                    'class' =>'form-control',
                ]
            ])
            //->add("ok", SubmitType::class, ["label"=>"Enregistrer"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
            "id" => -1,
        ]);
    }
}
