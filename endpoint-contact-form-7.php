<?php

function somaSendLeadConversionViaWpCf7( $cf7 )
{

  if ($cf7->title() != 'Título do Formulário que deseja integrar') {
    return false;

  }else{

    $submission = WPCF7_Submission::get_instance();

    if ( $submission ) {
      somaSendCrm($submission->get_posted_data());
    }

  }

}


function somaSendCrm($formData)
{

  /*Aqui vc pega os dados do formulário que foram passados no $formData
  e realiza a ação que deseja com os dados preenchidos no formulário*/

}

add_action('wpcf7_mail_sent', 'somaSendLeadConversionViaWpCf7');