<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordType;
use App\Form\ModificationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormError;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

#[Route('/account')]
class AccountController extends AbstractController
{
    private $entityManager;
    private $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/', name: 'account', methods: ['GET', 'POST'])]
    public function index(UserRepository $repository, Request $request): Response
    {
        /** @var User|null $user */
        $user = $this->getUser();
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $form = $this->createForm(ModificationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $user->setImageFile(null);
            $this->addFlash('success', 'Votre modification a été effectuée avec succès');
            return $this->redirectToRoute('account');
        }

        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController', 'form' => $form->createView()
        ]);
    }

    #[Route('/reset', name: 'passwordReset', methods: ['GET', 'POST'])]
    public function editAction(Request $request): Response
    {
        /** @var User|null $user */
        $user = $this->getUser();
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $oldPassword = $request->request->get('change_password')['oldPassword'];

            if ($this->passwordHasher->isPasswordValid($user, $oldPassword)) {
                $newEncodedPassword = $this->passwordHasher->hashPassword($user, $form->get('plainPassword')->getData());
                $user->setPassword($newEncodedPassword);
                $this->entityManager->persist($user);
                $this->entityManager->flush();
                $this->addFlash('success', 'Votre mot de passe a bien été changé !');
                return $this->redirectToRoute('account');
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
                $this->addFlash('error', 'Votre ancien mot de passe est incorrect !');
            }
        }

        return $this->render('account/passwordChange.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}