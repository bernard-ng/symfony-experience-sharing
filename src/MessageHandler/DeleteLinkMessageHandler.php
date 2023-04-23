<?php

namespace App\MessageHandler;

use App\Message\DeleteLinkMessage;
use App\Repository\LinkRepository;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class DeleteLinkMessageHandler implements MessageHandlerInterface
{
    public function __construct(
        private readonly LinkRepository $repository
    ) {
    }

    public function __invoke(DeleteLinkMessage $message)
    {
        $this->repository->remove($message->_entity, true);
    }
}
