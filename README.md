Custom GUI Proposal for [Panel](https://github.com/mecha-cms/x.panel) Extension
===============================================================================

At this time, the control panel extension already has support for several fields that added to follow the development of standards HTML5 form elements. These fields can still work without JavaScript and therefore I provide them in the control panel extension as the default fields:

 - `""` (unknown field type)
 - `blob`
 - `blobs`
 - `color`
 - `colors`
 - `combo`
 - `content`
 - `date`
 - `date-time`
 - `email`
 - `hidden`
 - `item`
 - `items`
 - `link`
 - `number`
 - `pass`
 - `query`
 - `range`
 - `set`
 - `source`
 - `text`
 - `time`
 - `toggle`
 - `u-r-l`

In some cases, developers may need certain fields to create unique types of websites. For example, they might need a field with type of `money` to support currency input because they want to create an online store using Mecha. Although this can be handled by the default `text` field, providing currency units and validating numbers can be a problem for clients.

This extension aims to provide various types of fields to handle complex data by making it available in the control panel field API without having to make the core control panel extension becomes bloated in the size.

Several types of fields planned to be realized are:

 - `asset`
 - `code-mirror` (will be available as a separate extension)
 - `country`
 - `matrix`
 - `money`
 - `list`
 - `sortable`

Additional GUI panels that might be worth adding:

 - `accordion`
 - `chart`
 - `dialog` or `window`

---

Release Notes
-------------

### master

 - Added `money` field type.
 - Added test page.
