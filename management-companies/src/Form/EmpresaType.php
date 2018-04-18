<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EmpresaType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
            ->add('titulo', TextType::class, [
                'required' => true,
                'label' => 'Título',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('telefone', TextType::class, [
                'required' => true,
                'label' => 'Telefone',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('endereco', TextType::class, [
                'required' => true,
                'label' => 'Endereço',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('cep', TextType::class, [
                'required' => true,
                'label' => 'CEP',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('cidade', TextType::class, [
                'required' => true,
                'label' => 'Cidade',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('estado', TextType::class, [
                'required' => true,
                'label' => 'Estado',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('descricao', TextareaType::class, [
                'required' => true,
                'label' => 'Descrição',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('categoria', EntityType::class, [
                'class' => 'App\Entity\Categoria',
                'choice_label' => 'descricao',
                'placeholder' => 'Selecione',
                'multiple' => true,
                'label' => 'Categoria',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('enviar', SubmitType::class, [
                'label' => 'Salvar',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
    ]);
  }

  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults([
            // Configure your form options here
    ]);
  }

}
