<?php

namespace App\Form;

use App\Command\CreateLinkCommand;
use App\Entity\Link;
use App\Message\CreateLinkMessage;
use App\Message\UpdateLinkMessage;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateLinkType extends CreateLinkType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UpdateLinkMessage::class,
        ]);
    }
}
