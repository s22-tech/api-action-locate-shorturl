# api-action-locate-shorturl
### Checks if shorturl exists

This yourls plugin creates an api that can be used to check if a shorturl (keyword) already exists in the db.  It returns the results of its findings in either JSON or XML format that can be used in another script, or however you want to use it.

###### Example usage:
`https://example.com/yourls-api.php?username=admin&password=xxxx&action=locate_shorturl&keyword=abc101&format=json`

###### Installation

Install this plugin in the `yourls-install/user/plugins/` path.
Then activate it in the Manage Plugins admin section.

###### Addendum

To be honest, I'm not sure if this capability is already built-in to yourls, but I couldn't find it so I created this plugin.  It took me forever to find what I was looking for, so I added explanations in the code.  Armed with this information, you could use this plugin as a template to create your own api.

If I missed something, or there could be better/more explantions, please let me know.
