<?php


namespace App\Event;


use App\Entity\Article;
use Symfony\Contracts\EventDispatcher\Event;

class ArticleCreateEvent extends Event
{
    public const Name = "article.created";

    /**
     * @var Article
     */

    protected $article;

    /**
     * ArticleCreateEvent constructor.
     * @param $article
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * @return mixed
     */

    public function getArticle()
    {
        return $this->article;
    }



}