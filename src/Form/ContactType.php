<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Ihr Name',
                'constraints' => array(
                    new NotBlank(array("message" => "Please provide your name")),
                )
            ))
            ->add('email', EmailType::class, array('label' => 'Ihre E-Mail-Adresse',
                'constraints' => array(
                    new NotBlank(array("message" => "Bitte geben Sie eine gültige E-Mail-Adresse ein.")),
                    new Email(array("message" => "Ihre E-Mail-Adresse scheint nicht gültig zu sein.")),
                )
            ))
            ->add('pain', ChoiceType::class, array('label' => 'Ich habe Schmerzen/Symptome',
                'choices' => array(
                    'Ja' => 1,
                    'Nein' => 0,
                )
            ))
            ->add('what', ChoiceType::class, array('label' => 'Wo haben Sie Schmerzen?',
                'multiple' => true,
                'required' => false,
                'choices' => array(
                    'Kopf/Gesicht' => 'Kopf / Gesicht',
                    'Nacken (HWS) / Schulter / Arm / Hand'   => 'Nacken (HWS) / Schulter / Arm / Hand',
                    'Rumpf / Bauch / Brust' => 'Rumpf / Bauch / Brust',
                    'Kreuzschmerz (LWS) / Bein / Fuß' => 'Kreuzschmerz (LWS) / Bein / Fuß',
                )
            ))
            ->add('strength', ChoiceType::class, array('label' => 'Wie lange schon?',
                'choices' => array(
                    'Schmerzen akut (< 3 Wochen)' => 'Schmerzen akut (weniger als 3 Wochen)',
                    'Schmerzen chronisch (> 3 Monate)' => 'Schmerzen chronisch (mehr als 3 Monate)',
                )
            ))
            ->add('where', ChoiceType::class, array('label' => 'Andere Symptome außer Schmerzen',
                'choices' => array(
                    'Gefühlsstörung/Taubheit' => 'Gefühlsstörung / Taubheit',
                    'Kraftlosigkeit/ Schwäche' => 'Kraftlosigkeit / Schwäche',
                    'Blasenstörung' => 'Blasenstörung',
                )
            ))
            ->add('callback', TextType::class, array('label' => 'Möchten Sie von uns zur Terminvereinbarung zurückgerufen werden?', 'attr' => array('placeholder' => 'Ihre Telefonnummer'),
                'required' => false,
            ))
            ->add('problem', TextType::class, array('label' => 'Ich habe keine Schmerzen, aber… ',
                'required' => false,))
            ->add('message', TextareaType::class, array('label' => 'Ihre Nachricht',
                'constraints' => array(
                    new NotBlank(array("message" => "Bitte geben Sie eine Nachricht ein.")),
                )
            ))
            ->add('protection', CheckboxType::class, [
                'label' => ' ',
                'mapped' => false,
                'constraints' => new IsTrue(),
            ])
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'error_bubbling' => true
        ));
    }

    public function getName()
    {
        return 'callback_form';
    }
}