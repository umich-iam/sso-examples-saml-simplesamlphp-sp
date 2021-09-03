<?php

$metadata['https://shib-idp-staging.dsc.umich.edu/idp/shibboleth'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://shib-idp-staging.dsc.umich.edu/idp/shibboleth',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://shib-idp-staging.dsc.umich.edu/idp/profile/SAML2/Redirect/SSO',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://shib-idp-staging.dsc.umich.edu/idp/profile/SAML2/Redirect/SLO',
    ),
  ),
  'certificate' => 'umich-idp-staging-remote.crt',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);
