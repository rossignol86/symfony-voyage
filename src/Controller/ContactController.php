<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        if ($request->isMethod('POST')) {
            $prenom = $request->request->get('prenom');
            $nom = $request->request->get('nom');
            $agence = $request->request->get('agence');
            $email = $request->request->get('email');
            $telephone = $request->request->get('telephone');
            $objet = $request->request->get('objet');
            $messageContent = $request->request->get('message');

            $emailMessage = (new Email())
                ->from($email)
                ->to('ton-adresse@mail.com') // remplace par ton adresse
                ->subject('Nouveau message de contact : ' . $objet)
                ->html("
                    <p><strong>Prénom :</strong> $prenom</p>
                    <p><strong>Nom :</strong> $nom</p>
                    <p><strong>Société :</strong> $agence</p>
                    <p><strong>Email :</strong> $email</p>
                    <p><strong>Téléphone :</strong> $telephone</p>
                    <p><strong>Message :</strong><br>" . nl2br($messageContent) . "</p>
                ");

            $mailer->send($emailMessage);

            $this->addFlash('success', 'Votre message a bien été envoyé !');

            return $this->redirectToRoute('contact');
        }

        return $this->render('pages/contact.html.twig');
    }
}
