<?php

namespace App\Form\Type;

use App\Enum\ArticleState;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleStateType extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => ArticleState::getStates(),
            'label' => 'Estado',
            'placeholder' => 'Seleccionar'
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
