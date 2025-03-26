<?php

include('./header.php');
include('./footer.php');
include('./components.php');




// Newsletter construction

function newsletter($header, $footer){

$repeater = <<<HTML

<!-- @@@ LAYOUT @@@ -->
<repeater>
    
     
      <layout label="spacer-8">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff" height="8">
          <tr>
            <td height="8" style="line-height:1px;font-size:1px;">
              <img src="px.gif" alt="spacer" height="8">
              <span style="color:#ffffff;display:none;font-size:1px;" class="invisible_text">
                <singleline label="blank-text">Antistatique</singleline>
              </span>
            </td>
          </tr>
        </table>
      </layout>
    
      <layout label="spacer-16">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff" height="16">
          <tr>
            <td height="16" style="line-height:1px;font-size:1px;">
              <img src="px.gif" alt="spacer" height="16">
              <span style="color:#ffffff;display:none;font-size:1px;" class="invisible_text">
                <singleline label="blank-text">Antistatique</singleline>
              </span>
            </td>
          </tr>
        </table>
      </layout>
    
      <layout label="spacer-32">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff" height="32">
          <tr>
            <td height="32" style="line-height:1px;font-size:1px;">
              <img src="px.gif" alt="spacer" height="32">
              <span style="color:#ffffff;display:none;font-size:1px;" class="invisible_text">
                <singleline label="blank-text">Antistatique</singleline>
              </span>
            </td>
          </tr>
        </table>
      </layout>
    
      <layout label="spacer-64">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff" height="64">
          <tr>
            <td height="64" style="line-height:1px;font-size:1px;">
              <img src="px.gif" alt="spacer" height="64">
              <span style="color:#ffffff;display:none;font-size:1px;" class="invisible_text">
                <singleline label="blank-text">Antistatique</singleline>
              </span>
            </td>
          </tr>
        </table>
      </layout>
    
    
      <layout label="hr">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#E1E1E1" height="1" class="hr-table">
          <tr>
            <td height="1" style="line-height:1px;font-size:1px;">
              <img src="px.gif" alt="spacer" height="1">
              <span style="color:#ffffff;display:none;font-size:1px;" class="invisible_text">
                <singleline label="blank-text">Antistatique</singleline>
              </span>
            </td>
          </tr>
        </table>
      </layout>
    
      <layout label="intro-text">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr>
                  <td>
                    <multiline label="intro">
                      <p style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:22px;line-height:26px;font-weight: 500;color:#000032;" class="title_22">
                        Bonjour Noémie, cette semaine, on vous parle de l’évolution de notre agence tant d’un point de vue structurel que visuel. Nous sommes ravis de te la faire découvrir !
                      </p>
                    </multiline>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
    
      <layout label="title-numbered">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr>
                  <td height="24" style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="" width="1" height="40">
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:32px;line-height:112%;font-weight: 500;color:#FF00AA;" class="title_32">
                      <singleline label="title">Point of view</singleline>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:32px;line-height:112%;font-weight: 500;color:#000032;" class="title_32">
                      <singleline label="title">Refonte web, comment se positionner</singleline>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td height="24" style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="" width="1" height="24">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
    
    
      <layout label="category_reading-time">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr>
                  <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#FF00AA;" class="text_16">
                  <singleline label="article_1_category-link"><a href="https://antistatique.net" style="text-decoration: none;color:#FF00AA;">Portfolio</a></singleline>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
      <layout label="title">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr>
                  <td style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:32px;line-height:112%;font-weight: 500;color:#000032;" class="title_32">
                    <a href="https://antistatique.net" style="color:#000032;text-decoration:none;">
                      <singleline label="title">Dernières nouveautés ou peut être un titre sur plusieurs lignes histoire de tester l'interlignage</singleline>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td height="12" style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="" width="1" height="12">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
      <layout label="image">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr>
                  <td>
                    <img src="2025_banner_tiphaine.png" alt="..." editable="true" label="image" width="600" class="full-image" style="height:auto;border-radius: 8px;">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
    
      <layout label="paragraphe_content">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr>
                  <td height="4" style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="" width="1" height="4">
                  </td>
                </tr>
                <tr>
                  <td  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#4D4D70;" class="text_16">
                    <multiline label="paragraphe">
                      <p  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#4D4D70;" class="text_16">
                        Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesen.
                      </p>
                    </multiline>
                  </td>
                </tr>
                <tr>
                  <td height="4" style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="" width="1" height="4">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
    
      <layout label="cta_link">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr>
                  <td  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#FF00AA;" class="text_16">
                    <a href="https://antistatique.net" class="cta_link text_20">
                      <singleline label="link">Ths is a link CTA label</singleline>
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
    
      <layout label="two_column_elements">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr>
                  <td>
    
                    <table cellpadding="0" cellspacing="0" border="0" width="290" align="left" class="full-table">
                      <tr>
                        <td height="8" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="8">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="2025_banner_tiphaine.png" alt="..." editable="true" label="article_1_image" width="290" height="auto" class="full-image" style="height:auto;border-radius: 8px;">
                        </td>
                      </tr>
                      <tr>
                        <td height="8" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="8">
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#FF00AA;" class="text_16">
                          <singleline label="article_1_category-link"><a href="https://antistatique.net" style="text-decoration: none;color:#FF00AA;">Portfolio</a></singleline>
                        </td>
                      </tr>
                      <tr>
                        <td height="2" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="2">
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:22px;line-height:26px;font-weight: 500;color:#000032;" class="title_22">
                          <a href="https://antistatique.net" style="color:#000032;text-decoration:none;">
                            <singleline label="article_1_title">Dernières nouveautés ou peut être un titre sur plusieurs lignes histoire de tester l'interlignage</singleline>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td height="8" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="8">
                        </td>
                      </tr>
                      <tr>
                        <td  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#4D4D70;" class="text_16">
                          <multiline label="article_1_paragraphe">
                            <p  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#4D4D70;" class="text_16">
                              Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesen.
                            </p>
                          </multiline>
                        </td>
                      </tr>
    
                      <tr>
                        <td height="4" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="4">
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;" class="text_16">
                          <a href="https://antistatique.net" class="cta_link text_16" style="color:#FF00AA;">
                            <singleline label="article_1_link">Ths is a link CTA label 2</singleline>
                          </a>
                        </td>
                      </tr>
    
                      <tr>
                        <td height="32" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="32">
                        </td>
                      </tr>
    
                    </table>
    
    
                    <table cellpadding="0" cellspacing="0" border="0" width="290" align="right" class="full-table">
                      <tr>
                        <td height="8" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="8">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="2025_banner_tiphaine.png" alt="..." editable="true" label="article_2_image" width="290" height="auto" class="full-image" style="height:auto;border-radius: 8px;">
                        </td>
                      </tr>
                      <tr>
                        <td height="8" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="8">
                        </td>
                      </tr>
                      <tr>
                       <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#FF00AA;" class="text_16">
                        <singleline label="article_2_category-link"><a href="https://antistatique.net" style="text-decoration: none;color:#FF00AA;">Portfolio</a></singleline>
                      </td>
                      </tr>
                      <tr>
                        <td height="2" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="2">
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:22px;line-height:26px;font-weight: 500;color:#000032;" class="title_22">
                          <a href="https://antistatique.net" style="color:#000032;text-decoration:none;">
                            <singleline label="article_2_title">Dernières nouveautés ou peut être un titre sur plusieurs lignes histoire de tester l'interlignage</singleline>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td height="8" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="8">
                        </td>
                      </tr>
                      <tr>
                        <td  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#4D4D70;" class="text_16">
                          <multiline label="article_2_paragraphe">
                            <p  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#4D4D70;" class="text_16">
                              Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesen.
                            </p>
                          </multiline>
                        </td>
                      </tr>
    
                      <tr>
                        <td height="4" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="4">
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;" class="text_16">
                          <a href="https://antistatique.net" class="cta_link text_16" style="color:#FF00AA;">
                            <singleline label="article_2_link">Ths is a link CTA label</singleline>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td height="32" style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="32">
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
      
    
      <layout label="big_cta">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                <tr height="32">
                  <td style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="spacer" height="32">
                  </td>
                </tr>
                <tr>
                  <td align="left">
                    <a href="https://antistatique.net" class="cta_button cta_button_full text_20" style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:20px;line-height: 140%;font-weight: 400;color:#FFFFFF;">
                      <singleline label="cta_right">Partager la newsletter</singleline>
                    </a>
                  </td>
                </tr>
                <tr height="32">
                  <td style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="spacer" height="32">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
      
      <layout label="quote">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
          <tr>
            <td>
              <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
              <tr>
                <td height="16" style="line-height:1px;font-size:1px;">
                  <img src="px.gif" alt="" width="1" height="16">
                </td>
              </tr>
              <tr>
                <td>
                  <div style="background-color: #D2EEFA; border-start-start-radius: 16px;border-end-end-radius: 16px; border-start-end-radius: 16px;">
                    
                      <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
                      <tr>
                        <td height="16" width="16" style="line-height:1px;font-size:1px;" rowspan="3">
                          <img src="px.gif" alt="" width="1" height="16">
                        </td>
                        <td height="16"style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="16">
                        </td>
                        <td height="16" width="16" style="line-height:1px;font-size:1px;" rowspan="3">
                          <img src="px.gif" alt="" width="1" height="16">
                        </td>
                      </tr>
                      <tr>
                        <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:20px;line-height: 140%;font-weight: 400;color:#000032;margin-bottom: 0;" class="text_20">
                          <multiline label="quote">
                                <p style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:20px;line-height: 140%;font-weight: 400;color:#000032;margin-bottom: 0;" class="text_20">
                                  “Antistatique a dès les premiers pas fait preuve de beaucoup d’enthousiasme et de professionnalisme. [...] un projet dynamique, évolutif et ayant déjà reçu des échos très favorables du terrain.”</p>
                              </multiline>                          
                        </td>
                      </tr>
                      <tr>
                        <td height="16"style="line-height:1px;font-size:1px;">
                          <img src="px.gif" alt="" width="1" height="16">
                        </td>
                      </tr>
                      </table>                  
                  </div>
                </td>
              </tr>
                <tr>
                  <td align="left" valign="top" height="16"style="line-height:1px;font-size:1px;">
                    <img src="2025_quote_triangle.png" alt="" style="display: block;" width="16">
                  </td>
                </tr>
                <tr>
                  <td height="6"style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="" width="1" height="6">
                  </td>
                </tr>
                <tr>
                  <td style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;font-weight: 500;color:#000032;" class="text_16" valign="top">
                    <singleline label="quote_author"><a href="https://antistatique.net" style="text-decoration: none;">Léonard Evéquoz</a></singleline>
                  </td>
                </tr>
                <tr>
                  <td  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#4D4D70;" class="text_16">
                    <singleline label="quote_function"><a href="https://antistatique.net" style="text-decoration: none;color:#4D4D70;">Directeur adjoint · Smarter</a></singleline>
                  </td>
                </tr>
                <tr>
                  <td height="16"style="line-height:1px;font-size:1px;">
                    <img src="px.gif" alt="" width="1" height="16">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </layout>
    
</repeater>
<!-- @@@ //LAYOUT @@@ -->

HTML;    
    
// Code
$html = $header;
$html .= <<<HTML


{$repeater}


 <!-- Repérages start -->

<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
<tr>
  <td>
    <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
    <tr>
      <td bgcolor="#FFFFFF" colspan="5" style="line-height:1px;font-size:1px;" valign="bottom">
          <img src="2025_block_watch_top.png" alt="Antistatique - notre logo en magenta" width="100%" class="full-image" />
      </td>
    </tr>
    <tr>
      <td bgcolor="#FFEFF0" rowspan="2" style="line-height:1px;font-size:1px;">
        <img src="px.gif" alt="spacer" width="4">
      </td>
      <td rowspan="2" style="line-height:1px;font-size:1px;">
        <img src="px.gif" alt="spacer" width="20">
      </td>
      <td align="center" style="line-height:1px;font-size:1px;" height="20" width="100%">
        <img src="px.gif" alt="spacer" height="20">
      </td>
      <td rowspan="2" style="line-height:1px;font-size:1px;">
        <img src="px.gif" alt="spacer" width="20">
      </td>
      <td bgcolor="#FFEFF0" rowspan="2" style="line-height:1px;font-size:1px;">
        <img src="px.gif" alt="spacer" width="4">
      </td>
    </tr>
    <tr>
      <td>
        
        <repeater>
          <layout label="reperage">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
              <tr>
                <td width="50" rowspan="2" valign="top">
                  <a href="https://antistatique.net"><img src="2025_portrait_marc.png" alt="Marc" editable="true" width="50"></a>
                </td>
                <td width="8" style="line-height:1px;font-size:1px;" rowspan="2">
                  <img src="px.gif" alt="spacer" width="8">
                </td>
                <td  style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:16px;line-height: 140%;font-weight: 400;color:#FF00AA;" class="text_16">
                  <singleline label="reperage_category"><a href="https://antistatique.net" style="text-decoration: none;color:#4D4D70;">Branding</a></singleline>
                </td>
                <td width="8" style="line-height:1px;font-size:1px;" rowspan="2">
                  <img src="px.gif" alt="spacer" width="8">
                </td>
                <td width="8" style="line-height:1px;font-size:1px;" rowspan="2">
                  <a href="https://antistatique.net"><img src="2025_icon-arrow-up-right.png" alt="arrow" editable="true" width="20"></a>
                </td>
              </tr>
              <tr>
                <td style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:22px;line-height:28px;font-weight: 500;color:#000032;" class="title_22" valign="top">
                <singleline label="reperage_lien"><a href="https://antistatique.net" style="text-decoration: underline;">Branding de la ville d'Helsinki Branding de la ville d'Helsinki Branding de la ville d'Helsinki</a></singleline>
              </td>
              </tr>
            </table>
          </layout>
          <layout label="reperage_hr">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" height="17" class="hr-table">
              <tr>
                <td height="8" style="line-height:1px;font-size:1px;">
                  <img src="px.gif" alt="spacer" height="8">
                </td>
              </tr>
            <tr>
              <td height="1" style="line-height:1px;font-size:1px;" bgcolor="#E1E1E1" >
                <img src="px.gif" alt="spacer" height="1">
                <span style="color:#ffffff;display:none;font-size:1px;" class="invisible_text">
                  <singleline label="blank-text">Antistatique</singleline>
                </span>
              </td>
            </tr>
            <tr>
              <td height="8" style="line-height:1px;font-size:1px;">
                <img src="px.gif" alt="spacer" height="8">
              </td>
            </tr>
          </table>
          </layout>
        </repeater>
        
      </td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2" width="24" height="24" style="line-height:1px;font-size:1px;">
          <img src="2025_block_watch_bottom_left.png" alt="border" width="24" height="24" style="display: block;"/>
       </td>
        <td style="line-height:1px;font-size:1px;">
          <img src="px.gif" alt="spacer" width="20">
        </td>
      <td colspan="2" rowspan="2" width="24" height="24" style="line-height:1px;font-size:1px;">
          <img src="2025_block_watch_bottom_right.png" alt="border" width="24" height="24" style="display: block;"/>
       </td>
    </tr>
    <tr>
      <td  bgcolor="#FFEFF0" style="line-height:1px;font-size:1px;" height="4">
        <img src="px.gif" alt="spacer" width="4" height="4">
      </td>
    </tr>
  </table>
  </td>
    </tr>
  </table>


{$repeater}


<!-- @@@ FOOTER @@@ -->

  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr height="32">
      <td style="line-height:1px;font-size:1px;">
        <img src="px.gif" alt="spacer" height="32">
      </td>
    </tr>
</table>    

<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" bgcolor="#ffffff">
  <tr>
    <td>
      <table cellpadding="0" cellspacing="0" border="0" width="600" align="center" class="full-table">
        <tr>
          <td height="48" style="line-height:1px;font-size:1px;" colspan="7">
            <img src="px.gif" alt="" width="1" height="48">
          </td>
        </tr>
        <tr>
          <td style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:32px;line-height:112%;font-weight: 500;color:#000032;" class="title_32" colspan="7">
              <singleline label="Sondage_title">Cette newsletter était</singleline>
          </td>
        </tr>
        <tr>
          <td height="24" style="line-height:1px;font-size:1px;" colspan="7">
            <img src="px.gif" alt="" width="1" height="24">
          </td>
        </tr>
        <tr>
          <td style="line-height:12px;font-size:12px;" width="25%">
              <div style="background-color: #F2F2F5; border-radius: 16px;">
                <center>
                  <br/><br/>
                  <a href="https://antistatique.net/merci" style="text-decoration: none;">
                  <img src="2025_icon_visage-triste.png" alt="Pas la meilleure" editable="true" width="45">
                  </a>
                  <br/><br/>
                  <p style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;line-height:20px;font-weight: 500;color:#4D4D70;">
                    <singleline label="Sondage_1"><a href="https://antistatique.net/merci" style="text-decoration: none;">Pas la meilleure</a></singleline>
                  </p>
                  <br/>
                </center>
              </div>
          </td>
          <td width="8" style="line-height:1px;font-size:1px;">
            <img src="px.gif" alt="" width="8" height="8">
          </td>    
          <td style="line-height:12px;font-size:12px;" width="25%">
              <div style="background-color: #F2F2F5; border-radius: 16px;">
                <center>
                  <br/><br/>
                  <a href="https://antistatique.net/merci" style="text-decoration: none;">
                  <img src="2025_icon_bird.png" alt="Pas la meilleure" editable="true" width="45">
                  </a>
                  <br/><br/>
                  <p style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;line-height:20px;font-weight: 500;color:#4D4D70;">
                    <singleline label="Sondage_2"><a href="https://antistatique.net/merci" style="text-decoration: none;">trop courte</a></singleline>
                  </p>
                  <br/>
                </center>
              </div>
          </td>
          <td width="8" style="line-height:1px;font-size:1px;">
            <img src="px.gif" alt="" width="8" height="8">
          </td>   
          <td style="line-height:12px;font-size:12px;" width="25%">
              <div style="background-color: #F2F2F5; border-radius: 16px;">
                <center>
                  <br/><br/>
                  <a href="https://antistatique.net/merci" style="text-decoration: none;">
                  <img src="2025_icon_idee.png" alt="Pas la meilleure" editable="true" width="45">
                  </a>
                  <br/><br/>
                  <p style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;line-height:20px;font-weight: 500;color:#4D4D70;">
                    <singleline label="Sondage_3"><a href="https://antistatique.net/merci" style="text-decoration: none;">Instructive</a></singleline>
                  </p>
                  <br/>
                </center>
              </div>
          </td>
          <td width="8" style="line-height:1px;font-size:1px;">
            <img src="px.gif" alt="" width="8" height="8">
          </td>   
          <td style="line-height:12px;font-size:12px;" width="25%">
              <div style="background-color: #F2F2F5; border-radius: 16px;">
                <center>
                  <br/><br/>
                  <a href="https://antistatique.net/merci" style="text-decoration: none;">
                  <img src="2025_icon_visage-etoiles.png" alt="Pas la meilleure" editable="true" width="45">
                  </a>
                  <br/><br/>
                  <p style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;line-height:20px;font-weight: 500;color:#4D4D70;">
                    <singleline label="Sondage_4"><a href="https://antistatique.net/merci" style="text-decoration: none;">Incroyable</a></singleline>
                  </p>
                  <br/>
                </center>
              </div>
          </td>                                    
        </tr>
        <tr>
          <td height="48" style="line-height:1px;font-size:1px;" colspan="7">
            <img src="px.gif" alt="" width="1" height="48">
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>


<table cellpadding="0" cellspacing="0" border="0" width="700" align="center" class="full-table" bgcolor="#FFCC48" style="border-radius: 16px;">

          <tr>
            <td style="line-height:1px;font-size:1px;" width="24">
              <img src="px.gif" alt="spacer" height="24" width="24">
            </td>
            <td align="left">
              <img src="2025_arrow_footer.png" alt="arrow" style="margin-top:0;margin-right:15%;margin-left: 20%;margin-bottom:16px;float: right;">
              
              <table cellpadding="2" cellspacing="2" border="0">
                <tr>
                  <td style="line-height:1px;font-size:1px;" height="16">
                    <img src="px.gif" alt="spacer" height="16" width="16">
                  </td>
                </tr>
              <tr><td>
              <p style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:22px;line-height:26px;font-weight: 500;color:#000032; margin-bottom:2px;" class="title_22">
                Antistatique
              </p>
              <p style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:22px;line-height:26px;font-weight: 500;color:#000032; margin-bottom:20px;opacity: 0.5" class="title_22">
                Digital Since Forever.
              </p>
              </td>
              </tr>
              <tr>
                <td style="line-height:1px;font-size:1px;" height="16">
                  <img src="px.gif" alt="spacer" height="16" width="16">
                </td>
              </tr>
              </table>
              
              
              <table cellpadding="2" cellspacing="2" border="0" align="left">
                <tr>
                    <td><a href="https://facebook.com/Antistatique" target="_blank"><img src="2025_icon_rs_facebook.png" alt="facebook" style="display: block;"></a></td>
                    <td><a href="https://instagram.com/antistatique" target="_blank"><img src="2025_icon_rs_instagram.png" alt="instagram" style="display: block;"></a></td>
                    <td><a href="https://www.linkedin.com/company/antistatique.net/" target="_blank"><img src="2025_icon_rs_linkedin.png" alt="linkedin" style="display: block;"></a></td>
                    <td><a href="https://x.com/antistatique" target="_blank"><img src="2025_icon_rs_x.png" alt="x" style="display: block;"></a></td>
                </tr>
                <tr>
                  <td style="line-height:1px;font-size:1px;" height="16" colspan="4">
                    <img src="px.gif" alt="spacer" height="16" width="16">
                  </td>
                </tr>
              </table>
              
              <table cellpadding="0" cellspacing="0" border="0" align="right">
                <tr>
                  <td valign="top">
                    <div><!--[if mso]>
                      <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="mailto:hello@antistatique.net" style="height:40px;v-text-anchor:middle;width:200px;" arcsize="80%" stroke="f" fillcolor="#000032">
                        <w:anchorlock/>
                        <center>
                      <![endif]-->
                          <a href="mailto:hello@antistatique.net"
                    style="background-color:#000032;border-radius:32px;color:#ffffff;display:inline-block;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;">Nous écrire !</a>
                      <!--[if mso]>
                        </center>
                      </v:roundrect>
                    <![endif]--></div>
                  </td>
                </tr>
              </table>
            </td>
            <td style="line-height:1px;font-size:1px;" width="24">
              <img src="px.gif" alt="spacer" height="24" width="24">
            </td>
          </tr>
           <tr height="24">
             <td style="line-height:1px;font-size:1px;" width="24">
               <img src="px.gif" alt="spacer" height="24" width="24">
             </td>
               <td style="line-height:1px;font-size:1px;">
                 <img src="px.gif" alt="spacer" height="24">
               </td>
              <td style="line-height:1px;font-size:1px;" width="24">
               <img src="px.gif" alt="spacer" height="24" width="24">
             </td>
           </tr>
        </table>
<!-- /@@@ FOOTER @@@ -->
HTML;

$html .= $footer;

return $html;
}

// Writing HTML files french and english version or display the result
    $handle = fopen('index.html','w+'); 
    fwrite($handle,newsletter($header, $footer)); fclose($handle); 


// display the newsletter
echo newsletter($header, $footer);