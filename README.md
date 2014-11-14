Rad Symfony Edition
================

Key assumptions:
* AngularJS app
* Site must support multiple locales
* REST interface
* CMS out of the box
* Social networks integration

_______
Pre-installed bundles
* SonataAdminBundle
* KnpPaginatorBundle
* JmsAopBundle
* StofDoctrineExtensionsBundles
* FOSMessageBundle
* SonataClassificationBundle 
* REST :
** FOSRestBundle
** JMSSerializerBundle
** NelmioApiDocBundle
* I18N:
** JMSI18nRoutingBundle
** JMSTranslationBundle
** LuneticsLocaleBundle
** SonataIntlBundle
* Security :
** JmsSecurityExtraBundle
** SonataUserBundle
** FOSUserBundle
* Imaging
** SonataMediaBundle
** LiipImagineBundle
* Frontend dev
** MopaBootstrapBundle
** GenemuFormBundle
** KnpMenuBundle
___
Front End
* Twitter Bootstrap & SASS
* Angularjs
* jQuery

___
Content fixtures:
* Home Page
* TOS page (todo)
* Contact details page (todo)

_______
TODO:
* Include angularjs & jquery
* Enquiries entity & admin
* CMS
* Site settings admin: facebook/linkedin, email, phone, company name, copyright message
* User sign in logs
* Header nav bar : contact, register, login user | hello user
* footer - TOS link, contact link, copyright message
* Enquiry form with captcha & contact details page
* OrnicarGravatarBundle
* OroCRM ? 
* IgorwFileServeBundle
* FpJsFormValidatorBundle ?
* SpyTimelineBundle ?
* avro/translator-bundle ?
* willdurand/js-translation-bundle
* JMSI18nRoutingBundle 
* SonataTranslationBundle  ?
* a2lix/translation-form-bundle ?
* knplabs/doctrine-behaviors
* prezent/doctrine-translatable-bundle ?
* ArgentumTranslationBundle ?
* LexikTranslationBundle ?
* SonataCommentBundle ?

Later:
* CMF CreateBundle


Installation:
* php app/console translation:extract en --enable-extractor=jms_i18n_routing