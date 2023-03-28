<?php
namespace App\Controller;

use App\Entity\Blog;
use App\Form\Type\BlogFormType;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class MainController extends AbstractController {

  /**
   * @Route("/")
   *
   * @param BlogRepository $blogRepository
   *
   * @return Response
   */

  public function index(BlogRepository $blogRepository): Response {
    $data = [
      'blogs' => $blogRepository->findAll(),
    ];
    return $this->render('list.html.twig', $data);
  }












  /**
   * @Route("/create")
   *
   * @param Request $request
   * @param \Doctrine\ORM\EntityManagerInterface $entityManager
   * @param $slugger
   *
   * @return Response
   */

  public function createBlog(Request $request, EntityManagerInterface $entityManager,SluggerInterface $slugger, ValidatorInterface $validator) {

    $form = $this->createForm(BlogFormType::class, new Blog());
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $blog = $form->getData();
      $entityManager->persist($blog);
      $entityManager->flush();
      $this->addFlash('success', 'Blog was created!');
    }

    if ($form->isSubmitted() && $form->isValid()) {
      $blog = $form->getData();
      $imageFile = $form->get('imageFile')->getData();
      if ($imageFile) {
        $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

        try {
          $imageFile->move(
            $this->getParameter('image_directory'),
            $newFilename
          );
        } catch (FileException $e) {
          $this->addFlash('error', 'Image cannot be saved.');
        }
        $blog->setImage($newFilename);
      }

      $entityManager->persist($blog);
      $entityManager->flush();
      $this->addFlash('success', 'Blog was created!');
    }

    return $this->render('create.html.twig', [
      'form' => $form->createView()
    ]);
  }

  /**
   * @Route("/nikolay")
   *
   * @param BlogRepository $blogRepository
   *
   * @return Response
   */

  public function listBlog(BlogRepository $blogRepository): Response{
    $data = [
      'item' => $blogRepository->find(6),
    ];
    return $this->render('nikolay.html.twig',$data);
  }
}

