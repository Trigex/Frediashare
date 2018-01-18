// USE WORDWRAP AND MAXIMIZE THE WINDOW TO SEE THIS FILE

c_styles={};c_menus={}; // do not remove this line



// You can remove most comments from this file to reduce the size if you like.









/******************************************************

	(1) GLOBAL SETTINGS

*******************************************************/



c_hideTimeout=1; // 1000==1 second

c_subShowTimeout=10;

c_keepHighlighted=true;

c_findCURRENT=false; // find the item linking to the current page and apply it the CURRENT style class

c_findCURRENTTree=true;

c_overlapControlsInIE=true;

c_rightToLeft=false; // if the menu text should have "rtl" direction (e.g. Hebrew, Arabic)









/******************************************************

	(2) MENU STYLES (CSS CLASSES)

*******************************************************/



// You can define different style classes here and then assign them globally to the menu tree(s)

// in section 3 below or set them to any UL element from your menu tree(s) in the page source





c_imagesPath=""; // path to the directory containing the menu images





c_styles['MM']=[ // MainMenu (the shorter the class name the better)

[

// MENU BOX STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#000000',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

0,		// Padding

'',	// Background ('color','transparent','[image_source]')

'',	// OVER Background

'',	// Color

'',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,verdanahelvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

0,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing
false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown2.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown2.gif]',	// OverSubMenuImageSource

13,			// SubMenuImageWidth

7,			// SubMenuImageHeight

'5',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'',		// VISITED Background

'',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'',	// CURRENT SubMenuImageSource

'',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];


c_styles['MM_upload']=[ // MainMenu (the shorter the class name the better)

[

// MENU BOX STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#000000',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

0,		// Padding

'',	// Background ('color','transparent','[image_source]')

'',	// OVER Background

'',	// Color

'',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,verdanahelvetica,sans-serif',	// FontFamily

'normal',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

0,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing
false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown2.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown2.gif]',	// OverSubMenuImageSource

13,			// SubMenuImageWidth

7,			// SubMenuImageHeight

'5',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'',		// VISITED Background

'',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'',	// CURRENT SubMenuImageSource

'font-size: 12px;',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'font-size: 12px;',		// CURRENT Custom additional CSS for the items (valid CSS)

'font-size: 12px;'		// VISITED Custom additional CSS for the items (valid CSS)

]];


c_styles['MM_tube']=[ // MainMenu (the shorter the class name the better)

[

// MENU BOX STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#000000',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

0,		// Padding

'',	// Background ('color','transparent','[image_source]')

'',	// OVER Background

'',	// Color

'',	// OVER Color

'11px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,verdanahelvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

0,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing
false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown2.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown2.gif]',	// OverSubMenuImageSource

13,			// SubMenuImageWidth

7,			// SubMenuImageHeight

'5',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'',		// VISITED Background

'',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'',	// CURRENT SubMenuImageSource

'',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

'font-size: 11px;'		// VISITED Custom additional CSS for the items (valid CSS)

]];

