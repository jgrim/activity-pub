<?php
declare(strict_types=1);

namespace JGrim\ActivityPub\Enums;

use JGrim\ActivityPub\Contracts\Type\Core\TypeActivityInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeActorInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeCollectionInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeCollectionPageInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeIntransitiveActivityInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeLinkInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeObjectInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeOrderedCollectionInterface;
use JGrim\ActivityPub\Contracts\Type\Core\TypeOrderedCollectionPageInterface;

enum ActivityPubType: string
{
    case OBJECT = TypeObjectInterface::class;
    case LINK = TypeLinkInterface::class;
    case ACTIVITY = TypeActivityInterface::class;
    case INTRANSITIVE_ACTIVITY = TypeIntransitiveActivityInterface::class;
    case COLLECTION = TypeCollectionInterface::class;
    case ORDERED_COLLECTION = TypeOrderedCollectionInterface::class;
    case COLLECTION_PAGE = TypeCollectionPageInterface::class;
    case ORDERED_COLLECTION_PAGE = TypeOrderedCollectionPageInterface::class;
    case ACTOR = TypeActorInterface::class;
}
