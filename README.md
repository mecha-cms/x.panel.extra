Custom GUI Proposal for [Panel](https://github.com/mecha-cms/x.panel)
=====================================================================

At this time, the control panel extension already has support for several fields that added to follow the development of standards HTML5 form elements. These fields can still work without JavaScript and therefore I provide them in the control panel extension as the default fields:

 - `field` (unknown field type)
 - `field/blob`
 - `field/blobs`
 - `field/color`
 - `field/colors`
 - `field/combo`
 - `field/content`
 - `field/date`
 - `field/date-time`
 - `field/email`
 - `field/hidden`
 - `field/item`
 - `field/items`
 - `field/link`
 - `field/number`
 - `field/pass`
 - `field/query`
 - `field/range`
 - `field/set`
 - `field/source`
 - `field/text`
 - `field/time`
 - `field/toggle`
 - `field/u-r-l`

In some cases, developers may need certain fields to create unique types of websites. For example, they might need a field with type of `money` to support currency input because they want to create an online store using Mecha. Although this can be handled by the default `text` field, providing currency units and validating numbers can be a problem for clients.

This extension aims to provide various types of fields to handle complex data by making it available in the control panel field API without having to make the core control panel extension becomes bloated in the size.

Several types of fields planned to be realized are:

 - [ ] `field/asset`
 - [ ] `field/code-mirror` (will be available as a separate extension)
 - [ ] `field/country`
 - [ ] `field/list`
 - [ ] `field/matrix`
 - [x] `field/money`
 - [ ] `field/sortable`

Additional GUI panels that might be worth adding:

 - [ ] `accordion`
 - [x] [`chart`](https://github.com/mecha-cms/x.panel.type.chart)
 - [ ] `dialog` or `window`
 - [x] `table`

---

Release Notes
-------------

### main

 - Added `field/money` field type.
 - Added `table` type.
