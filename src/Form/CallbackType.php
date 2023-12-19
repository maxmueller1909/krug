<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\NotBlank;

class CallbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Ihr Name',
                'constraints' => array(
                    new NotBlank(array("message" => "Bitte geben Sie ihren Namen an.")),
                )
            ))
            ->add('number', TextType::class, array('label' => 'Ihre Telefonnummer'))
            ->add('message', TextareaType::class, array('label' => 'Ihre Nachricht',
                'constraints' => array(
                    new NotBlank(array("message" => "Bitte geben Sie eine Nachricht ein.")),
                )
            ))
            ->add('protection', CheckboxType::class, [
                'label' => ' ',
                'mapped' => false,
                'required' => true,
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