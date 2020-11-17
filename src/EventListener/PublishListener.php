<?php


namespace App\EventListener;


use App\Event\ArticleCreateEvent;

class PublishListener
{
    public function onArticleCreated(ArticleCreateEvent $event)
    {
        $event->getArticle()->setPublished(true);
    }
}