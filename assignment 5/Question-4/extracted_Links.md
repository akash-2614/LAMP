document.getElementsByTagName('a') function is used to extract all the links from a webpage. Since tag is used for creation of links so we can extract using the tag name as a reference.

Below is the example given which shows the extraction of links from a webpage :

links = document.getElementsByTagName('a')
HTMLCollection(55) [a#u_0_a_uH._42ft._4jy0._55pi._2agf._4o_4._63xb._p._4jy3._517h._51sy, a#u_0_c_lg._42ft._4jy0._55pi._2agf._4o_4._3_s2._63xb._p._4jy3._4jy1.selected._51sy, a#u_0_e_JQ._1gbd, a#u_0_5_xX._42ft._2d4g._2d4j._t7b, a#u_0_4_Tq.layer_close_elem.accessible_elem, a#u_0_g_qh._1gbd._1gbe, a, a, a#u_0_2_6b._42ft._4jy0._6lti._4jy6._4jy2.selected._51sy, a._8esh, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._sv4, a._42ft._4jy0._517i._517h._51sy, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a, a._41ug, a, a, a.accessible_elem, a.accessible_elem, u_0_a_uH: a#u_0_a_uH._42ft._4jy0._55pi._2agf._4o_4._63xb._p._4jy3._517h._51sy, u_0_c_lg: a#u_0_c_lg._42ft._4jy0._55pi._2agf._4o_4._3_s2._63xb._p._4jy3._4jy1.selected._51sy, u_0_e_JQ: a#u_0_e_JQ._1gbd, u_0_5_xX: a#u_0_5_xX._42ft._2d4g._2d4j._t7b, u_0_4_Tq: a#u_0_4_Tq.layer_close_elem.accessible_elem, …]

links.length
55

links[0]
<a role="menuitem" class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy" href="#" style="max-width:200px;" aria-haspopup="true" aria-expanded="false" rel="toggle" id="u_0_a_uH"><span class="_55pe">Sections of this page</span><span class="_4o_3 _3-99"><i class="img sp_DPyXVliY-x6 sx_19ceca"></i></span></a>

links[4]
<a aria-label="Close" class="layer_close_elem accessible_elem" href="#" role="button" id="u_0_4_Tq" aria-labelledby="u_0_4_Tq u_0_3_/G" tabindex="-1"></a>

// To print all links use for loop

<a aria-label=​"Close" class=​"layer*close_elem accessible_elem" href=​"#" role=​"button" id=​"u_0_4_Tq" aria-labelledby=​"u_0_4_Tq u_0_3*/​G" tabindex=​"-1">​</a>​
for(i=0; i<links.length; i++){
console.log(links[i]);
}
VM920:2 <a role=​"menuitem" class=​"_42ft \_4jy0 \_55pi \_2agf \_4o_4 \_63xb \_p \_4jy3 \_517h \_51sy" href=​"#" style=​"max-width:​200px;​" aria-haspopup=​"true" aria-expanded=​"false" rel=​"toggle" id=​"u_0_a_uH">​…​</a>​
VM920:2 <a role=​"menuitem" class=​"\_42ft \_4jy0 \_55pi \_2agf \_4o_4 \_3_s2 \_63xb \_p \_4jy3 \_4jy1 selected \_51sy" href=​"#" style=​"max-width:​200px;​" aria-haspopup=​"true" tabindex=​"-1" aria-expanded=​"false" rel=​"toggle" id=​"u_0_c_lg">​…​</a>​
VM920:2 <a href=​"/​login/​?cuid=AYjOqPLtKWeuzTvvNkwkY2dAyZWIlhNt6-Gp5_8Y_q1DIQv933LG9a8SHc3F…lvbl90aW1lIjoxNjE0Nzg2MDIxLCJjYWxsc2l0ZV9pZCI6MzQzNjE1NzkwMjAxNjQ0fQ%3D%3D" title=​"Akash Rawat" class=​"\_1gbd" id=​"u_0_e_JQ">​…​</a>​
VM920:2 <a role=​"button" class=​"\_42ft \_2d4g \_2d4j \_t7b" ajaxify=​"/​login/​device-based/​async/​remove/​?cuid=AYhegyPhYaIoBeaYg9vkvi0wuZiMygSTi8eiUFPyhwRSnuT9DwgA_-uWGz7INJ8cksxlAbTRJ4b46iYnCgcDEA1SaUida-FA0hFauTnxRtue3MFT1G650QsKXiicuAlu9k3ZSZcYZfYbMjD*yhqDbOqkmMO9YbPVOgVQRUyDLFuQ5g&flow=www_dbl_selector_remove" href=​"#" rel=​"async-post" id=​"u_0_5_xX" aria-describedby=​"u_0_4_Tq" aria-owns=​"js_0">​…​</a>​
VM920:2 <a aria-label=​"Close" class=​"layer_close_elem accessible_elem" href=​"#" role=​"button" id=​"u_0_4_Tq" aria-labelledby=​"u_0_4_Tq u_0_3*/​G" tabindex=​"-1">​</a>​
VM920:2 <a class=​"\_1gbd \_1gbe" href=​"/​login/​?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjE0Nzg2MDIxLCJjYWxsc2l0ZV9pZCI6MTMzMjk3MjM4NzAzNDMzN30%3D" id=​"u_0_g_qh">​…​</a>​
VM920:2 <a href=​"#" role=​"button">​…​</a>​
VM920:2 <a href=​"https:​/​/​www.facebook.com/​recover/​initiate/​?ars=facebook_login&privacy…lvbl90aW1lIjoxNjE0Nzg2MDIxLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D">​Forgotten password?​</a>​
VM920:2 <a role=​"button" class=​"\_42ft \_4jy0 \_6lti \_4jy6 \_4jy2 selected \_51sy" href=​"#" ajaxify=​"/​reg/​spotlight/​" id=​"u_0_2_6b" data-testid=​"open-registration-form-button" rel=​"async">​…​</a>​
VM920:2 <a href=​"/​pages/​create/​?ref_type=registration_form" class=​"\_8esh">​Create a Page​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​hi-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("hi_IN", "en_GB", "https:​\/​\/​hi-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 0)​;​ return false;​" title=​"Hindi">​हिन्दी​</a>​
VM920:2 <a class=​"\_sv4" dir=​"rtl" href=​"https:​/​/​ur-pk.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("ur_PK", "en_GB", "https:​\/​\/​ur-pk.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 1)​;​ return false;​" title=​"Urdu">​اردو​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​kn-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("kn_IN", "en_GB", "https:​\/​\/​kn-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 2)​;​ return false;​" title=​"Kannada">​ಕನ್ನಡ​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​ml-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("ml_IN", "en_GB", "https:​\/​\/​ml-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 3)​;​ return false;​" title=​"Malayalam">​മലയാളം​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​te-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("te_IN", "en_GB", "https:​\/​\/​te-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 4)​;​ return false;​" title=​"Telugu">​తెలుగు​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​ta-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("ta_IN", "en_GB", "https:​\/​\/​ta-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 5)​;​ return false;​" title=​"Tamil">​தமிழ்​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​mr-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("mr_IN", "en_GB", "https:​\/​\/​mr-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 6)​;​ return false;​" title=​"Marathi">​मराठी​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​gu-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("gu_IN", "en_GB", "https:​\/​\/​gu-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 7)​;​ return false;​" title=​"Gujarati">​ગુજરાતી​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​bn-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("bn_IN", "en_GB", "https:​\/​\/​bn-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 8)​;​ return false;​" title=​"Bengali">​বাংলা​</a>​
VM920:2 <a class=​"\_sv4" dir=​"ltr" href=​"https:​/​/​pa-in.facebook.com/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXT…jReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms" onclick=​"require("IntlUtils")​.setCookieLocale("pa_IN", "en_GB", "https:​\/​\/​pa-in.facebook.com\/​?stype=lo&jlou=AfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA&smuh=48658&lh=Ac-GZQOJ1fJWj1QIUms", "www_list_selector", 9)​;​ return false;​" title=​"Punjabi">​ਪੰਜਾਬੀ​</a>​
VM920:2 <a role=​"button" class=​"\_42ft \_4jy0 \_517i \_517h \_51sy" rel=​"dialog" ajaxify=​"/​settings/​language/​language/​?uri=https%3A%2F%2Fpa-in.facebook.com%2F%3Fstype%3Dlo%26jlou%3DAfeZij3Fib8qPrHpGhImQEd2_LfXTmAzJMkyqWLUkaIcSnsFV4wGYJBkMuNeNOtqJraS1ijReIG4eDe1C953OyXmm0p683zAh8L301jn5wqSlA%26smuh%3D48658%26lh%3DAc-GZQOJ1fJWj1QIUms&source=www_list_selector_more" href=​"#" title=​"Show more languages">​…​</a>​
VM920:2 <a href=​"/​r.php" title=​"Sign up for Facebook">​Sign Up​</a>​
VM920:2 <a href=​"/​login/​" title=​"Log in to Facebook">​Log In​</a>​
VM920:2 <a href=​"https:​/​/​messenger.com/​" title=​"Take a look at Messenger.">​Messenger​</a>​
VM920:2 <a href=​"/​lite/​" title=​"Facebook Lite for Android.">​Facebook Lite​</a>​
VM920:2 <a href=​"https:​/​/​www.facebook.com/​watch/​" title=​"Browse our Watch videos.">​ Watch ​</a>​
VM920:2 <a href=​"/​directory/​people/​" title=​"Browse our people directory.">​People​</a>​
VM920:2 <a href=​"/​directory/​pages/​" title=​"Browse our Pages directory.">​Pages​</a>​
VM920:2 <a href=​"/​pages/​category/​">​Page categories​</a>​
VM920:2 <a href=​"/​places/​" title=​"Take a look at popular places on Facebook.">​Places​</a>​
VM920:2 <a href=​"/​games/​" title=​"Check out Facebook games.">​Games​</a>​
VM920:2 <a href=​"/​directory/​places/​" title=​"Browse our places directory.">​Locations​</a>​
VM920:2 <a href=​"/​marketplace/​" title=​"Buy and sell on Facebook Marketplace.">​Marketplace​</a>​
VM920:2 <a href=​"https:​/​/​pay.facebook.com/​" target=​"\_blank" title=​"Learn more about Facebook Pay">​Facebook Pay​</a>​
VM920:2 <a href=​"/​directory/​groups/​" title=​"Browse our Groups directory.">​Groups​</a>​
VM920:2 <a href=​"/​jobs/​" title=​"Apply for jobs and hire on Facebook.">​Jobs​</a>​
VM920:2 <a href=​"https:​/​/​www.oculus.com/​" target=​"\_blank" title=​"Learn more about Oculus">​Oculus​</a>​
VM920:2 <a href=​"https:​/​/​portal.facebook.com/​" target=​"\_blank" title=​"Learn more about Portal from Facebook">​Portal​</a>​
VM920:2 <a href=​"https:​/​/​www.instagram.com/​" title=​"Take a look at Instagram" target=​"\_blank" rel=​"noopener nofollow" data-lynx-mode=​"asynclazy" data-lynx-uri=​"https:​/​/​l.facebook.com/​l.php?u=https%3A%2F%2Fwww.instagram.com%2F&h=AT1VPDMFWrkMGu7fRHDfH_HN1CNZrIXE8tr_mRIS1eITEG5xZvwtlFUKeHBHbhpNeNq-Qw6JMOSETAADFvViUTYu2jfTzfIJ0h6KwAYoCKph9YNhRaDsJQ8X4GS8ayfUTVzjaeFbupccEA">​Instagram​</a>​
VM920:2 <a href=​"/​local/​lists/​245019872666104/​" title=​"Browse our Local Lists directory.">​Local​</a>​
VM920:2 <a href=​"/​fundraisers/​" title=​"Donate to worthy causes.">​Fundraisers​</a>​
VM920:2 <a href=​"/​biz/​directory/​" title=​"Browse our Facebook Services directory.">​Services​</a>​
VM920:2 <a href=​"/​votinginformationcenter/​?entry_point=c2l0ZQ%3D%3D" title=​"See the Voting Information Centre">​Voting Information Centre​</a>​
VM920:2 <a href=​"/​facebook" accesskey=​"8" title=​"Read our blog, discover the resource centre and find job opportunities.">​About​</a>​
VM920:2 <a href=​"/​ad_campaign/​landing.php?placement=pflo&campaign_id=402047449186&nav_source=unknown&extra_1=auto" title=​"Advertise on Facebook">​Create ad​</a>​
VM920:2 <a href=​"/​pages/​create/​?ref_type=site_footer" title=​"Create a Page">​Create Page​</a>​
VM920:2 <a href=​"https:​/​/​developers.facebook.com/​?ref=pf" title=​"Develop on our platform.">​Developers​</a>​
VM920:2 <a href=​"/​careers/​?ref=pf" title=​"Make your next career move to our brilliant company.">​Careers​</a>​
VM920:2 <a data-nocookies=​"1" href=​"/​privacy/​explanation" title=​"Learn about your privacy and Facebook.">​Privacy​</a>​
VM920:2 <a href=​"/​policies/​cookies/​" title=​"Learn about cookies and Facebook." data-nocookies=​"1">​Cookies​</a>​
VM920:2 <a class=​"\_41ug" data-nocookies=​"1" href=​"https:​/​/​www.facebook.com/​help/​568137493302217" title=​"Learn about AdChoices.">​…​</a>​
VM920:2 <a data-nocookies=​"1" href=​"/​policies?ref=pf" accesskey=​"9" title=​"Review our terms and policies.">​Terms​</a>​
VM920:2 <a href=​"/​help/​?ref=pf" accesskey=​"0" title=​"Visit our Help Centre.">​Help​</a>​
VM920:2 <a accesskey=​"6" class=​"accessible_elem" href=​"/​settings" title=​"View and edit your Facebook settings.">​Settings​</a>​
VM920:2 <a accesskey=​"7" class=​"accessible_elem" href=​"/​allactivity?privacy_source=activity_log_top_menu" title=​"View your activity log">​Activity log​</a>

- All links will be extracted
