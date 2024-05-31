<?php

namespace Drupal\orchard_potd\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a settings form for Orchard Product of the Day settings.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'orchard_potd.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'orchard_potd_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['block_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Curated Block Title'),
      '#required' => TRUE,
      '#default_value' => $this->config(static::SETTINGS)->get('block_title') ?? '',
    ];
    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email'),
      '#placeholder' => $this->t('Enter email'),
      '#required' => TRUE,
      '#default_value' => $this->config(static::SETTINGS)->get('email') ?? '',
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $input = $form_state->getValues();
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('block_title', $input['block_title'])
      ->set('email', $input['email'])
      ->save();
    parent::submitForm($form, $form_state);
  }
}
