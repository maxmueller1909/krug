<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Form\CallbackType;
// use Form\ContactType;
// use Symfony\Component\HttpFoundation\Request;
// use Swift_Mailer;

class ContactController extends AbstractController
{
    #[Route('/kontakt', name: 'contact')]
    public function contactAction()
    {

//         $form = $this->createForm(ContactType::class);
//
//         if ($request->isMethod('POST')) {
//             // Refill the fields in case the form is not valid.
//             $form->handleRequest($request);
//
//             if($form->isValid()){
//
//                 $message = (new \Swift_Message('Kontaktanfrage von ' . $form->get('name')->getData()))
//                     ->setFrom($form->get('email')->getData())
//                     ->setTo('kontakt@neurospine-chemnitz.de')
//                     ->setBody(
//                         $this->renderView(
//                             'AppBundle:Emails:contact.html.twig',
//                             array(
//                                 'name' => $form->get('name')->getData(),
//                                 'email' => $form->get('email')->getData(),
//                                 'pain' => $form->get('pain')->getData(),
//                                 'what' => $form->get('what')->getData(),
//                                 'strength' => $form->get('strength')->getData(),
//                                 'where' => $form->get('where')->getData(),
//                                 'callback' => $form->get('callback')->getData(),
//                                 'problem' => $form->get('problem')->getData(),
//                                 'message' => $form->get('message')->getData()
//                             )
//                         ),
//                         'text/plain'
//                     );
//
//                 $send = $mailer->send($message);
//                 // Send mail
//                 if($send){
//                     $request->getSession()->getFlashBag()->add('success', 'Ihr Anfrage ist bei uns eingetroffen. Wir werden sie so schnell wie möglich bearbeiten.');
//                     return $this->redirectToRoute('contact', ['_fragment' => 'finish']);
//                 }else{
//                     // An error ocurred, handle
//                     var_dump("Errooooor :(");
//                 }
//             }
//         }
//
//         return $this->render('Contact/contact.html.twig', array(
//             'form' => $form->createView()
//         ));
// return new Response('Main Contact');
    }

    #[Route('/callback', name: 'callback')]
    public function callbackAction()
    {
//         // Create the form according to the FormType created previously.
//         // And give the proper parameters
//         $form = $this->createForm(CallbackType::class,null,array(
//             // To set the action use $this->generateUrl('route_identifier')
//             'action' => $this->generateUrl('callback'),
//         ));
//
//         if ($request->isMethod('POST')) {
//             // Refill the fields in case the form is not valid.
//             $form->handleRequest($request);
//
//             if($form->isValid()){
//
//                 $message = (new \Swift_Message('Rückruf angefragt von ' . $form->get('name')->getData()))
//                     ->setFrom('noreply@neurospine-chemnitz.de')
//                     ->setTo('kontakt@neurospine-chemnitz.de')
//                     ->setBody(
//                         $this->renderView(
//                             'AppBundle:Emails:callback.html.twig',
//                             array('name' => $form->get('name')->getData(), 'phone' => $form->get('number')->getData(), 'msg' => $form->get('message')->getData())
//                         ),
//                         'text/plain'
//                     )
//                 ;
//
//                 $send = $mailer->send($message);
//                 // Send mail
//                 if($send){
//                     $request->getSession()->getFlashBag()->add('success', 'Ihr Rückruf wurde erfolgreich vermerkt. Wir melden uns bei Ihnen.');
//                     return $this->redirectToRoute('home_homepage', ['_fragment' => 'finish']);
//                 }else{
//                     // An error ocurred, handle
//                     var_dump("Errooooor :(");
//                 }
//             }
//         }
//
//         return $this->render('Contact/callback.html.twig', array(
//             'callback' => $form->createView()
//         ));
return new Response('Callback-Form');
    }
}
