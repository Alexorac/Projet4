<?php

// src/OC/BookingBundle/Controller/EmailController.php 


namespace OC\BookingBundle\Controller;

class EmailController extends Controller

{
    public function indexAction($name, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                    'Emails/registration.html.twig',
                    array('name' => $name)
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;
    
        $mailer->send($message);
    
        // or, you can also fetch the mailer service this way
        // $this->get('mailer')->send($message);
    
        return $this->render(...);
    }
}