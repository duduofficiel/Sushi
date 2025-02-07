<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Your Name',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Name is mandatory',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Your Email',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Email is mandatory',
                    ]),
                ],
            ])
            ->add('subject', TextType::class, [
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Subject',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Subject is mandatory',
                    ]),
                ],
            ])
            ->add('message', TextareaType::class, [
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Your Message',
                    'rows' => 4,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Message is mandatory',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary w-100',
                ],
                'label' => 'Send Message',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
