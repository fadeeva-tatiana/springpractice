<?php

namespace App\Modules\AboutMe\Infrastructure;

use App\Modules\AboutMe\App\ImageRepositoryInterface;
use App\Modules\AboutMe\Model\Image;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;


class ImageRepository implements ImageRepositoryInterface
{
    private ObjectRepository $repository;
    private EntityManagerInterface $main;

    public function __construct(EntityManagerInterface $main)
    {
        $this->manager = $main;                                              
        $this->repository = $this->manager->getRepository(Image::class);    //получение таблицы картинок из базы
    }
    //добавить удаление 
    //изменение
    public function addPhoto(Image $image): void
    {

    }
    public function getPhotos(string $title): ?array
    {
        return $this->repository->findBy([
            'keyword' => $title,
        ]);
    }
}