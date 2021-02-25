<?php

namespace App\Form;

use App\Entity\Diplome;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiplomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idO')
            ->add('nom')
            ->add('prenom')
            ->add('promo')
            ->add('nomUsage')
            ->add('prenomPv')
            ->add('dateMj')
            ->add('commentaire')
            ->add('niveauDiplome')
            ->add('email')
            ->add('telephone')
            ->add('reseauSocial')
            ->add('dateDeces')
            ->add('situationRs')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Diplome::class,
        ]);
    }
}