c_styles['MM_tube2']=[ // MainMenu (the shorter the class name the better)

[

// MENU BOX STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#000000',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

0,		// Padding

'',	// Background ('color','transparent','[image_source]')

'',	// OVER Background

'',	// Color

'',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,verdanahelvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

0,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing
true,			// UseSubMenuImage (true,false)

'['+baseurl+'media/site_images/arrowdown2.gif]',	// SubMenuImageSource ('[image_source]')

'['+baseurl+'media/site_images/arrowdown2.gif]',	// OverSubMenuImageSource

13,			// SubMenuImageWidth

7,			// SubMenuImageHeight

'5',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'',		// VISITED Background

'',		// VISITED Color

'none',			// VISITED TextDecoration

'['+baseurl+'media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'',	// CURRENT SubMenuImageSource

'',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];



c_styles['MM_admin']=[ // MainMenu (the shorter the class name the better)

[

// MENU BOX STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#000000',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

0,		// Padding

'',	// Background ('color','transparent','[image_source]')

'',	// OVER Background

'',	// Color

'',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,verdanahelvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

0,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing
false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown2.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown2.gif]',	// OverSubMenuImageSource

13,			// SubMenuImageWidth

7,			// SubMenuImageHeight

'5',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'',		// VISITED Background

'',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'',	// CURRENT SubMenuImageSource

'',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];


c_styles['MM_tube_admin']=[ // MainMenu (the shorter the class name the better)

[

// MENU BOX STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#000000',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

0,		// Padding

'',	// Background ('color','transparent','[image_source]')

'',	// OVER Background

'',	// Color

'',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,verdanahelvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

0,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing
false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown2.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown2.gif]',	// OverSubMenuImageSource

13,			// SubMenuImageWidth

7,			// SubMenuImageHeight

'5',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'',		// VISITED Background

'',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'',	// CURRENT SubMenuImageSource

'',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];



c_styles['SM']=[ // SubMenus

[

// MENU BOX STYLE

1,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#FFFFFF',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

3,		// Padding

'#FFFFFF',	// Background ('color','transparent','[image_source]')

'#7A7A7A',	// OVER Background

'#000000',	// Color

'#FFFFFF',	// OVER Color

'11px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,helvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

1,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing

false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown1.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown1.gif]',	// OverSubMenuImageSource

9,			// SubMenuImageWidth

5,			// SubMenuImageHeight

'6',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'#FFFFFF',		// VISITED Background

'#000000',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'[media/site_images/arrowdown1.gif]',	// CURRENT SubMenuImageSource

'padding-left: 10px; padding-right: 10px;',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];



c_styles['SM_admin']=[ // SubMenus

[

// MENU BOX STYLE

1,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#FFFFFF',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

3,		// Padding

'#FFFFFF',	// Background ('color','transparent','[image_source]')

'#7A7A7A',	// OVER Background

'#000000',	// Color

'#FFFFFF',	// OVER Color

'11px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,helvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

1,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

1,		// ItemsSeparatorSpacing

true,			// UseSubMenuImage (true,false)

'['+baseurl+'media/site_images/arrowleft1.gif]',	// SubMenuImageSource ('[image_source]')

'['+baseurl+'media/site_images/arrowleft1.gif]',	// OverSubMenuImageSource

5,			// SubMenuImageWidth

9,			// SubMenuImageHeight

'6',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'#FFFFFF',		// VISITED Background

'#000000',		// VISITED Color

'none',			// VISITED TextDecoration

'['+baseurl+'media/site_images/arrowleft1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'['+baseurl+'media/site_images/arrowleft1.gif]',	// CURRENT SubMenuImageSource

'padding-left: 5px;',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];



c_styles['SM_tube_admin']=[ // SubMenus

[

// MENU BOX STYLE

1,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#c5d0d6',	// BorderColor ('color')

0,		// Padding

'#f6f9fb',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

5,		// Padding

'#f6f9fb',	// Background ('color','transparent','[image_source]')

'#ffffff',	// OVER Background

'#173778',	// Color

'#173778',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,helvetica,sans-serif',	// FontFamily

'normal',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'underline',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

1,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#d9e1f2',	// ItemsSeparatorColor ('color','transparent')

1,		// ItemsSeparatorSpacing

true,			// UseSubMenuImage (true,false)

'['+baseurl+'media/site_images/arrowleft1.gif]',	// SubMenuImageSource ('[image_source]')

'['+baseurl+'media/site_images/arrowleft1.gif]',	// OverSubMenuImageSource

5,			// SubMenuImageWidth

9,			// SubMenuImageHeight

'6',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'#f6f9fb',		// VISITED Background

'#173778',		// VISITED Color

'none',			// VISITED TextDecoration

'['+baseurl+'media/site_images/arrowleft1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'['+baseurl+'media/site_images/arrowleft1.gif]',	// CURRENT SubMenuImageSource

'padding-left: 5px;',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];



c_styles['MM2']=[ // MainMenu (the shorter the class name the better)

[

// MENU BOX STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#000000',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

0,		// Padding

'',	// Background ('color','transparent','[image_source]')

'',	// OVER Background

'',	// Color

'',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,verdanahelvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

0,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing

true,			// UseSubMenuImage (true,false)

'['+baseurl+'media/site_images/arrowdown1.gif]',	// SubMenuImageSource ('[image_source]')

'['+baseurl+'media/site_images/arrowdown1.gif]',	// OverSubMenuImageSource

9,			// SubMenuImageWidth

5,			// SubMenuImageHeight

'5',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'',		// VISITED Background

'',		// VISITED Color

'none',			// VISITED TextDecoration

'['+baseurl+'media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'',	// CURRENT SubMenuImageSource

'',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];


c_styles['SM2']=[ // SubMenus

[

// MENU BOX STYLE

1,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#5c5c5c',	// BorderColor ('color')

0,		// Padding

'#FFFFFF',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

3,		// Padding

'#FFFFFF',	// Background ('color','transparent','[image_source]')

'#7A7A7A',	// OVER Background

'#000000',	// Color

'#FFFFFF',	// OVER Color

'11px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,helvetica,sans-serif',	// FontFamily

'bold',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'none',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

1,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#bbbbbb',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing

false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown1.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown1.gif]',	// OverSubMenuImageSource

9,			// SubMenuImageWidth

5,			// SubMenuImageHeight

'6',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'#FFFFFF',		// VISITED Background

'#000000',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#000000',		// CURRENT Color

'none',			// CURRENT TextDecoration

'[media/site_images/arrowdown1.gif]',	// CURRENT SubMenuImageSource

'padding-left: 10px; padding-right: 10px;',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

''		// VISITED Custom additional CSS for the items (valid CSS)

]];





c_styles['SM_tube']=[ // SubMenus

[

// MENU BOX STYLE

1,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#c5d0d6',	// BorderColor ('color')

0,		// Padding

'#f6f9fb',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#FFFFFF',	// BorderColor ('color')

'#FFFFFF',	// OVER BorderColor

5,		// Padding

'#f6f9fb',	// Background ('color','transparent','[image_source]')

'#ffffff',	// OVER Background

'#173778',	// Color

'#173778',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,helvetica,sans-serif',	// FontFamily

'normal',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'underline',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

1,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#d9e1f2',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing

false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown1.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown1.gif]',	// OverSubMenuImageSource

9,			// SubMenuImageWidth

5,			// SubMenuImageHeight

'6',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#FFFFFF',		// VISITED BorderColor

'#f6f9fb',		// VISITED Background

'#173778',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#DEF9AE',		// CURRENT Background

'#173778',		// CURRENT Color

'none',			// CURRENT TextDecoration

'[media/site_images/arrowdown1.gif]',	// CURRENT SubMenuImageSource

'padding-left: 10px; padding-right: 10px;',		// Custom additional CSS for the items (valid CSS)

'',		// OVER Custom additional CSS for the items (valid CSS)

'',		// CURRENT Custom additional CSS for the items (valid CSS)

'font-size: 12px;'		// VISITED Custom additional CSS for the items (valid CSS)

]];



c_styles['SM_upload']=[ // SubMenus

[

// MENU BOX STYLE

1,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'#fa961f',	// BorderColor ('color')

0,		// Padding

'#f6f9fb',	// Background ('color','transparent','[image_source]')

'',		// IEfilter (only transition filters work well - not static filters)

''		// Custom additional CSS for the menu box (valid CSS)

],[

// MENU ITEMS STYLE

0,		// BorderWidth

'solid',	// BorderStyle (CSS valid values except 'none')

'solid',	// OVER BorderStyle

'#ecc101',	// BorderColor ('color')

'#ecc101',	// OVER BorderColor

5,		// Padding

'#ffffcc',	// Background ('color','transparent','[image_source]')

'#ffffff',	// OVER Background

'#bd2800',	// Color

'#da2e00',	// OVER Color

'12px',		// FontSize (values in CSS valid units - %,em,ex,px,pt)

'arial,helvetica,sans-serif',	// FontFamily

'normal',	// FontWeight (CSS valid values - 'bold','normal','bolder','lighter','100',...,'900')

'none',		// TextDecoration (CSS valid values - 'none','underline','overline','line-through')

'underline',		// OVER TextDecoration

'left',		// TextAlign ('left','center','right','justify')

1,		// ItemsSeparatorSize

'solid',	// ItemsSeparatorStyle (border-style valid values)

'#ffeb81',	// ItemsSeparatorColor ('color','transparent')

0,		// ItemsSeparatorSpacing

false,			// UseSubMenuImage (true,false)

'[media/site_images/arrowdown1.gif]',	// SubMenuImageSource ('[image_source]')

'[media/site_images/arrowdown1.gif]',	// OverSubMenuImageSource

9,			// SubMenuImageWidth

5,			// SubMenuImageHeight

'0',			// SubMenuImageVAlign ('pixels from item top','middle')

'solid',		// VISITED BorderStyle

'#ecc101',		// VISITED BorderColor

'#ffffcc',		// VISITED Background

'#994800',		// VISITED Color

'none',			// VISITED TextDecoration

'[media/site_images/arrowdown1.gif]',	// VISITED SubMenuImageSource

'solid',		// CURRENT BorderStyle

'#DEF9AE',		// CURRENT BorderColor

'#ffffcc',		// CURRENT Background

'#994800',		// CURRENT Color

'none',			// CURRENT TextDecoration

'[media/site_images/arrowdown1.gif]',	// CURRENT SubMenuImageSource

'font-weight: normal;',		// Custom additional CSS for the items (valid CSS)

'font-weight: normal;',		// OVER Custom additional CSS for the items (valid CSS)

'font-weight: normal;',		// CURRENT Custom additional CSS for the items (valid CSS)

'font-weight: normal;'		// VISITED Custom additional CSS for the items (valid CSS)

]];







/******************************************************

	(3) MENU TREE FEATURES

*******************************************************/



// Normally you would probably have just one menu tree (i.e. one main menu with sub menus).

// But you are actually not limited to just one and you can have as many menu trees as you like.

// Just copy/paste a config block below and configure it for another UL element if you like.





c_menus['Menu_admin']=[ // the UL element with id="Menu_admin"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0',		// X Position (values in CSS valid units- px,em,ex)

'0',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

0,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'10em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_admin',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

4,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'150px',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_admin',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];
c_menus['Menu_tube_admin']=[ // the UL element with id="Menu_admin"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0',		// X Position (values in CSS valid units- px,em,ex)

'0',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

0,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'10em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_tube_admin',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

4,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'150px',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_tube_admin',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];

c_menus['Menu1']=[ // the UL element with id="Menu1"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0',		// X Position (values in CSS valid units- px,em,ex)

'0',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

0,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'10em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

4,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];

c_menus['Menu2']=[ // the UL element with id="Menu2"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-4,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];

c_menus['Menu3']=[ // the UL element with id="Menu3"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];

c_menus['Menu4']=[ // the UL element with id="Menu4"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];

c_menus['Menu5']=[ // the UL element with id="Menu5"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];

c_menus['Menu6']=[ // the UL element with id="Menu6"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];

c_menus['Menu_tube']=[ // the UL element with id="Menu_tube"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_tube',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_tube',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];
c_menus['Menu_tube6']=[ // the UL element with id="Menu_tube"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_tube',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_tube',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];
c_menus['Menu_tube2']=[ // the UL element with id="Menu_tube2"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_tube2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_tube',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];
c_menus['Menu_tube3']=[ // the UL element with id="Menu_tube3"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_tube2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_tube',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];
c_menus['Menu_tube4']=[ // the UL element with id="Menu_tube4"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_tube2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_tube',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];
c_menus['Menu_tube5']=[ // the UL element with id="Menu_tube5"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

-1,		// X SubMenuOffset (pixels)

0,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_tube2',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_tube',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];

c_menus['Menu_upload']=[ // the UL element with id="Menu_upload"

[

// MAIN-MENU FEATURES

'horizontal',	// ItemsArrangement ('vertical','horizontal')

'relative',	// Position ('relative','absolute','fixed')

'0px',		// X Position (values in CSS valid units- px,em,ex)

'0px',		// Y Position (values in CSS valid units- px,em,ex)

false,		// RightToLeft display of the sub menus

false,		// BottomToTop display of the sub menus

0,		// X SubMenuOffset (pixels)

-1,		// Y SubMenuOffset

'3em',		// Width (values in CSS valid units - px,em,ex) (matters for main menu with 'vertical' ItemsArrangement only)

'MM_upload',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

],[

// SUB-MENUS FEATURES

20,		// X SubMenuOffset (pixels)

11,		// Y SubMenuOffset

'auto',		// Width ('auto',values in CSS valid units - px,em,ex)

'100',		// MinWidth ('pixels') (matters/useful if Width is set 'auto')

'300',		// MaxWidth ('pixels') (matters/useful if Width is set 'auto')

'SM_upload',		// CSS Class (one of the defined in section 2)

false		// Open sub-menus onclick (default is onmouseover)

]];
