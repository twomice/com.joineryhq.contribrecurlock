# Lock recurring contributions

In a nonprofit context, allowing the end user to edit and/or cancel their own recurring
contributions is generally desirable. In a fee-for-services environment, this is
not always true; it can be desirable to require the end user to update their
recurring payments through other channels.

This extension changes the required permissions for the recurring contribution 
"update" and "cancel" forms. CiviCRM core requires "make online contributions" for
these forms. This extension causes these forms to require both CiviCRM permissions 
"access CiviContribute" and "edit contributions."
