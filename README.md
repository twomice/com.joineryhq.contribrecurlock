# Lock recurring contributions

In a nonprofit context, allowing the end user to edit and/or cancel their own recurring
contributions is generally desirable. In a fee-for-services environment, this is
not always true; it can be desirable to require the end user to update their
recurring payments through other channels.

This extension changes the required permissions for the recurring contribution 
"update" and "cancel" forms. CiviCRM core requires "make online contributions" for
these forms. This extension causes these forms to require both CiviCRM permissions 
"access CiviContribute" and "edit contributions."

## Support
![screenshot](/images/joinery-logo.png)

Joinery provides services for CiviCRM including custom extension development, training, data migrations, and more. We aim to keep this extension in good working order, and will do our best to respond appropriately to issues reported on its [github issue queue](https://github.com/twomice/com.joineryhq.contribrecurlock/issues). In addition, if you require urgent or highly customized improvements to this extension, we may suggest conducting a fee-based project under our standard commercial terms.  In any case, the place to start is the [github issue queue](https://github.com/twomice/com.joineryhq.contribrecurlock/issues) -- let us hear what you need and we'll be glad to help however we can.

And, if you need help with any other aspect of CiviCRM -- from hosting to custom development to strategic consultation and more -- please contact us directly via https://joineryhq.com